<?php
// upload/upload.php
// Recebe arquivos do formulário e salva na mesma pasta com nomes únicos.

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	http_response_code(405);
	echo 'Método não permitido';
	exit;
}

// Config
$uploadDir = __DIR__ . DIRECTORY_SEPARATOR; // salva na pasta upload/
$allowedExt = ['pdf','png','jpg','jpeg','gif'];
$maxSize = 5 * 1024 * 1024; // 5 MB por arquivo

$fields = ['diploma'];
$results = [];

foreach ($fields as $field) {
	if (!isset($_FILES[$field]) || $_FILES[$field]['error'] === UPLOAD_ERR_NO_FILE) {
		$results[$field] = ['ok' => false, 'message' => 'Nenhum arquivo enviado'];
		continue;
	}

	$file = $_FILES[$field];

	if ($file['error'] !== UPLOAD_ERR_OK) {
		$results[$field] = ['ok' => false, 'message' => 'Erro no upload: ' . $file['error']];
		continue;
	}

	if ($file['size'] > $maxSize) {
		$results[$field] = ['ok' => false, 'message' => 'Arquivo muito grande'];
		continue;
	}

	$origName = $file['name'];
	$ext = strtolower(pathinfo($origName, PATHINFO_EXTENSION));

	if (!in_array($ext, $allowedExt)) {
		$results[$field] = ['ok' => false, 'message' => 'Extensão não permitida: ' . $ext];
		continue;
	}

	// Nome único: timestamp + uniqid + nome-sanitizado
	$base = pathinfo($origName, PATHINFO_FILENAME);
	$safeBase = preg_replace('/[^A-Za-z0-9_\-]/', '_', $base);
	$newName = date('Ymd_His') . '_' . uniqid() . '_' . $safeBase . '.' . $ext;
	$target = $uploadDir . $newName;

	if (move_uploaded_file($file['tmp_name'], $target)) {
		$results[$field] = ['ok' => true, 'saved_as' => $newName];
	} else {
		$results[$field] = ['ok' => false, 'message' => 'Falha ao mover o arquivo'];
	}
}

// Opcional: salvar metadados do envio em um arquivo JSON único
$submission = [
	'time' => date('c'),
	'files' => $results
];

$metaName = 'submission_' . date('Ymd_His') . '_' . uniqid() . '.json';
file_put_contents($uploadDir . $metaName, json_encode($submission, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Resposta simples
header('Content-Type: application/json; charset=utf-8');
echo json_encode(['status' => 'ok', 'results' => $results, 'meta' => $metaName]);

?>


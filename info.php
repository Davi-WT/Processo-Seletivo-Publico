<?php
echo "Informações Pessoais:";
echo "Nome: " . $_POST['nome'] . "<br>";
echo "CPF: " . $_POST['cpf'] . "<br>";
echo "RG: " . $_POST['rg'] . "<br>";
echo "Estado Civil: " . $_POST['estado-civil'] . "<br>";
echo "Filiação Materna: " . $_POST['filiacao-materna'] . "<br>";
echo "Filiação Paterna: " . $_POST['filiacao-paterna'] . "<br>";
echo "Email: " . $_POST['email'] . "<br>";
echo "Telefone: " . $_POST['telefone'] . "<br>";
echo "Rua: " . $_POST['rua'] . "<br>";
echo "Número: " . strval($_POST['numero']) . "<br>";
echo "Estado: " . $_POST['estado'] . "<br>";
echo "Cargo Selecionado: " . $_POST['cargo'] . "<br>"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilo.css">
    <title>Document</title>
</head>
<body>
    <h1 >Processo Seletivo Simplificado n° XX/YYYY</h1>
    <h3>Preencha o formulário </h3>
    
    <ul class="nav nav-tabs">
        <li class="nav-item active">Dados Pessoais</li>
        <li class="nav-item ">Contato e Endereço</li>
        <li class="nav-item ">Seleção de Cargo</li>
        <li class="nav-item ">Qualificações</li>
    </ul>

    <form action="./contatoeEndereco.php" method="post">
    <div class="container mt-5" id="formulario">
        <div class="row">
            
                <div class="col-md-6" id="colunaE">
                    <div class="mb-3">
                        <label for="nome" class="form-label"><strong>Nome <span class="text-danger">*</span></strong></label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label"><strong>CPF <span class="text-danger">*</span></strong></label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <div class="mb-3">
                        <label for="rg" class="form-label"><strong>RG</strong></label>
                        <input type="text" class="form-control" id="rg" name="rg">
                    </div>
                    <div class="mb-3">
                        <label for="estado-civil" class="form-label"><strong>Estado Civil</strong></label>
                        <input type="text" class="form-control" id="estado-civil" name="estado-civil">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="filiacao-materna" class="form-label"><strong>Filiação Materna:</strong></label>
                        <input type="text" class="form-control" id="filiacao-materna" name="filiacao-materna">
                    </div>
                    <div class="mb-3">
                        <label for="filiacao-paterna" class="form-label"><strong>Filiação Paterna:</strong></label>
                        <input type="text" class="form-control" id="filiacao-paterna" name="filiacao-paterna">
                    </div>
                </div>
        </div>
    </div>

    <div style="position: fixed; right: 4vw; bottom: 4vh;">
        <button class="btn btn-primary"><input type="submit" value="Próximo Passo" class="btn btn-primary"></button>
    </div>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <h1>Processo Seletivo Simplificado n° XX/YYYY</h1>
    <h3>Escolha o cargo desejado </h3>

    <ul class="nav nav-tabs">
        <li class="nav-item passed">Dados Pessoais</li>
        <li class="nav-item passed">Contato e Endereço</li>
        <li class="nav-item active">Seleção de Cargo</li>
        <li class="nav-item ">Qualificações</li>
    </ul>


    <form action="./qualificacoes.php" method="post">

        <input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>">
        <input type="hidden" name="cpf" value="<?php echo $_POST['cpf']; ?>">
        <input type="hidden" name="rg" value="<?php echo $_POST['rg']; ?>">
        <input type="hidden" name="estado-civil" value="<?php echo $_POST['estado-civil']; ?>">
        <input type="hidden" name="filiacao-materna" value="<?php echo $_POST['filiacao-materna']; ?>">
        <input type="hidden" name="filiacao-paterna" value="<?php echo $_POST['filiacao-paterna']; ?>">
        <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
        <input type="hidden" name="telefone" value="<?php echo $_POST['telefone']; ?>">
        <input type="hidden" name="rua" value="<?php echo $_POST['rua']; ?>">
        <input type="hidden" name="numero" value="<?php echo $_POST['numero']; ?>">
        <input type="hidden" name="estado" value="<?php echo $_POST['estado']; ?>">

    <div class="container mt-5" id="formulario">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-6">
                    <button class="opcaoCargo" id="administrativo" name="cargo" value="Administrativo">
                        <i class="fa fa-file-text-o"></i><br>
                        <span>Administrativo</span>
                    </button>
                </div>
                <div class="mb-6">
                    <button class="opcaoCargo" id="Monitor" name="cargo" value="Monitor">
                        <i class="fa fa-file-text-o"></i> <br>
                        <span>Monitor</span>
                    </button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-6">
                    <button class="opcaoCargo" name="cargo" value="Motorista">
                        <i class="fa fa-file-text-o"></i><br>
                        <span>Motorista</span>
                    </button>
                </div>
                <div class="mb-6">
                    <button class="opcaoCargo" name="cargo" value="Professor">
                        <i class="fa fa-file-text-o"></i><br>
                        <span>Professor</span>
                    </button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-6">
                    <button class="opcaoCargo"  name="cargo" value="Servente"> 
                        <i class="fa fa-file-text-o"></i><br>
                        <span>Servente</span>
                    </button>
                </div>
                <div class="mb-6">
                    <button class="opcaoCargo" name="cargo" value="Uianes">
                        <i class="fa fa-file-text-o"></i><br>
                        <span>Uianes</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
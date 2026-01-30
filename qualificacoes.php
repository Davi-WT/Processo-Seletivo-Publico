<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Processo Seletivo Simplificado n° XX/YYYY</h1>
    <h3>Upload de Documentos </h3>
    
    <div class="topbar" >
        <ul class="nav nav-tabs">
            <li class="nav-item nav-link">Dados Pessoais</li>
            <li class="nav-item nav-link">Contato e Endereço</li>
            <li class="nav-item nav-link">Seleção de Cargo</li>
            <li class="nav-item active nav-link">Qualificações</li>
        </ul>
    </div>

    <div class="tabs"></div>
    <div class="container mt-5" id="formulario">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-6" id="diploma">
                    <i class="fa fa-graduation-cap"></i><br>
                    <span>Administrativo</span>
                </div>
            </div>
        </div>
    </div>
               
    <?php
            include './proximoPasso.inc';
            proximoPasso('qualificacoes');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
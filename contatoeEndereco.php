<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <h1>Processo Seletivo Simplificado n° XX/YYYY</h1>
    <h3>Preencha o formulário</h3>

    <ul class="nav nav-tabs">
        <li class="nav-item passed">Dados Pessoais</li>
        <li class="nav-item active">Contato e Endereço</li>
        <li class="nav-item ">Seleção de Cargo</li>
        <li class="nav-item ">Qualificações</li>
    </ul>   
    <form action="./selecaoDeCargo.php" method="post">

        <input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>">
        <input type="hidden" name="cpf" value="<?php echo $_POST['cpf']; ?>">
        <input type="hidden" name="rg" value="<?php echo $_POST['rg']; ?>">
        <input type="hidden" name="estado-civil" value="<?php echo $_POST['estado-civil']; ?>">
        <input type="hidden" name="filiacao-materna" value="<?php echo $_POST['filiacao-materna']; ?>">
        <input type="hidden" name="filiacao-paterna" value="<?php echo $_POST['filiacao-paterna']; ?>">

    <div class="container mt-5" id="formulario">
        <div class="row">
            <div class="col-md-6" id="colunaE">
                <div class="mb-3">
                
                    <label for="email" class="form-label"><strong>Email <span class="text-danger">*</span></strong></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label"><strong>Telefone <span class="text-danger">*</span></strong></label>
                    <input type="number" class="form-control" id="telefone" name="telefone" required>  <!-- TEXTO OU NUMERO --> 
                </div>
                <div class="mb-3">
                    <label for="rua" class="form-label"><strong>Rua</strong></label>
                    <input type="text" class="form-control" id="rua" name="rua">
                </div>
                <div class="mb-3">
                    <label for="numero" class="form-label"><strong>Número</strong></label>
                    <input type="text" class="form-control" id="numero">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="estado" class="form-label"><strong>Estado</strong></label>
                    <select name="estado" id="estado" class="form-control">
                        <option value=""></option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
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
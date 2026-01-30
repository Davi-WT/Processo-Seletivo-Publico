

<?php
    function proximoPasso($pagina) 
    {
        $proxpagina = '';
        if ($pagina == 'index') $proxPagina = './contatoeEndereco.php';
        else if ($pagina == 'contatoeEndereco') $proxPagina = './selecaoDeCargo.php';
        else if ($pagina == 'selecaoDeCargo') $proxPagina = './qualificacoes.php';
        else $proxPagina = './index.php';
    
        echo 
        '    
            <div style="position: fixed; right: 4vw; bottom: 4vh;">
                 <a href="'.$proxPagina.'"><button class="btn btn-primary">Próximo passo</button></a>
             </div>
        ';
        
    }
?>

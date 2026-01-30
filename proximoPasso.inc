<?php
    function proximoPasso($pagina) 
    {
        $proxpagina = '';
        if ($pagina == 'index') {
            $proxPagina = './contatoeEndereco.html';
        } else if ($pagina == 'contatoeEndereco') {
            $proxPagina = './selecaoDeCargo.html';
        } else if ($pagina == 'selecaoDeCargo') {
            $proxPagina = './qualificacoes.html';
        } else {
            $proxPagina = './index.html';
        }
    
        echo 
        '    
            <div style="position: fixed; right: 4vw; bottom: 4vh;">
                 <a href="'.$proxPagina.'"><button class="btn btn-primary">Próximo passo</button></a>
             </div>
        ';
        
    }
?>

<div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a id="menu-logo" href=""></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#a-sainf">A SAINF</a></li>
                <li><a href="#cronograma">Cronograma</a></li>
                <li><a href="#speakers">Speakers</a></li>
                <?php if($prazo_evento > $agora): ?>
                    <li><a href="#inscricoes">Inscrições</a></li>
                <?php endif; 
                if($prazo_maratona > $agora):?>
                    <li><a href="#maratona">Maratona</a></li>
                <?php endif; ?>
                <li><a href="#apoio">Apoio</a></li>
                <li><a href="#gallery">Galeria</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </div>
    </div>
</div>
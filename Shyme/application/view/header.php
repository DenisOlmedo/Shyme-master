<style>
    /* Barra de busca */
nav {
    z-index: 1;
}
.sb_dropdown {
    background-color: rgb(238, 238, 238);
    display: none;
    position: absolute;
    height: 0;    
    min-width: 245px;
    top: 50px;
    left: 100px;
    z-index: 2;
}
.sb_dropdown:after {
    
}
.sb_dropdown-open {
    display: block;
	height: 100px !important;
	transition: all .2s;

}

#sc_box{
    width: 500px;
}
.sc-bar{

}

.navbar-form{
    position: absolute;
    width: 100%;
    left: 0;
    text-align: center;
    
}

</style>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#btn-collapse-nav" aria-expanded="false">
                <span class="sr-only">Recolher barra de navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Shyme</a>
        </div>  
        
        <div class="collapse navbar-collapse" id="btn-collapse-nav">
            
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group" align="center">
                    <div class="sc-bar" align="center">
                        <input id="sc_box" class="form-control sb_input" type="text" name="q" placeholder"Procurar" />
                        <!-- <alteracao> -->
                        <button type="submit" class="btn btn-default sb_search">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                    <!-- </alteracao> -->
                    
                    <div class="sb_dropdown">
                		<div class="radio">
                		    <label for="Usuario"><input type="radio" name="qType" id="sc_usr"/>Usuario</label>
            		    </div>
            		    <div class="radio">
                		    <label for="Grupo"><input type="radio" name="qType" id="sc_grp"/>Grupo</label>
                		</div>
                    </div>
                </div>
                
                
            </form>
        
            <ul class="nav navbar-nav navbar-right"><!-- Dropdown Usuario.-->
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*Nome usuario*<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a id="change-theme" href="#">Mudar tema</a></li>
                        <li><a href="#">Pontuação</a></li>
                        <li role="separator" class="divider"></li>
                        
                        <?php
                        /*
                            Poderá fazer o sair com o $_GET['sair'];
                            usando um 
                            
                            
                            if(isset($_GET['sair']){
                                $logout = $_GET['sair'];
                                if($logout==1){
                                    metodo para destruir a session, não sei como é em codeIgniter
                                }
                            }
                        */
                        ?>
                        <li><a href="?sair=1">Sair</a></li> <!-- Fechar a session quando clicar em sair, ver acima -->
                    </ul>
                </li>
            </ul><!-- fim dropdown -->

        </div>
        
    </div>
</nav>
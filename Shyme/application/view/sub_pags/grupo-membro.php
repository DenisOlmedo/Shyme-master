<div class="row titulo">
    <div class="col-md-offset-1 col-md-10">
        <h3>Membros</h3>
        <!-- <alteracao> -->
        <button id="bt_add_membro" class="btn btn-shyme-default" data-toggle="modal" data-target="#myModal">
            Adicionar Membro
        </button>
        
        <!-- Modal -->
        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Adicionar ao grupo</h4>
                    </div>
                    <div class="modal-body">
                          <?php include("sub_pags/add_membro.php"); ?>
                    </div>
                      
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                </div> <!-- Modal content -->
            </div><!-- Modal dialog -->
        </div> <!-- modal -->
        
        <!-- </alteracao> -->
    </div>
</div>

<div class="row">
    <div class="col-md-offset-1 col-md-8 conteudo">
        
        <div class="post-objeto"> <!-- Inicio do loop -->
            <div class="media-left">
                <img class="media-object" src="" alt="Icone usuario">
            </div>
            <div class="media-body">
                <a href="#"><h4 class="media-heading name_usr">*Adilson*</h4></a><!-- banco -->
            </div>
            <div class="media-right rank">
                <h4 class="media-heading">*Rank 7*</h4> <!-- Banco -->
            </div>
        </div> <!-- Fim do loop -->
            
        <div class="post-objeto">
            <div class="media-left">
                <img class="media-object" src="" alt="Icone usuario">
            </div>
            <div class="media-body">
                <a href="#"><h4 class="media-heading">*Denis*</h4></a>
            </div>
            <div class="media-right rank">
                <h4 class="media-heading">*Rank 7*</h4>
            </div>
        </div>
            
            
        <div class="post-objeto">
            <div class="media-left">
                <img class="media-object" src="" alt="Icone usuario">
            </div>
            
            <div class="media-body">
                <a href="#"><h4 class="media-heading">*Gustavo*</h4></a>
            </div>
            <div class="media-right rank">
                <h4 class="media-heading">Rank 8</h4>
            </div>
        </div>
        
        <div class="post-objeto">
            <div class="media-left">
                <img class="media-object" src="" alt="Icone usuario">
            </div>
            
            <div class="media-body">
                <a href="#"><h4 class="media-heading">*Felipe*</h4></a>
            </div>
            
            <div class="media-right rank">
                <h4 class="media-heading">Rank 8</h4>
            </div>
            
        </div>
    </div>
</div>
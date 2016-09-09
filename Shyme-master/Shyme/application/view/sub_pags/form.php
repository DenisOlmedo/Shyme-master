<html lang="pt-BR" >
    <head>
        <meta charset="utf-8" />
        <title>Teste Upload</title>
        <!-- <link href="css/upload.css" rel="stylesheet" type="text/css" /> -->
        <script src="js/script.js"></script>
    </head>
    <body>
        <header>
        </header>
        <div class="row">
            <div class="col-md-offset-1"><h2>Selecione o arquivo para upload</h2></div>
            
            <div class="upload_form_cont">
                <form id="upload_form" enctype="multipart/form-data" method="post" action="upload.php">
                        <div class="input-group"><input type="file" class="form-control"name="image_file" id="image_file" onchange="fileSelected();" /></div>
                    <div class="input-group"><img id="preview" /></div>
                    <div class="input-group"><input type="button" value="Upload" onclick="startUploading()" /></div>
                    <div id="fileinfo">
                    </div>
                    <div id="error">Apenas imagens válidas!</div>
                    <div id="error2">Ocorreu um erro durante o upload</div>
                    <div id="abort">Upload cancelado por queda de conexão</div>
                    <div id="warnsize">Arquivo de tamanho muito grande. Selecione um menor</div>

                    <div id="progress_info">
                        <div id="progress"></div>
                        <div id="progress_percent">&nbsp;</div>
                        <div class="clear_both"></div>
                        <div>
                            
                        </div>
                        <div id="upload_response"></div>

                    </div>
                
                </form>


        </div>
    </body>
</html>

<div class="col-xs-12 col-sm-10 col-lg-10 alert-success contenido">
    <center><h1>Publica tu anuncio Gratis</h1></center>
</div>
<?php
//imprime el arreglo de los registros de la tabla
//         print_r($selEstado);
//         print_r($selMunicipio);
?>
<script type="text/javascript">
    $(document).ready(function () {
        $("#estadoa").change(function () {
            $("#estadoa option:selected").each(function () {
                idestadoa = $('#estadoa').val();
                $.post("<?php echo base_url(); ?>Control_Ciudades/llena_municipiosa", {
                    idestadoan: idestadoa
                }, function (data) {
                    $("#municipiosa").html(data);
                    $("#municipiosa").removeAttr("disabled");
                });
            });
        })
    });
</script>

<script type="text/javascript">

    $(document).ready(function () {
        $("#categoria").change(function () {
            $("#categoria option:selected").each(function () {
                categoria = $('#categoria').val();
                $.post("<?php echo base_url(); ?>Control_Anuncio/llenaSubcategorias", {
                    idcategoria: categoria
                }, function (data) {
                    $("#subcategoria").html(data);
                    $("#subcategoria").removeAttr("disabled");
                });
            });
        });
    });
</script>

<div class="col-xs-12 col-sm-10 col-lg-10 contenido">
    <br>
    <!---  MUESTRA TODOS LOS MENSAJES DE ERROR DE VALIDACIONES --->
    <!--  <? echo validation_errors(); ?> -->
    <!---  MUESTRA MENSAJE DE EERROR SI OCURRE AL SUBIR EL ARCHIVO --->
    <?php
    if (isset($error)) {
        echo $error;
    }
    ?>

    <form method="POST" action="<?php echo base_url('Control_Anuncio/insert'); ?>" class="col-lg-9 col-lg-offset-1" enctype="multipart/form-data" >
        <div class="form-group">
            <label for="categoria">¿Qué deseas anunciar?</label>
            <select class="form-control" name="categoria" id="categoria">
                <option value="" selected="selected">Seleccióna una categoria...</option>
                <?php foreach ($selCategoria as $valuecat): ?>
                    <option value="<?php echo $valuecat->Id_cat; ?>"> 
                        <?php echo $valuecat->Nom_cat; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <?php echo form_error('categoria'); ?>
        </div>  
        <!--?php if (isset($nameuser) === TRUE): ?>
        
        <div class="alert-danger">?php echo $nameuser;?></div>
            <!-- foreach ($nameuser as $valueuser): ?>
                ?php echo $valueuser->Nickname; ?>
                ?php echo $valueuser->Id_user; ?>
        ?php echo $valueuser->Email_user; ?>

            ?php endforeach; ?>

        ?php endif; ?-->
        <div class="form-group">
            <label for="subcategoria">Puedes elegir una categoría específica:</label>
            <select class="form-control" name="subcategoria" id="subcategoria" disabled>
                <option value="" selected="selected">Seleccióna una subcategoria...</option>
            </select>
        </div>
        <!-- Control supported 
            text, password, datetime, datetime-local, date, month, time, week, number, email, url, search
            ,tel, color
        -->                
        <div class="form-group">
            <label for="option">Lugar donde quieres anunciar:</label>
            <select class="form-control" name="estado" id="estadoa">
                <option value="" selected="selected">Seleccióna un estado...</option>
                <?php foreach ($selEstado as $value): ?>
                    <option value="<?php
                    $val = $value->Id_est;
                    echo $value->Id_est;
                    ?>" <?php echo set_select('estado', $val); ?> > 
                                <?php echo $value->Nom_est; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <?php echo form_error('estado'); ?>
        </div>
        <div class="form-group">                    
            <select class="form-control" name="municipio" id="municipiosa" disabled>
                <option value="" selected="selected">Seleccióna un municipio...</option>

            </select>
        </div>
        <div class="form-group">
            <label for="titulo">Coloca un titulo a tu anuncio:</label>
            <input class="form-control" id="titulo" type="text" placeholder="Titulo del anuncio" name="titulo" value="<?php echo set_value('titulo'); ?>">
            <?php echo form_error('titulo'); ?>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" type="text" placeholder="Descripción del anuncio" name="descripcion"><?php echo set_value('descripcion'); ?></textarea>
            <?php echo form_error('descripcion'); ?>
        </div>
        <div class="form-group">            
            <label for="archivo"> Imágenes</label>
            <input type="file" id="archivo" name="archivo[]" class="" multiple>
            <p class="help-block">Maximo 50MB</p>
        </div>

        <div class="form-group">
            <label for="archivo"> Precio</label> 
            <div class="input-group">
                <span class="input-group-addon">
                    $
                </span> 
                <input type="text" class="form-control" name="precio" placeholder="Coloca un precio" value="<?php echo set_value('precio'); ?>">                               
            </div>
            <?php echo form_error('precio'); ?>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input class="form-control" id="nombre" type="text" placeholder="Nombre" name="nombre" value="<?php echo set_value('nombre'); ?>">
            <?php echo form_error('nombre'); ?>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input class="form-control" id="telefono" placeholder="Teléfono de contacto" name="telefono" value="<?php echo set_value('telefono'); ?>">
            <?php echo form_error('telefono'); ?>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" id="email" placeholder="Email de contacto" name="email" value="<?php echo set_value('email'); ?>">
            <?php echo form_error('email'); ?>
        </div>
        <button type="submit" class="btn btn-success">ANUNCIAR</button>
    </form>
    <br>
    <?php
    if (isset($correcto)) {
        echo $correcto;
    }
    ?>


    <!--    <div class="container">
        <h1>jQuery File Upload Demo</h1>
        <h2 class="lead">Basic Plus UI version</h2>
        
        <br>
        
        <br>
         The file upload form used as target for the file upload widget 
        <form id="fileupload"  method="POST" enctype="multipart/form-data">
             Redirect browsers with JavaScript disabled to the origin page 
            <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
             The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload 
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                     The fileinput-button span is used to style the file input field as button 
                    <span class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Agrega files...</span>
                        <input type="file" name="files[]" multiple>
                    </span>
                    <button type="submit" class="btn btn-primary start">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start upload</span>
                    </button>
                    <button type="reset" class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Cancel upload</span>
                    </button>
                    <button type="button" class="btn btn-danger delete">
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                    </button>
                    <input type="checkbox" class="toggle">
                     The global file processing state 
                    <span class="fileupload-process"></span>
                </div>
                 The global progress state 
                <div class="col-lg-5 fileupload-progress fade">
                     The global progress bar 
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                    </div>
                     The extended global progress state 
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
             The table listing the files available for upload/download 
            <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
        </form>
        <br>
    </div>
     The blueimp Gallery widget 
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
     The template to display files available for upload 
    <script id="template-upload" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
            <td>
                <span class="preview"></span>
            </td>
            <td>
                <p class="name">{%=file.name%}</p>
                <strong class="error text-danger"></strong>
            </td>
            <td>
                <p class="size">Processing...</p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                    <button class="btn btn-primary start" disabled>
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start</span>
                    </button>
                {% } %}
                {% if (!i) { %}
                    <button class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Cancel</span>
                    </button>
                {% } %}
            </td>
        </tr>
    {% } %}
    </script>
     The template to display files available for download 
    <script id="template-download" type="text/x-tmpl">
    {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-download fade">
            <td>
                <span class="preview">
                    {% if (file.thumbnailUrl) { %}
                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                    {% } %}
                </span>
            </td>
            <td>
                <p class="name">
                    {% if (file.url) { %}
                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                    {% } else { %}
                        <span>{%=file.name%}</span>
                    {% } %}
                </p>
                {% if (file.error) { %}
                    <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                {% } %}
            </td>
            <td>
                <span class="size">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td>
                {% if (file.deleteUrl) { %}
                    <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                        <i class="glyphicon glyphicon-trash"></i>
                        <span>Delete</span>
                    </button>
                    <input type="checkbox" name="delete" value="1" class="toggle">
                {% } else { %}
                    <button class="btn btn-warning cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Cancel</span>
                    </button>
                {% } %}
            </td>
        </tr>
    {% } %}
    </script>-->
    <!-- ARCHIVO JS PARA RECIBIR Y CARGAR LAS IMAGENES A LA B.D -->
    <script src="<?php echo base_url(); ?>js/imagenes.js"></script>

    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="<?php echo base_url(); ?>js/vendor/jquery.ui.widget.js"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
    <!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
    <!-- blueimp Gallery script -->
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <!--<script src="?php echo base_url(); ?>js/jquery.iframe-transport.js"></script>-->
<!--     The basic File Upload plugin 
    <script src="?php echo base_url(); ?>js/jquery.fileupload.js"></script>
     The File Upload processing plugin 
    <script src="?php echo base_url(); ?>js/jquery.fileupload-process.js"></script>
     The File Upload image preview & resize plugin 
    <script src="?php echo base_url(); ?>js/jquery.fileupload-image.js"></script>
     The File Upload audio preview plugin 
    <script src="?php echo base_url(); ?>js/jquery.fileupload-audio.js"></script>
     The File Upload video preview plugin 
    <script src="?php echo base_url(); ?>js/jquery.fileupload-video.js"></script>
     The File Upload validation plugin 
    <script src="?php echo base_url(); ?>js/jquery.fileupload-validate.js"></script>
     The File Upload user interface plugin 
    <script src="?php echo base_url(); ?>js/jquery.fileupload-ui.js"></script>-->
    <!-- The main application script -->
    <!--<script src="?php echo base_url(); ?>js/main.js"></script>-->

</div>
</div><br>
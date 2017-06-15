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
        });
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
<div class="content-page">
    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <div class="content">
        <!-- Page Heading Start -->
        <div class="page-heading">
            <h1><i class='fa fa-check'></i> Anunciate</h1>
        </div>

        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Crea tu anuncio rápido!</strong></h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <?php
                if (isset($proc)) {
                    foreach ($proc as $object) {
                        $bandera = $object->resultado;
                        if ($bandera == 1) {
                            echo "<div class='alert alert-success'><h1><strong>Tu anuncio</strong> se publico correctamente</h1></div>";
                        } else {
                            echo 'mensaje numero 2';
                        }
                    }
                }
                ?>
            <div class="widget-content padding">
                <form method="POST" action="<?php echo base_url('Control_Anuncio/insert2'); ?>" class="col-lg-9 col-lg-offset-1" enctype="multipart/form-data" >
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
                        <input type="file" id="archivo" name="archivo[]" multiple>
                        <p class="help-block">Maximo 50MB</p>
                    </div>
                    <div class="form-group">
                        <label for="archivo"> Precio</label> 
                        <div class="input-group">
                            <span class="input-group-addon">
                                $
                            </span> 
                            <input type="number" step="any" class="form-control" name="precio" placeholder="Coloca un precio" value="<?php echo set_value('precio'); ?>">
                            <span class="input-group-addon">
                                .00
                            </span>
                        </div>
                        <?php echo form_error('precio'); ?>
                    </div>                    
                    <div class="form-group">
                        <label for="telefono">Teléfono de contacto adicional:</label>
                        <input class="form-control" id="telefono" placeholder="Teléfono de contacto" name="telefono" value="<?php echo set_value('telefono'); ?>">
                        <?php echo form_error('telefono'); ?>
                    </div>                    
                    <button type="submit" class="btn btn-success" style="margin-bottom: 5%;">ANUNCIAR</button>
                </form><br>
            </div><br>
            <?php
            if (isset($respuesta)) {
                echo $respuesta;
            }
            ?>
        </div><br><br>
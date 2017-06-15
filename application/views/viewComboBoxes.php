<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>    
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

    </head>
    <body>
        <?= form_open(base_url().'index.php/controllerComboBoxes/hacerAlgo'); ?>
            <select id="idEstado" name="idEstado">
                <option value="0">Estados</option>
                <?php 
                    foreach ($estados as $i) {
                        echo '<option value="'. $i->idEstado .'">'. $i->nombreEstado .'</option>';
                    }
                ?>
            </select>
            <br/>
            <br/>
            <select id="idCiudad" name="idCiudad">
                <option value="0">Ciudades</option>
            </select>
            <br/>
            <br/>
            <button>Aceptar</button>
        </form>
        
        <script type="text/javascript">   
            $(document).ready(function() {                       
                $("#idEstado").change(function() {
                    $("#idEstado option:selected").each(function() {
                        idEstado = $('#idEstado').val();
                        $.post("<?php echo base_url(); ?>index.php/controllerComboBoxes/fillCiudades", {
                            idEstado : idEstado
                        }, function(data) {
                            $("#idCiudad").html(data);
                        });
                    });
                });
            });
        </script>


        <script type="text/javascript">
    $(document).ready(function () {
        $("#estado").change(function () {
            $("#estado option:selected").each(function () {
                idestado = $('#estado').val();
                $.post("<?php echo base_url(); ?>index.php/ciudades/llena_municipios", {
                    idestado: idestado
                }, function (data) {
                    $("#municipios").html(data);
                });
            });
        });
    });
</script>

 <form>
                            <div class="form-group">
                                <br>
                                <label for="estado"> Filtrar por ubicación..</label>
                                <select class="form-control selectpicker" id="estado">
                                    <option value="#">Selecciona un estado...</option>
                                    <?php foreach ($selEstado as $value): ?>
                                        <option value="<?php echo $value->Id_est; ?>"><?php echo $value->Nom_est; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control selectpicker show-menu-arrow" id="municipios" name="municipios">
                                    <option value="0">Selecciona un municipio...</option>
                                </select>
                            </div>                                
                        </form>
    </body>
</html>

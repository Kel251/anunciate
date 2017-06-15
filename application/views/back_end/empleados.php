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
<script>
    $(document).ready(inicio);
    

function inicio(){
	$("#msg-error").hide();
	mostrarDatos("");
	$("#buscar").keyup(function(){
		buscar = $("#buscar").val();
		mostrarDatos(buscar);
	});
	$("#btnbuscar").click(function(){
		mostrarDatos("");
		$("#buscar").val("");
	});
	$("#btnactualizar").click(actualizar);
	$("#form-create-empleado").submit(function (event){

		event.preventDefault();
		var formData = new FormData($("#form-create-empleado")[0]);
		$.ajax({
			url:$("form").attr("action"),
			type:$("form").attr("method"),
			data:formData,
			cache:false,
			contentType:false,
			processData:false,
			
			success:function(respuesta){
				if (respuesta==="exito") {
					alert("Los datos han sido guardados correctamente");
					$("#msg-error").hide();
					$("#form-create-empleado")[0].reset();
				}
				else if(respuesta==="error"){
					alert("Los datos no se pudo guardar");
				}
				else{
					$("#msg-error").show();
					$(".list-errors").html(respuesta);
				}
			}
		});
	});
	$("body").on("click", "#listaEmpleados a", function (event) {
            event.preventDefault();
            idsele = $(this).attr("href");
            nombressele = $(this).parent().parent().children("td:eq(0)").text();
            apellidossele = $(this).parent().parent().children("td:eq(1)").text();
//      dnisele = $(this).parent().parent().children("td:eq(2)").text();
            telefonosele = $(this).parent().parent().children("td:eq(2)").text();
            //emailsele = $(this).parent().parent().children("td:eq(3)").text();
            precio = $(this).parent().parent().children("td:eq(5)").text();

            $("#idsele").val(idsele);
            $("#nombressele").val(nombressele);
            $("#apellidossele").val(apellidossele);
//      $("#dnisele").val(dnisele);
            $("#telefonosele").val(telefonosele);
            $("#precio").val(precio);
            //$("#emailsele").val(emailsele);
            //$("#estadoa").val(idselect);
            //$("#municipioa").val(idmselect);
//                
//                $.post("<?php echo base_url(); ?>Control_Ciudades/llena_estados", {
//                    idestado: idselect
//                }, function (data) {
//                    $("#estados").html(data);
//                    $("#estados").removeAttr("disabled");
//                });
//                
//                $.post("<?php echo base_url(); ?>Control_Ciudades/llena_municipiosa", {
//                    idestadoan: idmselect
//                }, function (data) {
//                    $("#municipiosa").html(data);
//                    $("#municipiosa").removeAttr("disabled");
//                });


        });
	$("body").on("click","#listaEmpleados button",function(event){
		idsele = $(this).attr("value");
		eliminar(idsele);
	});
}

function mostrarDatos(valor){
	$.ajax({url: "<?php echo base_url() . 'Control_Empleados/mostrarAnuncios'; ?>",
		type:"POST",
		data:{buscar:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html = "<table class='table table-responsive table-bordered table-hover'><thead>";
                html += "<tr class='info'><th>Titulo</th><th>Descripción</th><th>Teléfono</th><th>Lugar</th><th>Categoría</th><th>Costo</th><th>Imagen</th><th>Accion</th></tr>";
                html += "</thead><tbody>";
                for (var i = 0; i < registros.length; i++) {
                    html += "<tr><td>" + registros[i]["Anuncio"] + "</td><td>" + registros[i]["Descripcion"] + "</td><td>" + registros[i]["telefono"] + "</td><td>" + registros[i]["Nom_est"] + "<br>" + registros[i]["Nom_mun"] + "</td><td>" + registros[i]["Nom_cat"] + "<br>" + registros[i]["Nom_subcat"] + "</td><td>" + registros[i]["precio"] + "</td><td><img src='http://anunciat.esy.es/anunciatec2/img/cargas/" + registros[i]['archivo'] + "' style='width:100px; height:100px;'/></td><td><a href='" + registros[i]["Id_anun"] + "'  data-modal='md-slide-from-bottom' class='btn btn-default btn-sm md-trigger glyphicon glyphicon-pencil' data-toggle='modal' data-target='#myModal'></a> <br><button class='btn btn-danger glyphicon glyphicon-minus-sign' type='button' value='" + registros[i]["Id_anun"] + "'></button></td></tr>";
                }
                ;
			html +="</tbody></table>";
			$("#listaEmpleados").html(html);
		}
	});
}


function actualizar(){
	var formData = new FormData($("#form-actualizar")[0]);
	
            $.ajax({url: "<?php echo base_url() . 'Control_Empleados/actualizar2'; ?>",
                type: 'POST',
                
		data:formData,
		cache:false,
		processData:false,
		contentType:false,
		success:function(respuesta){
			alert(respuesta);
			//mostrarDatos("");
		}
	});
}

function eliminar(idsele){
	$.ajax({
                url: "<?php echo base_url() . 'Control_Empleados/eliminar2'; ?>",
		type:"POST",
		data:{id:idsele},
		success:function(respuesta){
			alert(respuesta);
			mostrarDatos("");
		}
	});
}


</script>
<div class="content-page">
    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <div class="content">
        <!-- Page Heading Start -->
        <div class="page-heading">
            <h1><i class='fa fa-check'></i> Mis anuncios</h1>
        </div>
        
		<div class="md-modal md-slide-from-bottom" id="md-slide-from-bottom">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<p>
					<button class="btn btn-danger md-close">Close me!</button>
					<button class="btn btn-success md-close">Some button</button>
					</p>
				</div>
			</div><!-- End div .md-content -->
		</div><!-- End div .md-modal .md-slide-from-bottom -->
        <!-- Page Heading End-->	
    </div>

        <div class="widget">
    <div class="widget-header transparent">
        <h2><strong>Mis anuncios</strong></h2>
        <div class="additional-btn">
            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
        </div>
    </div>
    <div class="widget-content padding">
        <div class="container">

            <section class="contenido">
                <div class="row">


                            <div class="row">
                                <br>
                                <div class="col-lg-7"></div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="buscar" placeholder="Buscar">
                                </div>
                                <div class="col-lg-2">
                                    <input type="button" class="btn btn-primary btn-block" id="btnbuscar" value="Mostrar Todo" data-toggle='modal' data-target='#basicModal'>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div id="listaEmpleados" class="col-lg-8">

                                </div>
                                <div class="col-lg-3" style="float: right;">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Editar Anuncio</div>
                                        <div class="panel-body">
                                            <form id="form-actualizar" class="form-horizontal" action="<?php echo base_url(); ?>Control_Empleados/actualizar" method="post" role="form" style="padding:0 10px;">
                                                <div>
                                                    <label>Titulo:</label>
                                                    <input type="hidden" id="idsele" name="idsele" value="">
                                                    <input type="text" name="nombressele" id="nombressele" class="form-control">
                                                </div>
                                                <div>
                                                    <label>Descripción:</label>
                                                    <input type="text" name="apellidossele" id="apellidossele" class="form-control">
                                                </div>
                                                
                                                <div>
                                                    <label>Telefono:</label>
                                                    <input type="text" name="telefonosele" id="telefonosele" class="form-control">
                                                </div>
                                                <div>
                                                    <label>Costo:</label>
                                                    <div class="input-group">
                                                        
                                                        <input type="number" step="any" class="form-control" name="precio" id="precio">
                                                        <span class="input-group-addon">
                                                            .00
                                                        </span>
                                                    </div>
                                                </div>
                                                <!--div class="form-edit">
                                                    <label>Email:</label>
                                                    <input type="email" name="emailsele" id="emailsele" class="form-control">
                                                </div-->
                                                <div class="form-edit">                    
                                                    <select class="form-control" name="estado" id="estadoa" >
                                                        <option value="0" id="estados34">Cambia de estado...</option>
                                                        <?php foreach ($selEstado as $value): ?>
                                                            <option value="<?php $val = $value->Id_est;
                                                        echo $value->Id_est;
                                                            ?>" <?php echo set_select('estado', $val); ?> > 
                                                            <?php echo $value->Nom_est; ?>
                                                            </option>
<?php endforeach; ?>

                                                    </select>
                                                </div>

                                                <div class="form-edit">                    
                        <select class="form-control" name="municipio" id="municipiosa" disabled>
                            <option value="" selected="selected">Seleccióna un municipio...</option>

                        </select>
                    </div>
                                                <div class="form-edit">                                                    
                                                    <select class="form-control" name="categoria" id="categoria">
                                                        <option value="0" selected="selected">Cambiar de categoria...</option>
                                                            <?php foreach ($selCategoria as $valuecat): ?>
                                                            <option value="<?php echo $valuecat->Id_cat; ?>"> 
                                                            <?php echo $valuecat->Nom_cat; ?>
                                                            </option>
                                                    <?php endforeach; ?>
                                                    </select>
<?php echo form_error('categoria'); ?>
                                                </div>    
                                                <div class="form-edit">                                                    
                                                    <select class="form-control" name="subcategoria" id="subcategoria" disabled>
                                                        <option value="0" selected="selected">Seleccióna una subcategoria...</option>
                                                    </select>
                                                </div>
                                                <div class="form-edit">
                                                    <label for=""> Seleccionar Imagen</label>
                                                    <input type="file" name="foto_nueva">
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" id="btnactualizar" class="btn btn-success btn-block">Guardar</button>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </section>


        </div>
    </div>
</div>
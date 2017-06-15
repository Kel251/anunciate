$(document).on("ready",inicio);

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
	$("body").on("click","#listaEmpleados a",function(event){
		event.preventDefault();
		idsele = $(this).attr("href");
		nombressele = $(this).parent().parent().children("td:eq(0)").text();
		apellidossele = $(this).parent().parent().children("td:eq(1)").text();
//		dnisele = $(this).parent().parent().children("td:eq(2)").text();
		telefonosele = $(this).parent().parent().children("td:eq(2)").text();
		emailsele = $(this).parent().parent().children("td:eq(3)").text();

		$("#idsele").val(idsele);
		$("#nombressele").val(nombressele);
		$("#apellidossele").val(apellidossele);
//		$("#dnisele").val(dnisele);
		$("#telefonosele").val(telefonosele);
		$("#emailsele").val(emailsele);
	});
	$("body").on("click","#listaEmpleados button",function(event){
		idsele = $(this).attr("value");
		eliminar(idsele);
	});
}

function mostrarDatos(valor){
	$.ajax({
		url:"http://anuncio.esy.es/anunciate/empleados/mostrarAnuncio",
		type:"POST",
		data:{buscar:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class='table table-responsive table-bordered table-hover'><thead>";
 			html +="<tr class='info'><th>Titulo</th><th>Descripción</th><th>Teléfono</th><th>Email</th><th>Imagen</th><th>Accion</th></tr>";
			html +="</thead><tbody>";
			for (var i = 0; i < registros.length; i++) {
				html +="<tr><td>"+registros[i]["Anuncio"]+"</td><td>"+registros[i]["Descripcion"]+"</td><td>"+registros[i]["telefono"]+"</td><td>"+registros[i]["email"]+"</td><td><img src='http://anuncio.esy.es/anunciate/img/cargas/"+registros[i]['archivo']+"' style='width:100px; height:100px;'/></td><td><a href='"+registros[i]["Id_anun"]+"' class='btn btn-warning glyphicon glyphicon-pencil' data-toggle='modal' data-target='#myModal'></a> <button class='btn btn-danger glyphicon glyphicon-pencil' type='button' value='"+registros[i]["Id_anun"]+"'>X</button></td></tr>";
			};
			html +="</tbody></table>";
			$("#listaEmpleados").html(html);
		}
	});
}

function actualizar(){
	var formData = new FormData($("#form-actualizar")[0]);
	$.ajax({
		url:"http://anuncio.esy.es/anunciate/empleados/actualizar2",
		type:"POST",
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
		url:"http://anuncio.esy.es/anunciate/empleados/eliminar2",
		type:"POST",
		data:{id:idsele},
		success:function(respuesta){
			alert(respuesta);
			mostrarDatos("");
		}
	});
}


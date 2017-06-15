$(document).on("ready", main);

function main(){
	$("#msg-error").hide();
	mostrarDatos("");
	$("#form-create-usuario").submit(function(event){
		event.preventDefault();

		var formData = new FormData($("#form-create-usuario")[0]);
		$.ajax({
			url:$(this).attr('action'),
			type:$(this).attr('method'),
			data: formData,
            cache: false,
            contentType: false,
            processData: false,
			success:function(resp){
				alert(resp);

				/*if (resp==="Exito") {
					alert(resp);
					$("#msg-error").hide();
					$("#form-create-usuario")[0].reset();
				}else if(resp==="Error"){
					alert(resp);
				}
				else{
					$(".list-errors").html(resp);
					$("#msg-error").show();
				}*/
			}

		});

	});
}


function mostrarDatos(valor){
	$.ajax({
		url:"http://localhost:8080/empresa/usuarios/mostrar",
		type:"POST",
		data:{buscar:valor},
		success:function(respuesta){
			//alert(respuesta);
			var registros = eval(respuesta);
			
			html ="<table class='table table-responsive table-bordered'><thead>";
 			html +="<tr><th>#</th><th>Nombres</th><th>Apellidos</th><th>Email</th><th>Foto</th><th>Accion</th></tr>";
			html +="</thead><tbody>";
			for (var i = 0; i < registros.length; i++) {
				html +="<tr><td>"+registros[i]["id_usuario"]+"</td><td>"+registros[i]["nombres"]+"</td><td>"+registros[i]["apellidos"]+"</td><td>"+registros[i]["email"]+"</td><td><img src='http://localhost/empresa/assets/images/uploads/"+registros[i]["photo"]+"' style='width:100px; height:100px;'/></td><td><a href='"+registros[i]["id_empleado"]+"' class='btn btn-warning' data-toggle='modal' data-target='#myModal'>E</a> <button class='btn btn-danger' type='button' value='"+registros[i]["id_empleado"]+"'>X</button></td></tr>";
			};
			html +="</tbody></table>";
			$("#listaUsuarios").html(html);
		}
	});
}
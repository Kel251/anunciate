$(document).on("ready",main);

function main(){
	$("#login").submit(function(event){
		event.preventDefault();
		$.ajax({
			url:"http://localhost:8080/anunciatec2/Control_Usuario/ingresar",
			type:$(this).attr("method"),
			data:$(this).serialize(),
			success:function(resp){
				if(resp === "error"){
//					alert("Los datos no existen");
                                        
                                           $("#pass").fadeIn();
                                        
				}
				else{
					window.location.href = "http://localhost:8080/anunciatec2/Control_Dashuser";
				}
			}
		});
	});

	$("#cerrar").on("click",function(event){
		event.preventDefault();
		$.ajax({
			url:"http://localhost:8080/anunciatec2/Control_Usuario/cerrar",
			type:"POST", 
			data:{},
			success:function(){
				window.location.href = "http://localhost:8080/anunciatec2/";
			}
		});
	});
}
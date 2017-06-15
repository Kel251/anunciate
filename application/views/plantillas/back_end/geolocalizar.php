<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">


    
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCdecEtqO33RJcSOjUHclXCjq1zQPMrOXw"></script>
	<title>geo localizacion</title>
        <script type="text/javascript">
            $(document).ready(function(e){
   $('#loadpage').load('http://www.google.com/', function(data){
            $(this).html(data);
        });
        
        $("#link").click(function(){
   $("#id_del_div").load("http://www.google.com");
});
 
});
            </script>
<script type="text/javascript">
function loadLocation () {
	//inicializamos la funcion y definimos  el tiempo maximo ,las funciones de error y exito.
	navigator.geolocation.getCurrentPosition(viewMap,ViewError,{timeout:1000});
}

//Funcion de exito
function viewMap (position) {	
	var lon = position.coords.longitude;	//guardamos la longitud
	var lat = position.coords.latitude;		//guardamos la latitud

	var link = "http://maps.google.com/?ll="+lat+","+lon+"&z=14";
	document.getElementById("long").innerHTML = "Longitud: "+lon;
	document.getElementById("latitud").innerHTML = "Latitud: "+lat;

	document.getElementById("link").href = link;
        
        
}


function ViewError (error) {
	alert(error.code);
}
	</script>

	<style type="text/css">
		 #info {
	font-size: 18px;
	background: #ffffff;
	width: 350px;
	border-radius: 6px;
	text-align: center;
	color: #666666;
	border: solid 1px #666666;
	margin: auto;
	padding: 3px;

}
#enviar {
	background: #fff;
	font-size: 22px;
	text-align: left;
	color: #000;
	margin: 10px 60px;
	padding:3px 10px 3px 10px;
	border-radius: 6px;
}
#respuesta {
	margin: auto 60px;
}
#googleMap {
	margin: 10px auto;
	width:90%;
	height:280px;
	border: 2px solid #666666; 
	border-radius: 6px;
}
#map {
	margin: 10px auto;
	width:90%;
	height:280px;
	border: 2px solid #666666; 
	border-radius: 6px;
}
.titular {
		background: #ffffff;
		font-size: 32px;
		color: #000;
		margin: 40px auto;
		text-align: center;
		width: 50%;
		padding:3px 10px 3px 10px;
		border-radius: 6px;
		border: solid 1px #999999;
	}
	</style>
</head>
<body onload="loadLocation();">
    
    <input type="text" id="long">

<label id="long1"></label> <br/>
<label id="latitud"></label> <br/>
<a id="link" target="_blank">Enlace al mapa</a>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<?php 
      $lat = "19.278492549435693";
      $lng = "-99.63845703125003";
      $pos = "19.278492549435693,-99.63845703125003";
      echo "<div class='titular'>anunciate! (registro de ubicación)</div>
      <div id='infopos'>".$pos."</div>
      <div id='googleMap'></div>
      <button type='submit' id='enviar' class='btn btn-alert'>Guardar</button>
      
      <a href='index' class='btn btn-warning'>Cancelar</a>
      <div id='respuesta'></div>";
      ?>
    
    <script>
    $(document).ready(function(){
      lat = "<?php echo $lat; ?>" ;
      lng = "<?php echo $lng; ?>" ;
      var map;
      function initialize() {
        var myLatlng = new google.maps.LatLng(lat,lng);
        var mapOptions = {
          zoom: 7,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          draggable:true,
          animation: google.maps.Animation.DROP,
          web:"LocalizaciÃ³n geogrÃ¡fica!",
          icon: "<?php echo base_url(); ?>img/marker.png"
        });
        google.maps.event.addListener(marker, 'dragend', function(event) {
          var myLatLng = event.latLng;
          lat = myLatLng.lat();
          lng = myLatLng.lng();
          document.getElementById('info').innerHTML = [
          lat,
          lng
          ].join(', ');
        });
        marker.setMap(map);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      $("#enviar").click(function() { 
        var url = "<?php echo base_url(); ?>Control_Dashuser/cargar";
        $("#respuesta").html('<img src="<?php echo base_url() . '/img/cargando.gif' ?>" />');
        $.ajax({
         type: "POST",
         url: url,
         data: 'lat=' + lat + '&lng=' + lng,
         success: function(data)
         {
             data1 = data[15];
             if (data1==="1") {
					alert("Tu ubicación se registro");
					
					
				}
				else if(data1==="0"){
					alert("Tu ubicación se actualizo");
				}
           //$("#respuesta").html(data1);
           
         }
       });
      }); 
    });
</script>

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
</body>
</html>


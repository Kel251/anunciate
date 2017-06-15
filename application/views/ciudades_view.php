<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <script type="text/javascript">
 $(document).ready(function() {
 $("#estado").change(function() {
 $("#estado option:selected").each(function() {
 idestado = $('#estado').val();
 $.post("http://localhost:8080/anunciate/ciudades/llena_municipios", {
 idestado : idestado
 }, function(data) {
 $("#municipios").html(data);
 });
 });
 })
 });
 </script>
</head>
<body>
 <select name="provincia" id="estado">
 <?php 
 foreach($selEstado as $fila)
 {
 ?>
 <option value="<?=$fila -> Id_est ?>"><?=$fila -> Nom_est ?></option>
 <?php
 }
 ?> 
 </select>
 
 <select name="localidad" id="municipios">
     <option value="">Selecciona tu provincía</option>
    </select>
</body>
</html>
<!Doctype html>

<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-2">
            <h1>Aplication Dinamic with CodeIgniter</h1>
<?php
foreach ($articulos as $item):
    //$url = 'articulo/';
    //$url .= url_title(convert_accented_characters($item->nombre_articulo),'-',TRUE);
    ?>
    <hr>
    <h2>Nombre del articulo: <?php echo anchor('articulo/' . $item->url_articulo, $item->nombre_articulo); ?> </h2><hr>
    <p>Contenido del articulo: <?php echo $item->contenido; ?> </p>
    <strong>Fecha de creación del articulo: <?php echo $item->fecha_articulo; ?> </strong>
    <?php
endforeach;
?>
        </div>
    </div>
</div>   
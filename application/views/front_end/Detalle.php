<!Doctype html>
<html>
    <head>
        <title>
            <?php echo $titulo; ?>
        </title>
    </head>
    <body>
        <section id="contenido">
            <h1>Aplication Dinamic with CodeIgniter</h1>
            <hr>
            <h3>Nombre del articulo: <?php echo $detalle->nombre_articulo; ?> </h3><hr>
            <p>Contenido del articulo: <?php echo $detalle->contenido; ?> </p>
            <strong>Fecha de creación del articulo: <?php echo $detalle->fecha_articulo; ?> </strong>
        </section>
    </body>
</html>
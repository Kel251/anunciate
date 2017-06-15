
<article>

    <h3>Archivo subido correctamente!</h3>

    <ul>
        <?php foreach ($upload_data as $item => $value): ?>
            <li><?php echo $item; ?>: <?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>

    <p><?php echo anchor('Control_Anuncio', 'Subir otro archivo!'); ?></p>


</article>
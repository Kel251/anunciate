<script>
    $(document).ready(inicio);


    function inicio() {
        $("#msg-error").hide();
        mostrarDatos("");
        $("#buscar").keyup(function () {
            buscar = $("#buscar").val();
            mostrarDatos(buscar);
        });
        $("#btnbuscar").click(function () {
            mostrarDatos("");
            $("#buscar").val("");
        });
        $("#btnactualizar").click(actualizar);
        $("#form-create-empleado").submit(function (event) {

            event.preventDefault();
            var formData = new FormData($("#form-create-empleado")[0]);
            $.ajax({
                url: $("form").attr("action"),
                type: $("form").attr("method"),
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (respuesta) {
                    if (respuesta === "exito") {
                        alert("Los datos han sido guardados correctamente");
                        $("#msg-error").hide();
                        $("#form-create-empleado")[0].reset();
                    } else if (respuesta === "error") {
                        alert("Los datos no se pudo guardar");
                    } else {
                        $("#msg-error").show();
                        $(".list-errors").html(respuesta);
                    }
                }
            });
        });
        $("body").on("click", "#listacontenido a", function (event) {
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
        $("body").on("click", "#listacontenido button", function (event) {
            idsele = $(this).attr("value");
            eliminar(idsele);
        });
    }

    function mostrarDatos(valor) {
        $.ajax({url: "<?php echo base_url() . 'Control_Empleados/mostrarAnuncios'; ?>",
            type: "POST",
            data: {buscar: valor},
            success: function (respuesta) {
                //alert(respuesta);
                var registros = eval(respuesta);

//                html = "<table class='table table-responsive table-bordered table-hover'><thead>";
//                html += "<tr class='info'><th>Titulo</th><th>Descripción</th><th>Teléfono</th><th>Email</th><th>Imagen</th><th>Accion</th></tr>";
//                html += "</thead><tbody>";
                html = "<ul>";
                for (var i = 0; i < registros.length; i++) {
                    html += "<li><div class='the-date'><span>01</span><small>Feb</small></div><h4>" + registros[i]["Anuncio"] + "</h4><p>" + registros[i]["Descripcion"] + "</p><div><img src='<?php echo base_url() . '/img/cargas/'; ?>" + registros[i]['archivo'] + "' style='width: 100%; height: 418px;  margin: 0 auto; display:block; margin-bottom: 2%;'/></div> <br><a href='" + registros[i]["Id_anun"] + "'  data-modal='md-slide-from-bottom' class='btn btn-default glyphicon glyphicon-pencil btn-sm md-trigger' data-toggle='modal' data-target='#myModal1'></a><button class='btn btn-danger glyphicon glyphicon-minus-sign' type='button' value='" + registros[i]["Id_anun"] + "'></button></li>";
                }
                ;
                html += "</ul>";
                $("#listacontenido1").html(html);
            }
        });
    }


    function actualizar() {
        var formData = new FormData($("#form-actualizar")[0]);

        $.ajax({url: "<?php echo base_url() . 'Control_Empleados/actualizar2'; ?>",
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function (respuesta) {
                alert(respuesta);
                //mostrarDatos("");
            }
        });
    }

    function eliminar(idsele) {
        $.ajax({
            url: "<?php echo base_url() . 'Control_Empleados/eliminar2'; ?>",
            type: "POST",
            data: {id: idsele},
            success: function (respuesta) {
                alert(respuesta);
                window.location.href = "<?php echo base_url() . 'Control_Dashuser'; ?>";
                mostrarDatos("");
            }
        });
    }


</script>

<script>
    $(function () {
        $("#updatefotoForm").on("submit", function (e) {
            e.preventDefault();

            portada = $("#fportada").val();

            var f = $(this);
            var formData = new FormData(document.getElementById("updatefotoForm"));
            formData.append("portada", "valor");
            //formData.append(f.attr("name"), $(this)[0].files[0]);
            if (portada != "") {
                $.ajax({
                    url: "<?php echo base_url() . 'Control_Dashuser/updatefoto'; ?>",
                    type: "POST",
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (res) {
                        window.location.href = "<?php echo base_url() . 'Control_Dashuser'; ?>";
                    }});

            } else {
                alert('Selecciona una imagen');
            }

        });
    });
</script>

<!-- Start right content -->
<div class="content-page">
    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <?php
    if (isset($usuario)):
        foreach ($usuario as $cookval):
            $img = $cookval->Foto_perfil;
            $portada = $cookval->Foto_portada;
            ?>
            <div class="profile-banner" style="background-image: url(<?php echo base_url() . 'img/cargas/' . $portada; ?>); margin-top:4.7%;">
                <div class="col-sm-3 avatar-container">

                    <?php if ($img == ""): ?>
                        <img src="<?php echo base_url() ?>img/usershadow.png" class='img-circle profile-avatar' alt='User avatar' style="max-width: 200px;">
                    <?php else: ?>
                        <img src="<?php echo base_url() . 'img/cargas/' . $img; ?>" class='img-circle profile-avatar' alt='User avatar' style="max-width: 200px;">
                    <?php
                    endif;
                endforeach;
            endif;
            ?>
        </div>
        <form id="updatefotoForm" style="float:right; margin-top: 1.2%;" action="<?= base_url('Control_Dashuser/updatefoto'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input id="fportada" type="file" name="portada" class="btn btn-primary btn-sm"/>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Cambiar foto</button>
            </div>
        </form>
        <div class="col-sm-12 profile-actions text-right">
            <button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Friends</button>
            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-envelope"></i> Send Message</button>
            <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-ellipsis-v"></i></button>
        </div>
    </div>
    <div class="content">

        <div class="row">
            <div class="col-sm-3">
                <!-- Begin user profile -->
                <div class="text-center user-profile-2">

                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge">1,245</span>
                            Segudores
                        </li>
                        <li class="list-group-item">
                            <span class="badge">245</span>
                            Compartidos
                        </li>
                        <li class="list-group-item">
                            <span class="badge">1,245</span>
                            Likes
                        </li>
                        <li class="list-group-item">
                            <span class="badge">70%</span>
                            Puntuación
                        </li>
                    </ul>

                    <!-- User button -->
                    <div class="user-button">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-user"></i> Add as friend</button>
                            </div>
                        </div>
                    </div><!-- End div .user-button -->
                </div><!-- End div .box-info -->
                <!-- Begin user profile -->
            </div><!-- End div .col-sm-4 -->

            <div class="col-sm-9">
                <div class="widget widget-tabbed">
                    <!-- Nav tab -->
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#my-timeline" data-toggle="tab"><i class="fa fa-pencil"></i> Anuncios</a></li>
                        <li><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> Información</a></li>
                        <li><a href="#user-activities" data-toggle="tab"><i class="fa fa-laptop"></i> Resgistrar Ubicación</a></li>
                        <li><a href="#mymessage" data-toggle="tab"><i class="fa fa-envelope"></i> Mensajes</a></li>
                    </ul>
                    <!-- End nav tab -->

                    <!-- Tab panes -->
                    <div class="tab-content">


                        <!-- Tab timeline -->
                        <div class="tab-pane animated active fadeInRight" id="my-timeline">
                            <div class="user-profile-content">

                                <!-- Begin timeline -->
                                <div class="the-timeline">
                                    <form role="form" class="post-to-timeline">

                                        <div class="col-sm-6 left">
                                            <a href="<?php echo base_url('Control_Dashuser/Anunciate') ?>">
                                                <button type="button" class="btn btn-primary">Que deseas anunciar?...</button></a>
                                        </div><br>
                                        <br><br>
                                        <div class="col-sm-6 left col-sm-offset-1">
                                            <button type="button" class="btn btn-info">Contenido Reciente</button>
                                        </div>
                                    </form>

                                    <br>

                                    <!--                                    <div id="listacontenido" class="col-lg-8">
                                    
                                                                        </div>-->
                                    <br><br>
                                    <ul id="listacontenido">
                                        <?php
                                        if (isset($contenido)):
                                            foreach ($contenido as $anun):
                                                ?>
                                                <li>
                                                    <div class='the-date'>
                                                        <span><?php
                                                            $fecha = $anun->Fecha;
                                                            $porciones = explode(" ", $fecha);
                                                            echo $porciones[1] . '<br>'; // porción1
                                                            $mes = $porciones[3];
                                                            $abrev = str_split($mes);
                                                            ?></span>
                                                        <small><?= $abrev[0] . $abrev[1] . $abrev[2]; ?></small>
                                                    </div>
                                                    <h4><?= $anun->Anuncio; ?></h4>
                                                    <p><?= $anun->Descripcion; ?></p>

                                                    <div>
                                                        <div class="dropdown" style="float: right; margin-top: -10%;">
                                                            <button class="dropbtn">Opciones <span class="caret"></span></button>

                                                            <div class="dropdown-content">
                                                                <a href="#" onclick='eliminar(<?= $anun->Id_anun; ?>)'>Eliminar</a>
                                                                <a href="#" data-modal="md-slide-from-bottom">Link 2</a>
                                                                <a href="#">Link 3</a>
                                                            </div>
                                                        </div>
                                                        <img src='<?php
                                                        $img = $anun->archivo;
                                                        echo base_url() . '/img/cargas/' . $img;
                                                        ?>' style='width: 100%; height: 418px;  margin: 0 auto; display:block; margin-bottom: 2%;'/>
                                                    </div>
                                                </li>
                                                <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </ul>
                                    <!--                                    <ul>
                                                                            <li>
                                                                                <div class="the-date">
                                                                                    <span>01</span>
                                                                                    <small>Feb</small>
                                                                                </div>
                                                                                <h4>Lorem ipsum dolor!</h4>
                                                                                <p>
                                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <div class="the-date">
                                                                                    <span>31</span>
                                                                                    <small>Jan</small>
                                                                                </div>
                                                                                <h4>Yohoo! you can put video here</h4>
                                                                                <div class="videoWrapper">
                                                                                    <iframe src="//player.vimeo.com/video/85847275?title=0&amp;byline=0&amp;portrait=0"></iframe>
                                                                                </div>
                                                                                <p>
                                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <div class="the-date">
                                                                                    <span>25</span>
                                                                                    <small>Jan</small>
                                                                                </div>
                                                                                <h4>You also can put Soundcloud iframe here</h4>
                                                                                <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/132890481&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
                                                                                <p>
                                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                                                                </p>
                                                                            </li>
                                                                            <li class="the-year"><p>2013</p></li>
                                                                            <li>
                                                                                <div class="the-date">
                                                                                    <span>20</span>
                                                                                    <small>Dec</small>
                                                                                </div>
                                                                                <p>
                                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                                                                </p>
                                                                            </li>
                                                                            <li>
                                                                                <div class="the-date">
                                                                                    <span>27</span>
                                                                                    <small>Nov</small>
                                                                                </div>
                                                                                <p>
                                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                                                                </p>
                                                                            </li>
                                                                        </ul>-->
                                </div><!-- End div .the-timeline -->
                                <!-- End timeline -->
                            </div><!-- End div .user-profile-content -->
                        </div><!-- End div .tab-pane -->
                        <!-- End Tab timeline -->

                        <!-- Tab about -->
                        <div class="tab-pane animated fadeInRight" id="about">
                            <div class="user-profile-content">
                                <form role="form" action="<?php echo base_url('Control_Dashuser/updateUser'); ?>" method="POST" enctype="multipart/form-data">
                                    <?php foreach ($usuario as $valuecat): ?> 
                                        <h5><strong>Acerca de Mi</strong> Esto aparecera en tu perfíl publico</h5>
                                        <textarea class="form-control" name="acerca" style="height: 70px;"><?php echo $valuecat->Acerca; ?></textarea>
                                        <?php echo form_error('acerca'); ?>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5><strong>CONTACTO</strong></h5>
                                                <address>
                                                    <strong>Teléfono</strong><br>
                                                    <input type="text" class="form-control" name="telefono" value="<?php echo $valuecat->Tel_user; ?>">
                                                    <?php echo form_error('telefono'); ?>
                                                </address>
                                                <address>
                                                    <strong>Email</strong><br>
                                                    <input type="text" class="form-control" name="email" value="<?php echo $valuecat->email; ?>">
                                                    <?php echo form_error('email'); ?>
                                                </address>
                                                <address>
                                                    <strong>Website</strong><br>
                                                    <input type="text" class="form-control" name="website" value="<?php echo $valuecat->Website; ?>">
                                                    <?php echo form_error('website'); ?>
                                                </address>
                                                <address>
                                                    <strong>Red social</strong><br>
                                                    <input type="text" class="form-control" name="social" value="<?php echo $valuecat->Social; ?>">
                                                    <?php echo form_error('social'); ?>
                                                </address>
                                                <address>
                                                    <strong>Cambiar la foto de perfil</strong><br>
                                                    <input type="file" class="form-control" name="foto_nueva">
                                                </address>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5><strong>PERFÍL</strong></h5>
                                                <address>
                                                    <strong>Nickname</strong><br>
                                                    <input type="text" class="form-control" name="nickname" value="<?php echo $valuecat->username; ?>">
                                                    <?php echo form_error('nickname'); ?>
                                                </address>
                                                <address>
                                                    <strong>Anunciante</strong><br>
                                                    <?php if ($valuecat->Tipo_user === 'particular'): ?>                                        
                                                        <div class="radio iradio">
                                                            <label>
                                                                <input type="radio" name="anunciante" id="optionsRadios1" value="particular" checked>
                                                                Particular
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="anunciante" id="optionsRadios2" value="comercial">
                                                                Comercial
                                                            </label>
                                                        </div>
                                                    <?php else: ?>                                        
                                                        <div class="radio iradio">
                                                            <label>
                                                                <input type="radio" name="anunciante" id="optionsRadios1" value="particular">
                                                                Particular
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="anunciante" id="optionsRadios2" value="comercial" checked>
                                                                Comercial
                                                            </label>                                                
                                                        </div>
                                                    <?php endif; ?>
                                                </address>
                                                <address>
                                                    <strong>Nombre</strong><br>
                                                    <input type="text" class="form-control" name="nombre" value="<?php echo $valuecat->Nom_user; ?>">
                                                    <?php echo form_error('nombre'); ?>
                                                </address>
                                                <address>
                                                    <strong>Apellido</strong><br>
                                                    <input type="text" class="form-control" name="apellido" value="<?php echo $valuecat->App_user; ?>">
                                                    <?php echo form_error('apellido'); ?>
                                                </address>
                                                <!--address>
                                                    <strong>Password</strong><br>
                                                    <input id="password" type="password" class="form-control" name="password1" value="?php echo $valuecat->Passwordu; ?>">
                                                    ?php echo form_error('password1'); ?>
                                                </address>
                                                <address>
                                                    <strong>Re-Password</strong><br>
                                                    <input type="password" class="form-control" name="password2" value="?php echo $valuecat->Passwordu; ?>">
                                                    ?php echo form_error('password2'); ?>
                                                </address-->
                                            </div>
                                        </div><!-- End div .row -->
                                        <button type="submit" class="btn btn-primary">Actualiza</button>
                                    <?php endforeach; ?>
                                </form>
                            </div><!-- End div .user-profile-content -->
                        </div><!-- End div .tab-pane -->
                        <!-- End Tab about -->


                        <!-- Tab user activities -->
                        <div class="tab-pane animated fadeInRight" id="user-activities">
                            <div class="scroll-user-widget">
                                <label>Puedes registrar tu ubicación copiando los números de Latitud , Longitud que aparecen debajo y pegandolos en sus respectivos campos de texto en el formulario: </label> <br/>
                                <label id="latitud"></label> <label id="long"></label>  <br/> 
                                <a id="link" target="_blank">Verificar tu ubicación</a>
                                <form class="form" style="whidth: 80%;">
                                    <label>Latitud:</label> <input type="text" name="lat" class="form-control">
                                    <label>longuitud:</label> <input type="text" name="lng" class="form-control"><br>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                                <div class="or-box" style="margin-bottom: 5%; ">
                                    <span class="or">O</span>
                                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCdecEtqO33RJcSOjUHclXCjq1zQPMrOXw"></script>
                                </div>
                                <label>Puedes registrar tu ubicación colocando el marcador: </label> <br/>
                                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

                                <?php
                                $lat = "42.822410654302125";
                                $lng = "-1.6459033203125273";
                                $pos = "42.822410654302125,-1.6459033203125273";
                                echo "<div id='googleMap'></div>
                                      <button type='submit' id='enviar' class='btn btn-alert'>Guardar</button><br>
                                      <div id='respuesta'></div>";
                                ?>
                                <a href='<?php echo base_url('Control_Dashuser/marker'); ?>' class='btn btn-alert' target='_blank'>Abrir en otra página</a><br>
                                <script>
                                                                    $(document).ready(function () {
                                                                        lat = "<?php echo $lat; ?>";
                                                                        lng = "<?php echo $lng; ?>";
                                                                        var map;
                                                                        function initialize() {
                                                                            var myLatlng = new google.maps.LatLng(lat, lng);
                                                                            var mapOptions = {
                                                                                zoom: 7,
                                                                                center: myLatlng,
                                                                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                                                            };
                                                                            map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
                                                                            var marker = new google.maps.Marker({
                                                                                position: myLatlng,
                                                                                draggable: true,
                                                                                animation: google.maps.Animation.DROP,
                                                                                web: "LocalizaciÃ³n geogrÃ¡fica!",
                                                                                icon: "<?php echo base_url(); ?>img/marker.png"
                                                                            });
                                                                            google.maps.event.addListener(marker, 'dragend', function (event) {
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
                                                                        $("#enviar").click(function () {
                                                                            var url = "<?php echo base_url(); ?>Control_Dashuser/cargar";
                                                                            $("#respuesta").html('<img src="<?php echo base_url() . '/img/cargando.gif' ?>" />');
                                                                            $.ajax({
                                                                                type: "POST",
                                                                                url: url,
                                                                                data: 'lat=' + lat + '&lng=' + lng,
                                                                                success: function (data)
                                                                                {
                                                                                    data1 = data[15];
                                                                                    if (data1 === "1") {
                                                                                        alert("Tu ubicación se registro");


                                                                                    } else if (data1 === "0") {
                                                                                        alert("Tu ubicación se actualizo");
                                                                                    }
                                                                                    //$("#respuesta").html(data1);

                                                                                }
                                                                            });
                                                                        });
                                                                    });
                                </script>

                                <!--                                <ul class="media-list">
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>John </strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                                                <br /><i>2 minutes ago</i></p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>John </strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
                                                                                <br /><i>8 minutes ago</i></p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                                                                                <br /><i>an hour ago</i></p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>Ari Rusmanto</strong> Added 3 products
                                                                                <br /><i>3 hours ago</i></p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                                                <br /><i>12 hours ago</i></p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>Johnny Depp</strong> Updated his avatar
                                                                                <br /><i>Yesterday</i></p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>John </strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                                                <br /><i>2 minutes ago</i></p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>John </strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
                                                                                <br /><i>8 minutes ago</i></p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                                                                                <br /><i>an hour ago</i></p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>Ari Rusmanto</strong> Added 3 products
                                                                                <br /><i>3 hours ago</i></p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                                                <br /><i>12 hours ago</i></p>
                                                                        </a>
                                                                    </li>
                                                                    <li class="media">
                                                                        <a href="#fakelink">
                                                                            <p><strong>Johnny Depp</strong> Updated his avatar
                                                                                <br /><i>Yesterday</i></p>
                                                                        </a>
                                                                    </li>
                                                                </ul>-->
                            </div><!-- End div .scroll-user-widget -->
                        </div><!-- End div .tab-pane -->
                        <!-- End Tab user activities -->

                        <!-- Tab user messages -->
                        <!--<div class="tab-pane animated fadeInRight" id="mymessage">
                            <div class="scroll-user-widget">


                            </div>
                            <ul class="media-list">
                                <li class="media">
                                    <a class="pull-left" href="#fakelink">
                                        <img class="media-object" src="<?php echo base_url() ?>assets/img/avatar/2.jpg" alt="Avatar">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">John </a> <small>Just now</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#fakelink">
                                        <img class="media-object" src="<?php echo base_url() ?>assets/img/avatar/1.jpg" alt="Avatar">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#fakelink">
                                        <img class="media-object" src="<?php echo base_url() ?>assets/img/avatar/5.jpg" alt="Avatar">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#fakelink">
                                        <img class="media-object" src="<?php echo base_url() ?>assets/img/avatar/4.jpg" alt="Avatar">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#fakelink">
                                        <img class="media-object" src="<?php echo base_url() ?>assets/img/avatar/3.jpg" alt="Avatar">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Jenny </a> <small>January 17, 2014 05:35 PM</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#fakelink">
                                        <img class="media-object" src="<?php echo base_url() ?>assets/img/avatar/2.jpg" alt="Avatar">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">John </a> <small>Just now</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#fakelink">
                                        <img class="media-object" src="<?php echo base_url() ?>assets/img/avatar/1.jpg" alt="Avatar">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#fakelink">
                                        <img class="media-object" src="<?php echo base_url() ?>assets/img/avatar/5.jpg" alt="Avatar">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#fakelink">
                                        <img class="media-object" src="<?php echo base_url() ?>assets/img/avatar/4.jpg" alt="Avatar">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#fakelink">
                                        <img class="media-object" src="<?php echo base_url() ?>assets/img/avatar/3.jpg" alt="Avatar">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#fakelink">Jenny </a> <small>January 17, 2014 05:35 PM</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- End div .scroll-user-widget -->
                    </div><!-- End div .tab-pane -->
                    <!-- End Tab user messages -->
                </div><!-- End div .tab-content -->
            </div><!-- End div .box-info -->
        </div>
    </div>        
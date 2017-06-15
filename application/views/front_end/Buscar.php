<!-- CONTENIDO -->

<!-- CARRUSEL -->
<script type="text/javascript">
    $(document).ready(function () {
       
        $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function () {
            var $this = $(this),
                    c = $this.data('count');
            if (!c)
                c = 0;
            c++;
            $this.data('count', c);
            $('#' + this.id + '-bs3').html(c);
        });
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    });
</script>


<div class="col-xs-12 col-sm-12 col-lg-10 contenido"><div id="listaimg1"></div>
    <!--  Contenedor Principal del Carousel items 1 -->
    <div class="col-xs-12 col-sm-12 col-lg-12">
        
        <h4>Recomendados</h4>
        <div class="slider5 col-xs-12 col-sm-12 col-lg-12">
            <?php if (isset($busqueda)): foreach ($busqueda as $value):
                    ?>
                    <div class="slide">
                        <!-- SECCION DE CONTENIDO 1-->
                        <article class="col-xs-12 col-sm-6 col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="<?= $value->Id_anun; ?>" title="<?= $value->Anuncio; ?>" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php
                                        $img = $value->archivo;
                                        echo base_url() . 'img/cargas/' . $img;
                                        ?>" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="<?= $value->Anuncio; ?>"><?= $value->Anuncio; ?><br>$<?= $value->precio; ?></a></h4>
                                    <span class="pull-right">
                                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                endforeach;
            endif;
            ?>
       </div>
    </div>

    <!-- Contenedor Principal del Carousel 2 items -->
    <div class="col-xs-12 col-sm-12 col-lg-12">
        <h4>Destacados</h4>
        <div class="slider5 col-xs-12 col-sm-12 col-lg-12">
            <?php if (isset($busqueda)): foreach ($busqueda as $value):
                    ?>
                    <div class="slide">
                        <!-- SECCION DE CONTENIDO 1-->
                        <article class="col-xs-12 col-sm-6 col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="<?= $value->Id_anun; ?>" title="<?= $value->Anuncio; ?>" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php
                                        $img = $value->archivo;
                                        echo base_url() . 'img/cargas/' . $img;
                                        ?>" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="<?= $value->Anuncio; ?>"><?= $value->Anuncio; ?><br>$<?= $value->precio; ?></a></h4>
                                    <span class="pull-right">
                                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php
                endforeach;
            endif;
            ?>
       </div>
    </div>
    <!-- Contenedor Principal del Carousel 3 items -->
    <div class="col-xs-12 col-sm-12 col-lg-12">
        <h4>Recientes</h4>
        <div id="Carousel3" class="carousel slide">                 

            <!-- Carousel items 1 -->
            <div class="carousel-inner">

                <!-- Carousel items 1 -->
                <div class="item active">
                    <div class="row">

                        <!-- SECCION DE CONTENIDO 1-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Mariachi Perla Mexicana" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/ODAwWDQ4MQ==/z/mesAAOSwgZ1Xv43O/$_20.JPG?set_id=8800005007" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Marichi Perla Mexicana">Reparacion y mantenimiento de hidroneumaticos y jacuzzi </a></h4>
                                    <span class="pull-right">
                                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 2-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Nature Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NjcyWDQ4MA==/z/82IAAOSwXeJXdV-F/$_20.JPG?set_id=8800005007" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Nature Portfolio">Reparacion de Secadoras </a></h4>
                                    <span class="pull-right">
                                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 3-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Nature Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NDgwWDMyMA==/z/PuIAAOSwpLNX9dlB/$_20.jpg" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Nature Portfolio">Fabricación de puertas ventanas y protectores </a></h4>
                                    <span class="pull-right">
                                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 4-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Mago Willy y sus payasos" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img class=" img-responsive" src="https://i.ebayimg.com/00/s/NDQ5WDgwMA==/z/cZ8AAOSwepJXXGWT/$_20.jpg" alt="Nature Portfolio" />

                                    </a>                                
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Mago Willy">Trabajos de carpintería </a></h4>
                                    <span class="pull-right">
                                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 5-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Mago Willy y sus payasos" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img class=" img-responsive" src="https://i.ebayimg.com/00/s/NDEzWDQxMw==/z/s~gAAOSwzaJX9cux/$_20.JPG" alt="Nature Portfolio" />

                                    </a>                                
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Mago Willy">SISTEMAS DE INTERCOMUNICACIÓN</a></h4>
                                    <span class="pull-right">
                                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                    </div><!--.row-->
                </div><!--.item-->

                <!-- Carousel items 2 -->
                <div class="item">
                    <div class="row">
                        <!-- SECCION DE CONTENIDO 1-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Mago Willy y sus payasos" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img class=" img-responsive" src="https://i.ebayimg.com/00/s/NDEzWDQxMw==/z/s~gAAOSwzaJX9cux/$_20.JPG" alt="Nature Portfolio" />

                                    </a>                                
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Mago Willy">SISTEMAS DE INTERCOMUNICACIÓN</a></h4>
                                    <span class="pull-right">
                                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 2-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Mago Willy y sus payasos" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img class=" img-responsive" src="https://i.ebayimg.com/00/s/NDEzWDQxMw==/z/s~gAAOSwzaJX9cux/$_20.JPG" alt="Nature Portfolio" />

                                    </a>                                
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Mago Willy">SISTEMAS DE INTERCOMUNICACIÓN</a></h4>
                                    <span class="pull-right">
                                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 3-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Volkswagen Passat 2015" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NDUwWDgwMA==/z/UIAAAOSw8w1X2r18/$_20.JPG" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Volkswagen Passat 2015">RASTREO SATELITAL</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 4-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/MzEzWDgwMA==/z/JlIAAOSw8w1X9AA~/$_20.JPG" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">ASESORES TELEFONICOS </a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 5-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NjAwWDY2Nw==/z/WwEAAOSwNRdX9fI~/$_20.jpg" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">Facilitador de Soluciones Freelance </a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div><!--.row-->
                </div><!--.item-->

                <!-- Carousel items 3 -->
                <div class="item">
                    <div class="row">

                        <!-- SECCION DE CONTENIDO 1 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NTMzWDgwMA==/z/02oAAOSwmtJXYErA/$_20.JPG?set_id=8800005007" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">COORDINADORES (AS) JR. <br>$ 8,000 A $ 12,000</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 2-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="People Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NjAwWDgwMA==/z/JpUAAOSwPCVX9dPg/$_20.JPG" alt="People Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="People Portfolio">Vendedor ejecutivo</a></h4>  
                                    <span class="pull-right">
                                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 3 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Seat León Dsg" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/Nzc1WDgwMA==/z/0R4AAOSwOyJX9dMv/$_20.JPG" alt="Sports Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Seat León Dsg">Maestra Para Guardería </a></h4>  
                                    <span class="pull-right">
                                        <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                        <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 4 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NDE4WDgwMA==/z/eAUAAOSwGtRX0Erc/$_20.JPG?set_id=8800005007" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">Clases de Química, Matemáticas / Curso UNAM / Elaboración de Tesis</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 5 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Sports Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/MzcxWDYxMA==/z/s20AAOSwzaJX6W4M/$_20.JPG" alt="Sports Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Sports Portfolio" title="LUJOSA CASA">Certificacion DC3 Trabajos en Alturas STPS</a></h4>  
                                    <span class="pull-right">
                                        <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                        <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div><!--.row-->
                </div><!--.item-->

                <!-- Carousel items 4 -->
                <div class="item">
                    <div class="row">

                        <!-- SECCION DE CONTENIDO 1 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="People Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/Nzc1WDgwMA==/z/ezUAAOSw-YVXmmSv/$_20.JPG?set_id=8800005007" alt="People Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="People Portfolio">¡Clases de violín!</a></h4>  
                                    <span class="pull-right">
                                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 2 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="People Portfolio" class="zoom"  data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NTAwWDcwMA==/z/0iAAAOSwI2xX8nhi/$_20.JPG" alt="People Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="People Portfolio">Apoyo escolar a domicilio </a></h4>  
                                    <span class="pull-right">
                                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 3 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="People Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NTk0WDc5Mg==/z/gaMAAOSwOdpXyuTS/$_20.JPG?set_id=8800005007" alt="People Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="People Portfolio">Asesorias escolares a domicilio </a></h4>  
                                    <span class="pull-right">
                                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>                    

                        <!-- SECCION DE CONTENIDO 4 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php echo base_url() ?>img/auto2.jpg" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">Audi A3</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 5 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Seat León Dsg" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php echo base_url() ?>img/auto3.jpg" alt="Sports Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Seat León Dsg">Seat León Dsg</a></h4>  
                                    <span class="pull-right">
                                        <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                        <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div><!--.row-->
                </div><!--.item-->

            </div><!--.carousel-inner-->
            <a data-slide="prev" href="#Carousel3" class="left carousel-control">‹</a>
            <a data-slide="next" href="#Carousel3" class="right carousel-control">›</a>
        </div><!--.Carousel-->
    </div>

    <!-- Contenedor Principal del Carousel 4 items -->
    <div class="col-xs-12 col-sm-12 col-lg-12">
        <h4>Vehículos</h4>
        <div id="Carousel4" class="carousel slide">                 

            <!-- Carousel items 1 -->
            <div class="carousel-inner">

                <!-- Carousel items 1 -->
                <div class="item active">
                    <div class="row">

                        <!-- SECCION DE CONTENIDO 1-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="BEETLE 2009 S" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="http://mlm-s1-p.mlstatic.com/volkswagen-beetle-sportline-25l-mt-seminuevo-de-planta-429021-MLM20696010784_052016-F.jpg" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Nature Portfolio">BEETLE 2009 S<br>$150,000</a></h4>
                                    <span class="pull-right">
                                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 2-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="BEETLE 2009 S" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="http://www.visionmotors.mx/autos/PATRIOT%202010%20LIMITED%20PLATA%20001.JPG" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="JEEP Patriot LIMITED">JEEP Patriot LIMITED<br>$250,000</a></h4>
                                    <span class="pull-right">
                                        <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                        <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 3-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Volkswagen Passat 2015" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php echo base_url() ?>img/auto.jpg" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Volkswagen Passat 2015">Volkswagen Passat 2015<br>$300,000</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 4-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php echo base_url() ?>img/auto2.jpg" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">Audi A3<br>$290,000</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 5-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="http://imganuncios.mitula.net/vendo_yamaha_yzf_r_seminueva_vendo_yamaha_yzf_r_seminueva_99231306309523907.jpg" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">Yamaha Yzf R<br>$210,000</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                    </div><!--.row-->
                </div><!--.item-->

                <!-- Carousel items 2 -->
                <div class="item">
                    <div class="row">
                        <!-- SECCION DE CONTENIDO 1-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NjAwWDgwMA==/z/tf8AAOSwFe5X0KFx/$_20.JPG?set_id=8800005007?set_id=1C5000" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">Honda Shadow 2005<br>$$334,750</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 2-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NjAwWDgwMA==/z/msIAAOSwTA9X6tH8/$_20.jpg" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">Honda Shadow spirit 2007<br>$84,000</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 3-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Volkswagen Passat 2015" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NjAwWDgwMA==/z/lt0AAOSwdIFX1jDK/$_20.JPG" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Volkswagen Passat 2015">Seat Ibiza Cupé 2009<br>$105,000</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 4-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NjAwWDgwMA==/z/rRUAAOSwmLlX9fje/$_20.JPG" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">TOYOTA HILUX SR 2016<br>$315,000 </a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 5-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NjAwWDgwMA==/z/tXIAAOSwmLlX8Arw/$_20.JPG" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3"> Toyota Hilux 2016<br>$319,000</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div><!--.row-->
                </div><!--.item-->

                <!-- Carousel items 3 -->
                <div class="item">
                    <div class="row">

                        <!-- SECCION DE CONTENIDO 1 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NjAwWDgwMA==/z/dRMAAOSw6n5XvJHC/$_20.jpg" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">Toyota hilux<br>$155,000</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 2-->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="People Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NDUwWDgwMA==/z/0x0AAOSwNRdX9fZv/$_20.JPG" alt="People Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="People Portfolio">Kenworth W 900 2000<br>$ Negociable </a></h4>  
                                    <span class="pull-right">
                                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 3 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Seat León Dsg" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NjAwWDgwMA==/z/SiUAAOSwgY9Xe~9e/$_20.JPG?set_id=8800005007" alt="Sports Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Seat León Dsg"> Ford Fusion Sedán 2010<br>$119,000 </a></h4>  
                                    <span class="pull-right">
                                        <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                        <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 4 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NjAwWDgwMA==/z/duAAAOSwdzVXorXu/$_20.JPG?set_id=8800005007" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">Ford Fusion Sedán 2010<br>$128,000</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 5 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Sports Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NTg5WDgwMA==/z/esMAAOSwTA9X7rnM/$_20.JPG" alt="Sports Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Sports Portfolio" title="LUJOSA CASA">Mercedes-Benz 2121 redilas Modelo 1992<br>$149,000</a></h4>  
                                    <span class="pull-right">
                                        <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                        <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div><!--.row-->
                </div><!--.item-->

                <!-- Carousel items 4 -->
                <div class="item">
                    <div class="row">

                        <!-- SECCION DE CONTENIDO 1 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="People Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/NDQ5WDgwMA==/z/r9UAAOSw8w1X9dFO/$_20.JPG" alt="People Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="People Portfolio">International Mediano 2007<br>$22,000 USD Negociable </a></h4>  
                                    <span class="pull-right">
                                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 2 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="People Portfolio" class="zoom"  data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="https://i.ebayimg.com/00/s/Mzc1WDUwMA==/z/PwIAAOSwLF1X9W2r/$_20.JPG" alt="People Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="People Portfolio">camion de volteo dina<br>$160,000</a></h4>  
                                    <span class="pull-right">
                                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 3 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="People Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="http://images.locanto.com.mx/Volkswagen-Golf-Gti-A7-20379-km/vap_1789527551.jpg" alt="People Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="People Portfolio">Volkswagen Golf Gti A7<br>$349,000</a></h4>  
                                    <span class="pull-right">
                                        <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                        <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>                    

                        <!-- SECCION DE CONTENIDO 4 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Food Portfolio" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php echo base_url() ?>img/auto2.jpg" alt="Food Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Audi A3">Audi A3</a></h4>
                                    <span class="pull-right">
                                        <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                        <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>

                        <!-- SECCION DE CONTENIDO 5 -->
                        <article class="col-xs-12 col-sm-6 col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="#" title="Seat León Dsg" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php echo base_url() ?>img/auto3.jpg" alt="Sports Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="Seat León Dsg">Seat León Dsg</a></h4>  
                                    <span class="pull-right">
                                        <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                        <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div><!--.row-->
                </div><!--.item-->

            </div><!--.carousel-inner-->
            <a data-slide="prev" href="#Carousel4" class="left carousel-control">‹</a>
            <a data-slide="next" href="#Carousel4" class="right carousel-control">›</a>
        </div><!--.Carousel-->
    </div>
</div>


<!--- INICIO DE MODAL PARA CARGAR INFORMACION DEL ANUNCIO Y ANUNCIANTE -->
<script type="text/javascript">
    $(function () {
        // This code is not even almost production ready. It's 2am here, and it's a cheap proof-of-concept if anything.
        $(".img-modal-btn.right").on('click', function (e) {
            e.preventDefault();
            cur = $(this).parent().find('img:visible()');
            next = cur.next('img');
            par = cur.parent();
            if (!next.length) {
                next = $(cur.parent().find("img").get(0))
            }
            cur.addClass('hidden');
            next.removeClass('hidden');

            return false;
        })

        $(".img-modal-btn.left").on('click', function (e) {
            e.preventDefault();
            cur = $(this).parent().find('img:visible()');
            next = cur.prev('img');
            par = cur.parent();
            children = cur.parent().find("img");
            if (!next.length) {
                next = $(children.get(children.length - 1))
            }
            cur.addClass('hidden');
            next.removeClass('hidden');

            return false;
        })

    });
</script>
<div class="modal fade img-modal" id="myModalsocialmedia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog modal-lg modal-dialog1">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 modal-image">
                        
                        <div id="listaimg" class="col-md-12 modal-image">                        
                        <img class="img-responsive hidden" src="http://upload.wikimedia.org/wikipedia/commons/1/1a/Bachalpseeflowers.jpg" />
                        <img class="img-responsive hidden" src="http://www.netflights.com/media/216535/hong%20kong_03_681x298.jpg" />
                        </div>
                        
                        <a href="#" class="img-modal-btn left"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a href="#" class="img-modal-btn right"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        
                    </div>
                    <div class="col-md-4 modal-meta">
                        <div class="modal-meta-top">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <div id="infoanun">
                            </div>

                            <ul class="img-comment-list">
                                <li>
                                    <div class="comment-img">
                                        <img src="http://lorempixel.com/50/50/people/6">
                                    </div>
                                    <div class="comment-text">
                                        <strong><a href="">Jane Doe</a></strong>
                                        <p>Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-img">
                                        <img src="http://lorempixel.com/50/50/people/7">
                                    </div>
                                    <div class="comment-text">
                                        <strong><a href="">Jane Doe</a></strong>
                                        <p>Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span>on March 5th, 2014</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-img">
                                        <img src="http://lorempixel.com/50/50/people/9">
                                    </div>
                                    <div class="comment-text">
                                        <strong><a href="">Jane Doe</a></strong>
                                        <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-meta-bottom">
                            <input type="text" class="form-control" placeholder="Leave a commment.."/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!--- FIN DE MODAL PARA CARGAR INFORMACION DEL ANUNCIO Y ANUNCIANTE -->

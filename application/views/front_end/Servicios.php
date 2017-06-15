<div class="container col-xs-12 col-sm-10 col-lg-10 contenido">      
    <img src="<?= base_url() ?>img/headservicios.png" style="width: 100%;"> 
</div>

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

<div class="hidden-sm col-xs-12 col-sm-10 col-lg-10 contenido">
    <h3>Recomendados</h3>
    <div id="Carousel" class="carousel slide">                 

        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a title="Mariachi Perla Mexicana" class="zoom" data-title="Mariachi Perla Mexicana" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                    <img src="<?php echo base_url() ?>img/mariachi.jpg" alt="Nature Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Marichi Perla Mexicana">Mariachi Perla Mexicana</a></h4>
                                <span class="pull-right">
                                    <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                    <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Nature Portfolio" class="zoom" data-title="Payaso Chicharrin" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                    <img src="<?php echo base_url() ?>img/payaso.jpg" alt="Nature Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Nature Portfolio">Payaso</a></h4>
                                <span class="pull-right">
                                    <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                    <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>

                    <div class="col-md-2">                   
                            <a title="Image 13">
                                <img class="thumbnail img-responsive" src="<?php echo base_url() ?>img/mago.png">
                            </a>
                    </div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Mago Willy y sus payasos">
                                    <img class="thumbnail img-responsive" src="<?php echo base_url() ?>img/mago.png" alt="Nature Portfolio" />
                                    
                                </a>                                
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Mago Willy">Mago Willy</a></h4>
                                <span class="pull-right">
                                    <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                    <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>

                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Volkswagen Passat 2015" class="zoom" data-title="Volkswagen Passat 2015" data-footer="VW PASSAT COMFORTLINE TIPTRONIC NEGRO 2015 SEMINUEVO" data-type="image" data-toggle="lightbox">
                                    <img src="<?php echo base_url() ?>img/auto.jpg" alt="Food Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Volkswagen Passat 2015">Volkswagen Passat 2015</a></h4>
                                <span class="pull-right">
                                    <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                    <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Food Portfolio" class="zoom" data-title="Audi A3 de color Blanco, año 2014" data-footer="AUDI A3 HB AMBIENTE 1.4TSFI STRONIC BLANCO 2014 SEMINUEVO DE AGENCIA SERIE 4037 Garantía 60 días" data-type="image" data-toggle="lightbox">
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
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Seat León Dsg" class="zoom" data-title="Seat León Dsg de color Blanco, año 2013" data-footer="SEAT LEON FR 1.8 TSI DSG BLANCO NEVADA 2013 SEMINUEVO DE AGENCIA SERIE 0490 Garantía 60 días en motor y transmisión." data-type="image" data-toggle="lightbox">
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
                    
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Sports Portfolio" class="zoom" data-title="LUJOSA CASA EN VILLASOLAR, Acapulco." data-footer="GRAN OPORTUNIDAD!! VENDO HERMOSO Y LUJOSO DEPARTAMENTO CON FINOS ACABADOS,  LA ZONA DIAMANTE, A UNOS METROS DEL HOTEL PRINCES." data-type="image" data-toggle="lightbox">
                                    <img src="<?php echo base_url() ?>img/casa.jpg" alt="Sports Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Sports Portfolio" title="LUJOSA CASA">LUJOSA CASA</a></h4>  
                                <span class="pull-right">
                                    <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                    <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="People Portfolio" class="zoom" data-title="EXCELENTE DEPTO. RESIDENCIAL EN BUENA UBICACION, Acapulco." data-footer="CONDOMINIO “ARRECIFE”. Fracc. Farallon Condesa. Departamento nuevo en primer piso, cuenta con3 recámaras..." data-type="image" data-toggle="lightbox">
                                    <img src="<?php echo base_url() ?>img/casa2.jpg" alt="People Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="People Portfolio">RESIDENCIAL EN BUENA UBICACION</a></h4>  
                                <span class="pull-right">
                                    <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                    <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="People Portfolio" class="zoom" data-title="Macbook 12, Acapulco de Juarez." data-footer="Hola, ofrezco nueva Macbook con pantalla de retina de 12 pulgadas, color oro con 256 GB de almacenamiento..." data-type="image" data-toggle="lightbox">
                                    <img src="<?php echo base_url() ?>img/articulo.jpg" alt="People Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="People Portfolio">Macbook 12</a></h4>  
                                <span class="pull-right">
                                    <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                    <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="People Portfolio" class="zoom" data-title="solicito tecnicos en seguridad con disponiblidad de horario, Acapulco Gro." data-footer="MULTISISTEMAS, por nueva apertura te invita a formar parte de su equipo de trabajo para laborar como Técnico en Seguridad ( Zona Diamante ), no se requiere experiencia, nosotros te capacitamos..." data-type="image" data-toggle="lightbox">
                                    <img src="<?php echo base_url() ?>img/empleo.jpg" alt="People Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="People Portfolio">Solicito tecnicos en seguridad</a></h4>  
                                <span class="pull-right">
                                    <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                    <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>                    
                                     
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="People Portfolio" class="zoom" data-title="solicito tecnicos en seguridad con disponiblidad de horario, Acapulco Gro." data-footer="MULTISISTEMAS, por nueva apertura te invita a formar parte de su equipo de trabajo para laborar como Técnico en Seguridad ( Zona Diamante ), no se requiere experiencia, nosotros te capacitamos..." data-type="image" data-toggle="lightbox">
                                    <img src="<?php echo base_url() ?>img/empleo.jpg" alt="People Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="People Portfolio">Solicito tecnicos en seguridad</a></h4>  
                                <span class="pull-right">
                                    <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                    <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="People Portfolio" class="zoom" data-title="solicito tecnicos en seguridad con disponiblidad de horario, Acapulco Gro." data-footer="MULTISISTEMAS, por nueva apertura te invita a formar parte de su equipo de trabajo para laborar como Técnico en Seguridad ( Zona Diamante ), no se requiere experiencia, nosotros te capacitamos..." data-type="image" data-toggle="lightbox">
                                    <img src="<?php echo base_url() ?>img/empleo.jpg" alt="People Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="People Portfolio">Solicito tecnicos en seguridad</a></h4>  
                                <span class="pull-right">
                                    <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                    <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                </div><!--.row-->
            </div><!--.item-->

        </div><!--.carousel-inner-->
        <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
        <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
    </div><!--.Carousel-->
</div>
<!-- Carousel 2 items -->
<div class="container hidden-sm col-xs-12 col-sm-10 col-lg-10 contenido">
    <h3>Payasos y Personajes</h3>
    <div id="Carousel2" class="carousel slide">                 

        <!-- Carousel items -->
        <div class="carousel-inner">

            <div class="item active">
                <div class="row">
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/nature/4" alt="Nature Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Nature Portfolio">Nature</a></h4>
                                <span class="pull-right">
                                    <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                    <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/nature/4" alt="Nature Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Nature Portfolio">Nature</a></h4>
                                <span class="pull-right">
                                    <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                    <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>

                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>

                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/food/2" alt="Food Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Food Portfolio">Food</a></h4>
                                <span class="pull-right">
                                    <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                    <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/food/2" alt="Food Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Food Portfolio">Food</a></h4>
                                <span class="pull-right">
                                    <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                    <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/sports/3" alt="Sports Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Sports Portfolio" title="Sports">Sports</a></h4>  
                                <span class="pull-right">
                                    <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                    <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/sports/3" alt="Sports Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Sports Portfolio" title="Sports">Sports</a></h4>  
                                <span class="pull-right">
                                    <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                    <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/people/1" alt="People Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="People Portfolio">People</a></h4>  
                                <span class="pull-right">
                                    <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                    <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/people/1" alt="People Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="People Portfolio">People</a></h4>  
                                <span class="pull-right">
                                    <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                    <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                </div><!--.row-->
            </div><!--.item-->

        </div><!--.carousel-inner-->
        <a data-slide="prev" href="#Carousel2" class="left carousel-control">‹</a>
        <a data-slide="next" href="#Carousel2" class="right carousel-control">›</a>
    </div><!--.Carousel-->
</div>

<!-- Carousel 3 items -->
<div class="container hidden-sm col-xs-12 col-sm-10 col-lg-10 contenido">
    <h3>Payasos y Personajes</h3>
    <div id="Carousel3" class="carousel slide">                 

        <!-- Carousel items -->
        <div class="carousel-inner">

            <div class="item active">
                <div class="row">
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/nature/4" alt="Nature Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Nature Portfolio">Nature</a></h4>
                                <span class="pull-right">
                                    <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                    <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/nature/4" alt="Nature Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Nature Portfolio">Nature</a></h4>
                                <span class="pull-right">
                                    <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                    <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>

                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>

                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/food/2" alt="Food Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Food Portfolio">Food</a></h4>
                                <span class="pull-right">
                                    <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                    <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/food/2" alt="Food Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Food Portfolio">Food</a></h4>
                                <span class="pull-right">
                                    <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                    <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/sports/3" alt="Sports Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Sports Portfolio" title="Sports">Sports</a></h4>  
                                <span class="pull-right">
                                    <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                    <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/sports/3" alt="Sports Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Sports Portfolio" title="Sports">Sports</a></h4>  
                                <span class="pull-right">
                                    <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                    <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/people/1" alt="People Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="People Portfolio">People</a></h4>  
                                <span class="pull-right">
                                    <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                    <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/people/1" alt="People Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="People Portfolio">People</a></h4>  
                                <span class="pull-right">
                                    <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                    <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
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

<!-- Carousel 4 items -->
<div class="container hidden-sm col-xs-12 col-sm-10 col-lg-10 contenido">
    <h3>Payasos y Personajes</h3>
    <div id="Carousel4" class="carousel slide">                 

        <!-- Carousel items -->
        <div class="carousel-inner">

            <div class="item active">
                <div class="row">
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="img/logotipo-nombre.png" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                    <img src="http://<?php echo base_url(); ?>img/logotipo-nombre.png" alt="Nature Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Portfolio">Nature</a></h4>
                                <span class="pull-right">
                                    <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                    <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Nature Portfolio" class="zoom" data-title="Amazing Nature" data-footer="The beauty of nature" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/nature/4" alt="Nature Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Nature Portfolio">Nature</a></h4>
                                <span class="pull-right">
                                    <i id="like1" class="glyphicon glyphicon-thumbs-up"></i> <div id="like1-bs3"></div>
                                    <i id="dislike1" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>

                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>

                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/food/2" alt="Food Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Food Portfolio">Food</a></h4>
                                <span class="pull-right">
                                    <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                    <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Food Portfolio" class="zoom" data-title="Delicious Food" data-footer="Whatever your desire" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/food/2" alt="Food Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Food Portfolio">Food</a></h4>
                                <span class="pull-right">
                                    <i id="like2" class="glyphicon glyphicon-thumbs-up"></i> <div id="like2-bs3"></div>
                                    <i id="dislike2" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike2-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/sports/3" alt="Sports Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Sports Portfolio" title="Sports">Sports</a></h4>  
                                <span class="pull-right">
                                    <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                    <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="Sports Portfolio" class="zoom" data-title="Radical Sports" data-footer="This are the best moments" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/sports/3" alt="Sports Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="Sports Portfolio" title="Sports">Sports</a></h4>  
                                <span class="pull-right">
                                    <i id="like3" class="glyphicon glyphicon-thumbs-up"></i> <div id="like3-bs3"></div>
                                    <i id="dislike3" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike3-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                </div><!--.row-->
            </div><!--.item-->

            <div class="item">
                <div class="row">
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/people/1" alt="People Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="People Portfolio">People</a></h4>  
                                <span class="pull-right">
                                    <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                    <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
                                </span>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <div class="col-md-2"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                    <article class="col-xs-12 col-sm-6 col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#" title="People Portfolio" class="zoom" data-title="Beautiful People" data-footer="We create relationships" data-type="image" data-toggle="lightbox">
                                    <img src="http://lorempixel.com/350/350/people/1" alt="People Portfolio" />
                                    <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                <h4><a href="#" title="People Portfolio">People</a></h4>  
                                <span class="pull-right">
                                    <i id="like4" class="glyphicon glyphicon-thumbs-up"></i> <div id="like4-bs3"></div>
                                    <i id="dislike4" class="glyphicon glyphicon-thumbs-down"></i> <div id="dislike4-bs3"></div>
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

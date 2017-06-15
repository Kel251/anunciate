<div class="container col-xs-12 col-sm-10 col-lg-10 contenido">      
    <img src="<?php echo base_url(); ?>img/headvehiculos.jpg" style="width: 100%;"> 
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
   <!--<div class="col-xs-12 col-sm-12 col-lg-12">-->        
        <a href="#" title="ver más" data-original-title="apagado"><h4><span class="glyphicon glyphicon-car"></span> Destacados</h4></a>
        <button class="btn btn-xs btn-notify">Recibir notificaciones</button>
        <div class="slider5 col-xs-12 col-sm-12 col-lg-12">
            <?php if (isset($vehiculos)): foreach ($vehiculos as $valve):
                    ?>
                    <div class="slide">
                        <!-- SECCION DE CONTENIDO 1-->
                        <article class="col-xs-12 col-sm-6 col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="<?= $valve->Id_anun; ?>" onclick="postcomment(<?= $valve->Id_anun; ?>)" title="<?= $valve->Anuncio; ?>" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php
                                        $img = $valve->archivo;
                                        echo base_url() . 'img/cargas/' . $img;
                                        ?>" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="<?= $valve->Anuncio; ?>"><?= $valve->Anuncio; ?><br>$<?= $valve->precio; ?></a></h4>
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
        <hr>
    </div>
<!-- Carousel 2 items -->
<div class="container hidden-sm col-xs-12 col-sm-10 col-lg-10 contenido">
        <div class="slider5 col-xs-12 col-sm-12 col-lg-12">
            <?php if (isset($vehiculos1)): foreach ($vehiculos1 as $valve1):
                    ?>
                    <div class="slide">
                        <!-- SECCION DE CONTENIDO 1-->
                        <article class="col-xs-12 col-sm-6 col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="<?= $valve1->Id_anun; ?>" onclick="postcomment(<?= $valve1->Id_anun; ?>)" title="<?= $valve1->Anuncio; ?>" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php
                                        $img = $valve1->archivo;
                                        echo base_url() . 'img/cargas/' . $img;
                                        ?>" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="<?= $valve1->Anuncio; ?>"><?= $valve1->Anuncio; ?><br>$<?= $valve1->precio; ?></a></h4>
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

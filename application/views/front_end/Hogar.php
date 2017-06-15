<div class="container col-xs-12 col-sm-10 col-lg-10 contenido">      
    <img src="<?= base_url() ?>img/headhogar.jpg" style="width: 100%;"> 
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

<div class="col-xs-12 col-sm-12 col-lg-10 contenido"><div id="listaimg1"></div>
    <!--  Contenedor Principal del Carousel items 1 -->
    <div class="col-xs-12 col-sm-12 col-lg-12">        
        <a href="#" title="ver más" data-original-title="apagado"><h4><span class="glyphicon glyphicon-star-empty"></span> Recomendados</h4></a>
        <button class="btn btn-xs btn-notify">Recibir notificaciones</button>
        <div class="slider5 col-xs-12 col-sm-12 col-lg-12">
            <?php if (isset($hogarsug)): foreach ($hogarsug as $value):
                    ?>
                    <div class="slide">
                        <!-- SECCION DE CONTENIDO 1-->
                        <article class="col-xs-12 col-sm-6 col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="<?= $value->Id_anun; ?>" onclick="postcomment(<?= $value->Id_anun; ?>)" title="<?= $value->Anuncio; ?>" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
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
        <hr>
    </div>

    <!-- Contenedor Principal del Carousel 2 items -->
    <div class="col-xs-12 col-sm-12 col-lg-12">
        <h4><span class="glyphicon glyphicon-thumbs-up"></span> Destacados</h4>
        <button class="btn btn-xs btn-notify">Recibir notificaciones</button>
        <div class="slider5 col-xs-12 col-sm-12 col-lg-12">
            <?php if (isset($hogardest)): foreach ($hogardest as $valdes):
                    ?>
                    <div class="slide">
                        <!-- SECCION DE CONTENIDO 1-->
                        <article class="col-xs-12 col-sm-6 col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="<?= $valdes->Id_anun; ?>" title="<?= $valdes->Anuncio; ?>" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php
                                        $img = $valdes->archivo;
                                        echo base_url() . 'img/cargas/' . $img;
                                        ?>" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="<?= $valdes->Anuncio; ?>"><?= $valdes->Anuncio; ?><br>$<?= $valdes->precio; ?></a></h4>
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
    <!-- Contenedor Principal del Carousel 3 items -->
    <div class="col-xs-12 col-sm-12 col-lg-12">
        <h4><span class="glyphicon glyphicon-time"></span> Recientes</h4>
        <button class="btn btn-xs btn-notify">Recibir notificaciones</button>
        <div class="slider5 col-xs-12 col-sm-12 col-lg-12">
            <?php if (isset($hogarreci)): foreach ($hogarreci as $valre):
                    ?>
                    <div class="slide">
                        <!-- SECCION DE CONTENIDO 1-->
                        <article class="col-xs-12 col-sm-6 col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="<?= $valre->Id_anun; ?>" onclick="postcomment(<?= $valre->Id_anun; ?>)" title="<?= $valre->Anuncio; ?>" class="zoom" data-toggle="modal" data-target="#myModalsocialmedia">
                                        <img src="<?php
                                        $img = $valre->archivo;
                                        echo base_url() . 'img/cargas/' . $img;
                                        ?>" alt="Nature Portfolio" />
                                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
                                    </a>
                                </div>
                                <div class="panel-footer">
                                    <h4><a href="#" title="<?= $valre->Anuncio; ?>"><?= $valre->Anuncio; ?><br>$<?= $valre->precio; ?></a></h4>
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

    <!-- Contenedor Principal del Carousel 4 items -->
    <div class="col-xs-12 col-sm-12 col-lg-12">        
        <a href="#" title="ver más" data-original-title="apagado"><h4><span class="glyphicon glyphicon-car"></span> Más</h4></a>
        <button class="btn btn-xs btn-notify">Recibir notificaciones</button>
        <div class="slider5 col-xs-12 col-sm-12 col-lg-12">
            <?php if (isset($mashogar)): foreach ($mashogar as $valve):
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

                        </div>

                        <a class="img-modal-btn left"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a  class="img-modal-btn right"><i class="glyphicon glyphicon-chevron-right"></i></a>

                    </div>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <div class="col-md-4 modal-meta">
                        <div class="modal-meta-top">
                            <div id="infoanun">
                            </div>
                            <div style="overflow: auto;" id="showcomentarios">
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
                                    <li>
                                        <div class="comment-img">
                                            <img src="http://lorempixel.com/50/50/people/9">
                                        </div>
                                        <div class="comment-text">
                                            <strong><a href="">Jane Doe</a></strong>
                                            <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>
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
                                <form id="fcomentario">
                                    <input id="comment" type="text" class="form-control" name="comentario" placeholder="Escribir comentario...."/>
                                    <!--<input type="submit" value="Comentar">-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!--- FIN DE MODAL PARA CARGAR INFORMACION DEL ANUNCIO Y ANUNCIANTE -->

</div>

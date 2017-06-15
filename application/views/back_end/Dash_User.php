<script type="text/javascript">
    /* pagination */
    $.fn.pageMe = function (opts) {
        var $this = this,
                defaults = {
                    perPage: 7,
                    showPrevNext: false,
                    numbersPerPage: 1,
                    hidePageNumbers: false
                },
        settings = $.extend(defaults, opts);

        var listElement = $this;
        var perPage = settings.perPage;
        var children = listElement.children();
        var pager = $('.pagination');

        if (typeof settings.childSelector != "undefined") {
            children = listElement.find(settings.childSelector);
        }

        if (typeof settings.pagerSelector != "undefined") {
            pager = $(settings.pagerSelector);
        }

        var numItems = children.size();
        var numPages = Math.ceil(numItems / perPage);

        pager.data("curr", 0);

        if (settings.showPrevNext) {
            $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
        }

        var curr = 0;
        while (numPages > curr && (settings.hidePageNumbers == false)) {
            $('<li><a href="#" class="page_link">' + (curr + 1) + '</a></li>').appendTo(pager);
            curr++;
        }

        if (settings.numbersPerPage > 1) {
            $('.page_link').hide();
            $('.page_link').slice(pager.data("curr"), settings.numbersPerPage).show();
        }

        if (settings.showPrevNext) {
            $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
        }

        pager.find('.page_link:first').addClass('active');
        if (numPages <= 1) {
            pager.find('.next_link').hide();
        }
        pager.children().eq(1).addClass("active");

        children.hide();
        children.slice(0, perPage).show();

        pager.find('li .page_link').click(function () {
            var clickedPage = $(this).html().valueOf() - 1;
            goTo(clickedPage, perPage);
            return false;
        });
        pager.find('li .prev_link').click(function () {
            previous();
            return false;
        });
        pager.find('li .next_link').click(function () {
            next();
            return false;
        });

        function previous() {
            var goToPage = parseInt(pager.data("curr")) - 1;
            goTo(goToPage);
        }

        function next() {
            goToPage = parseInt(pager.data("curr")) + 1;
            goTo(goToPage);
        }

        function goTo(page) {
            var startAt = page * perPage,
                    endOn = startAt + perPage;

            children.css('display', 'none').slice(startAt, endOn).show();

            if (page >= 1) {
                pager.find('.prev_link').show();
            } else {
                pager.find('.prev_link').hide();
            }

            if (page < (numPages - 1)) {
                pager.find('.next_link').show();
            } else {
                pager.find('.next_link').hide();
            }

            pager.data("curr", page);

            if (settings.numbersPerPage > 1) {
                $('.page_link').hide();
                $('.page_link').slice(page, settings.numbersPerPage + page).show();
            }

            pager.children().removeClass("active");
            pager.children().eq(page + 1).addClass("active");
        }
    };

    $('#items').pageMe({pagerSelector: '#myPager', childSelector: 'tr', showPrevNext: true, hidePageNumbers: false, perPage: 5});
    /****/
</script>
<hr class="">
<div class="container target">
    <div class="row">
        <div class="col-sm-3">
            <a href="#" class="pull-right">
                <img title="profile image" class="img img-responsive" src="<?php echo base_url() ?>img/mariachi.jpg">
            </a>
        </div>
        <div class="col-sm-9">
            <h1 class="">Mariachi "Perla Mexicana"</h1>
            <button type="button" class="btn btn-success">Actualizar Información</button>  
            <button type="button" class="btn btn-info">Me gusta </button>
            <br>
        </div>
        <div class="col-sm-9" contenteditable="false" style="">
            <div class="panel panel-default">
                <div class="panel-heading">Mariachi "Perla Mexicana"</div>
                <div class="panel-body"> La música mexicana, interpretada por el Mariachi "Perla Mexicana", 
                    siempre portando el traje de charro con mucho orgullo, llevando la alegría de nuestro Folclor a todo México y el Mundo entero..

                </div>
            </div>

            <div id="push"></div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Perfil</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Registrados</strong></span> 2-13-2014</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Ultima conexión</strong></span> 28-09-2016</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Nombre</strong></span> Mariachi "Perla Mexicana"
                    Doe</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Categoria: </strong></span> Fiestas / Eventos

                </li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading colorheading">Ubicación

                </div>
                <div class="panel-body"><i style="color:green" class="fa fa-check-square"></i> Estado de México

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i>

                </div>
                <div class="panel-body"><a href="#" class="">MariachiPerlaMexicana.com</a>

                </div>
            </div>

            <ul class="list-group">
                <li class="list-group-item text-muted">Actividad reciente <i class="fa fa-dashboard fa-1x"></i>

                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Compartidos</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Me gusta</strong></span> 213</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Anuncios</strong></span> 37</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Puntuación</strong></span> 78%</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Premios / Reconocimietos</div>
                <div class="panel-body">	<i class="fa fa-facebook fa-2x"></i>  <i class="fa fa-github fa-2x"></i> 
                    <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i>  <i class="fa fa-google-plus fa-2x"></i>

                </div>
            </div>
        </div>
        <!--/col-3-->

        <!-- col-9-->
        <div class="col-lg-9">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Perfil</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Anuncia</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Fotos / Videos</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Premios / Reconocimientos</a></li>
                <li role="presentation"><a href="#consulta" aria-controls="profile" role="tab" data-toggle="tab">Consultas</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="panel panel-default target">
                        <div class="panel-heading" contenteditable="false">Anuncios</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="300x200" src="<?php echo base_url() ?>img/mariachi.jpg">
                                        <div class="caption">
                                            <h3>
                                                Promoción día de las madres
                                            </h3>
                                            <p>
                                                Descuento del 10% en contratación no mayor a 3 hrs.
                                            </p>
                                            <p>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="300x200" src="<?php echo base_url() ?>img/mariachi.jpg">
                                        <div class="caption">
                                            <h3>
                                                Mes de la patría
                                            </h3>
                                            <p>
                                                Celebra junto a nosotros en este mes festivo.
                                            </p>
                                            <p>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="300x200" src="<?php echo base_url() ?>img/mariachi.jpg">
                                        <div class="caption">
                                            <h3>
                                                Contrataciones
                                            </h3>
                                            <p>
                                                Somo de los mejores mariachis en el Estado de México.
                                            </p>
                                            <p>

                                            </p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">

                    <div class="col-xs-12 col-sm-10 col-lg-10 alert-success">
                        <center><h1>Publica tu anuncio Gratis</h1></center>
                    </div>
                    <?php
//imprime el arreglo de los registros de la tabla
//         print_r($selEstado);
//         print_r($selMunicipio);
                    ?>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $("#estado").change(function () {
                                $("#estado option:selected").each(function () {
                                    idestado = $('#estado').val();
                                    $.post("http://localhost:8180/anunciatec2/ciudades/llena_municipios", {
                                        idestado: idestado
                                    }, function (data) {
                                        $("#municipios").html(data);
                                    });
                                });
                            });
                        });
                    </script>                    
                    <div class="col-xs-12 col-sm-10 col-lg-10">
                        <br>
                        <form method="POST" action="<?php echo base_url('Control_Anuncio/insert'); ?>" class="" >
                            <div class="form-group">
                                <label for="categoria">¿Qué deseas anunciar?</label>
                                <input class="form-control" id="categoria" type="text" placeholder="categoria" name="categoria">
                            </div>
                            <div class="form-group">
                                <label for="subcategoria">Puedes elegir una categoría específica:</label>
                                <input class="form-control" id="subcategoria" type="text" placeholder="subcategoria" name="subcategoria">
                            </div>
                            <!-- Control supported 
                                text, password, datetime, datetime-local, date, month, time, week, number, email, url, search
                                ,tel, color
                            -->                
                            <div class="form-group">
                                <label for="option">Lugar donde quieres anunciar:</label>
                                <select class="form-control" name="estado" id="estado">
                                    <option value="#">Seleccióna un estado...</option>
                                    <?php foreach ($selEstado as $value): ?>
                                        <option value="<?php echo $value->Id_est; ?>"> 
                                            <?php echo $value->Nom_est; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">                    
                                <select class="form-control" name="municipio" id="municipios">
                                    <option value="">Seleccióna un municipio...</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="titulo">Coloca un titulo a tu anuncio:</label>
                                <input class="form-control" id="titulo" type="text" placeholder="Titulo del anuncio" name="titulo">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea class="form-control" id="descripcion" type="text" placeholder="Descripción del anuncio" name="descripcion"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="archivo"> Imágenes</label>
                                <input type="file" id="archivo">
                                <p class="help-block">Maximo 50MB</p>
                            </div>                
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input class="form-control" id="nombre" type="text" placeholder="Nombre" name="nombre">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input class="form-control" id="telefono" placeholder="Teléfono de contacto" name="telefono">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input class="form-control" id="email" placeholder="Email de contacto" name="email">
                            </div>
                            <button type="submit" class="btn btn-success">ANUNCIAR</button>
                        </form><br>
                    </div>
                </div>


                <div role="tabpanel" class="tab-pane" id="messages">
                    <div class="panel panel-default">
                        <div class="panel-heading">Fotos / Videos</div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <div class="thumbnail">
                                    <img alt="300x200" src="<?php echo base_url() ?>img/mariachi.jpg">
                                    <!--<div class="caption">
                                        <h3>
                                            Promoción día de las madres
                                        </h3>
                                        <p>
                                            Descuento del 10% en contratación no mayor a 3 hrs.
                                        </p>
                                        <p>
            
                                        </p>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="settings">
                    <div class="container alert-success">
                        <h2>Agrega tus reconocimientos y/o premios obtenidos</h2>
                    </div>
                </div>


                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#busca").submit(function () {
                            //$("#estado").submit(function () {
                                criterio = $('#criterio').val();
                                $.post("http://localhost:8080/Control_Categorias/cargainformacion", {
                                    criterio: criterio
                                }, function (data) {
                                    $("#resultado").html(data);
                                });
                            //});
                        });
                    });
                </script>
                <div role="tabpanel" class="tab-pane" id="consulta">
                    <form action ='<?php echo base_url('Control_Categorias/cargainformacion') ?>' method='POST'>
                        Teclea criterio <input type ='text' name = 'criterio' id="criterio">
                        <br>
                        <input type ='submit' value ='Buscar' id="busca">
                        <br>
                    </form>
                </div>
                <div id="resultado"></div>

            </div>
        </div>
        <script src="/plugins/bootstrap-select.min.js"></script>
        <script src="/codemirror/jquery.codemirror.js"></script>
        <script src="/beautifier.js"></script>
        <script>
                        (function (i, s, o, g, r, a, m) {
                            i['GoogleAnalyticsObject'] = r;
                            i[r] = i[r] || function () {
                                (i[r].q = i[r].q || []).push(arguments)
                            }, i[r].l = 1 * new Date();
                            a = s.createElement(o),
                                    m = s.getElementsByTagName(o)[0];
                            a.async = 1;
                            a.src = g;
                            m.parentNode.insertBefore(a, m)
                        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                        ga('create', 'UA-40413119-1', 'bootply.com');
                        ga('send', 'pageview');
        </script>
        <script>
            jQuery.fn.shake = function (intShakes, intDistance, intDuration, foreColor) {
                this.each(function () {
                    if (foreColor && foreColor != "null") {
                        $(this).css("color", foreColor);
                    }
                    $(this).css("position", "relative");
                    for (var x = 1; x <= intShakes; x++) {
                        $(this).animate({left: (intDistance * -1)}, (((intDuration / intShakes) / 4)))
                                .animate({left: intDistance}, ((intDuration / intShakes) / 2))
                                .animate({left: 0}, (((intDuration / intShakes) / 4)));
                        $(this).css("color", "");
                    }
                });
                return this;
            };
        </script>
        <script>
            $(document).ready(function () {

                $('.tw-btn').fadeIn(3000);
                $('.alert').delay(5000).fadeOut(1500);

                $('#btnLogin').click(function () {
                    $(this).text("...");
                    $.ajax({
                        url: "/loginajax",
                        type: "post",
                        data: $('#formLogin').serialize(),
                        success: function (data) {
                            //console.log('data:'+data);
                            if (data.status == 1 && data.user) { //logged in
                                $('#menuLogin').hide();
                                $('#lblUsername').text(data.user.username);
                                $('#menuUser').show();
                                /*
                                 $('#completeLoginModal').modal('show');
                                 $('#btnYes').click(function() {
                                 window.location.href="/";
                                 });
                                 */
                            } else {
                                $('#btnLogin').text("Login");
                                prependAlert("#spacer", data.error);
                                $('#btnLogin').shake(4, 6, 700, '#CC2222');
                                $('#username').focus();
                            }
                        },
                        error: function (e) {
                            $('#btnLogin').text("Login");
                            console.log('error:' + JSON.stringify(e));
                        }
                    });
                });
                $('#btnRegister').click(function () {
                    $(this).text("Wait..");
                    $.ajax({
                        url: "/signup?format=json",
                        type: "post",
                        data: $('#formRegister').serialize(),
                        success: function (data) {
                            console.log('data:' + JSON.stringify(data));
                            if (data.status == 1) {
                                $('#btnRegister').attr("disabled", "disabled");
                                $('#formRegister').text('Thanks. You can now login using the Login form.');
                            } else {
                                prependAlert("#spacer", data.error);
                                $('#btnRegister').shake(4, 6, 700, '#CC2222');
                                $('#btnRegister').text("Sign Up");
                                $('#inputEmail').focus();
                            }
                        },
                        error: function (e) {
                            $('#btnRegister').text("Sign Up");
                            console.log('error:' + e);
                        }
                    });
                });

                $('.loginFirst').click(function () {
                    $('#navLogin').trigger('click');
                    return false;
                });

                $('#btnForgotPassword').on('click', function () {
                    $.ajax({
                        url: "/resetPassword",
                        type: "post",
                        data: $('#formForgotPassword').serializeObject(),
                        success: function (data) {
                            if (data.status == 1) {
                                prependAlert("#spacer", data.msg);
                                return true;
                            } else {
                                prependAlert("#spacer", "Your password could not be reset.");
                                return false;
                            }
                        },
                        error: function (e) {
                            console.log('error:' + e);
                        }
                    });
                });

                $('#btnContact').click(function () {

                    $.ajax({
                        url: "/contact",
                        type: "post",
                        data: $('#formContact').serializeObject(),
                        success: function (data) {
                            if (data.status == 1) {
                                prependAlert("#spacer", "Thanks. We got your message and will get back to you shortly.");
                                $('#contactModal').modal('hide');
                                return true;
                            } else {
                                prependAlert("#spacer", data.error);
                                return false;
                            }
                        },
                        error: function (e) {
                            console.log('error:' + e);
                        }
                    });
                    return false;
                });

                /*
                 $('.nav .dropdown-menu input').on('click touchstart',function(e) {
                 e.stopPropagation();
                 });
                 */





            });
            $.fn.serializeObject = function ()
            {
                var o = {};
                var a = this.serializeArray();
                $.each(a, function () {
                    if (o[this.name] !== undefined) {
                        if (!o[this.name].push) {
                            o[this.name] = [o[this.name]];
                        }
                        o[this.name].push(this.value || '');
                    } else {
                        o[this.name] = this.value || '';
                    }
                });
                return o;
            };
            var prependAlert = function (appendSelector, msg) {
                $(appendSelector).after('<div class="alert alert-info alert-block affix" id="msgBox" style="z-index:1300;margin:14px!important;">' + msg + '</div>');
                $('.alert').delay(3500).fadeOut(1000);
            }
        </script>
        <!-- Quantcast Tag -->
        <script type="text/javascript">
            var _qevents = _qevents || [];

            (function () {
                var elem = document.createElement('script');
                elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
                elem.async = true;
                elem.type = "text/javascript";
                var scpt = document.getElementsByTagName('script')[0];
                scpt.parentNode.insertBefore(elem, scpt);
            })();

            _qevents.push({
                qacct: "p-0cXb7ATGU9nz5"
            });
        </script>
        <noscript>
        &amp;amp;amp;amp;amp;amp;amp;lt;div style="display:none;"&amp;amp;amp;amp;amp;amp;amp;gt;
        &amp;amp;amp;amp;amp;amp;amp;lt;img src="//pixel.quantserve.com/pixel/p-0cXb7ATGU9nz5.gif" border="0" height="1" width="1" alt="Quantcast"/&amp;amp;amp;amp;amp;amp;amp;gt;
        &amp;amp;amp;amp;amp;amp;amp;lt;/div&amp;amp;amp;amp;amp;amp;amp;gt;
        </noscript>
        <!-- End Quantcast tag -->
        <div id="completeLoginModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                <h3>Do you want to proceed?</h3>
            </div>
            <div class="modal-body">
                <p>This page must be refreshed to complete your login.</p>
                <p>You will lose any unsaved work once the page is refreshed.</p>
                <br><br>
                <p>Click "No" to cancel the login process.</p>
                <p>Click "Yes" to continue...</p>
            </div>
            <div class="modal-footer">
                <a href="#" id="btnYes" class="btn danger">Yes, complete login</a>
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
            </div>
        </div>
        <div id="forgotPasswordModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                <h3>Password Lookup</h3>
            </div>
            <div class="modal-body">
                <form class="form form-horizontal" id="formForgotPassword">    
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input name="_csrf" id="token" type="hidden" value="CkMEALL0JBMf5KSrOvu9izzMXCXtFQ/Hs6QUY=">
                            <input type="email" name="email" id="inputEmail" placeholder="you@youremail.com" required="">
                            <span class="help-block"><small>Enter the email address you used to sign-up.</small></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer pull-center">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a> 	
                <a href="#" data-dismiss="modal" id="btnForgotPassword" class="btn btn-success">Reset Password</a>
            </div>

        </div>
        <div id="upgradeModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                <h4>Would you like to upgrade?</h4>
            </div>
            <div class="modal-body">
                <p class="text-center"><strong></strong></p>
                <h1 class="text-center">$4<small>/mo</small></h1>
                <p class="text-center"><small>Unlimited plys. Unlimited downloads. No Ads.</small></p>
                <p class="text-center"><img src="/assets/i_visa.png" width="50" alt="visa"> <img src="/assets/i_mc.png" width="50" alt="mastercard"> <img src="/assets/i_amex.png" width="50" alt="amex"> <img src="/assets/i_discover.png" width="50" alt="discover"> <img src="/assets/i_paypal.png" width="50" alt="paypal"></p>
            </div>
            <div class="modal-footer pull-center">
                <a href="/upgrade" class="btn btn-block btn-huge btn-success"><strong>Upgrade Now</strong></a>
                <a href="#" data-dismiss="modal" class="btn btn-block btn-huge">No Thanks, Maybe Later</a>
            </div>
        </div>
        <div id="contactModal" class="modal hide">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                <h3>Contact Us</h3>
                <p>suggestions, questions or feedback</p>
            </div>
            <div class="modal-body">
                <form class="form form-horizontal" id="formContact">
                    <input name="_csrf" id="token" type="hidden" value="CkMEALL0JBMf5KSrOvu9izzMXCXtFQ/Hs6QUY=">
                    <div class="control-group">
                        <label class="control-label" for="inputSender">Name</label>
                        <div class="controls">
                            <input type="text" name="sender" id="inputSender" class="input-large" placeholder="Your name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputMessage">Message</label>
                        <div class="controls">
                            <textarea name="notes" rows="5" id="inputMessage" class="input-large" placeholder="Type your message here"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                            <input type="text" name="email" id="inputEmail" class="input-large" placeholder="you@youremail.com (for reply)" required="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer pull-center">
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn">Cancel</a>     
                <a href="#" data-dismiss="modal" aria-hidden="true" id="btnContact" role="button" class="btn btn-success">Send</a>
            </div>
        </div>
    </div>



    <script src="/plugins/bootstrap-pager.js"></script>
</div>
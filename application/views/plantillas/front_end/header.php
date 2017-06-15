<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>      
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdecEtqO33RJcSOjUHclXCjq1zQPMrOXw&callback=initMap"
  type="text/javascript"></script>
   
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/ico.ico">
        <title>Anunciate</title>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <!--<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- HOJAS DE ESTILO  BOTSTRAP-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" >
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css" >

        <!-- HOJA DE ESTILO DISEÑADA-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilos.css" >

        <!-- ARCHIVOS JS JQUERY Y BOOTSTRAP -->
        <script src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>js/login.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

        <!-- ARCHIVOS JS JQUERY Y BOOTSTRAP VALIDACIONES-->
        <script src="<?= base_url(); ?>js/bootstrapValidator.min.js"></script>
        <script src="<?= base_url(); ?>js/form-validation.js"></script>

        <!-- bxSlider Javascript file -->
        <script src="<?php echo base_url(); ?>assets/jquerybxslider/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="<?php echo base_url(); ?>assets/jquerybxslider/jquery.bxslider.css" rel="stylesheet" type="text/css"/>
        <!--<script src="//rawgithub.com/ashleydw/lightbox/master/dist/ekko-lightbox.js"></script>-->   

        <!--LIBRERIAS PARA CARGAR LAS IMAGENES EN LA SECCIÓN DE ANUNCIOS-->
        <!-- blueimp Gallery styles -->
        <!--<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">-->
        <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
        <!--        <link rel="stylesheet" href="?php echo base_url(); ?>css/jquery.fileupload.css">
                <link rel="stylesheet" href="?php echo base_url(); ?>css/jquery.fileupload-ui.css">-->
        <!-- CSS adjustments for browsers with JavaScript disabled -->
        <!--        <noscript><link rel="stylesheet" href="?php echo base_url(); ?>css/jquery.fileupload-noscript.css"></noscript>
                <noscript><link rel="stylesheet" href="?php echo base_url(); ?>css/jquery.fileupload-ui-noscript.css"></noscript>-->

        <!-- LIBRERIAS SWET ALERT -->

        <!-- This is what you need -->
        <script src="<?php echo base_url(); ?>assets/sweetalert/dist/sweetalert.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sweetalert/dist/sweetalert.css">
        <!--.......................-->

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
            ga('create', 'UA-42119746-3', 'auto');
            ga('send', 'pageview');
        </script>
        
        
        <style type="text/css">
            #listaEmpleados table tr td {
                padding-left: 5px;
                padding-right: 0px;
            }
            
           
        </style>
    </head>
    <body onload="load()">
        <!--<div class="container">-->
        <!--?php if ($this->tank_auth->get_username()): ?>
            <header class="hidden"><!-- style="background: #f2f2f2" -->
                <!--div class="row" style="background-image: url('//<?php echo base_url(); ?>img/baner6.jpg');">
                    <!-- Header --
                    <div class="col-lg-3 col-md-3 col-sm-3 visible-md visible-lg visible-sm ">
                        <a href="//<?= base_url() ?>Control_Usuario">
                            <img src="//<?php echo base_url(); ?>img/logotipo7c.png" alt="" style="width: 345px; height: 135px;">
                        </a>
                    </div>
                    <div class="col-lg-3 col-lg-offset-6 col-md-3 col-md-offset-6 col-sm-3 col-sm-offset-6">
                        <!-- Button trigger modal --
                        <a href="//<?php echo base_url(); ?>auth/register/">
                            <button type='button' class='btn btn-sm btn-block registra'>
                                <span class='glyphicon glyphicon-plus-sign'></span>
                                Registrate
                            </button>
                        </a>
                        <a href="#" class="publicadd">
                            <button class="btn btn-md btn-block btn-warning">
                                <span class="glyphicon glyphicon-bullhorn"></span>
                                Publica tu anuncio
                            </button>
                        </a>
                    </div>
                </div>            
            </header>
        ?php else: ?--
            <header><!-- style="background: #f2f2f2" --
                <div class="row" style="background-image: url('<?php echo base_url(); ?>img/baner6.jpg');">
                    <!-- Header --
                    <div class="col-lg-3 col-md-3 col-sm-3 visible-md visible-lg visible-sm ">
                        <a href="<?= base_url() ?>Control_Usuario">
                            <img src="<?php echo base_url(); ?>img/logotipo7c.png" alt="" style="width: 345px; height: 135px;">
                        </a>
                    </div>
                    <div class="col-lg-3 col-lg-offset-6 col-md-3 col-md-offset-6 col-sm-3 col-sm-offset-6">
                        <!-- Button trigger modal --
                        <a href="<?php echo base_url(); ?>auth/register/">
                            <button type='button' class='btn btn-sm btn-block registra'>
                                <span class='glyphicon glyphicon-plus-sign'></span>
                                Registrate
                            </button>
                        </a>
                        <a href="#" class="publicadd">
                            <button class="btn btn-md btn-block btn-warning">
                                <span class="glyphicon glyphicon-bullhorn"></span>
                                Publica tu anuncio
                            </button>
                        </a>
                    </div>
                </div>            
            </header>
        ?php endif; ?-->
        <!--</div>-->

        <!-- INICIO NAVBAR -->

        <!-- SCRIPT NAVBAR -->
        <script type="text/javascript">
            $(document).ready(function () {
                var altura = $('.menu').offset().top;

                $(window).on('scroll', function () {
                    if ($(window).scrollTop() > altura) {
                        $('.menu').addClass('menu-fixed');
                        $('.imglogo').fadeIn();
                    } else {
                        $('.menu').removeClass('menu-fixed');
                        $('.imglogo').fadeOut();
                    }
                    var altura2 = altura;
                    $(window).on('scroll', function () {
                        if ($(window).scrollTop() > altura2) {
                            $('.sidemenu').addClass('sidemenu-fixed');
                        } else {
                            $('.sidemenu').removeClass('sidemenu-fixed');
                        }
                    });
                    $(window).on('scroll', function () {
                        if ($(window).scrollTop() > altura2) {
                            $('.contenido').addClass('col-lg-offset-2 col-md-offset-2');
                        } else {
                            $('.contenido').removeClass('col-lg-offset-2 col-md-offset-2');
                        }
                    });
                });
            });
        </script>
        <nav class="navbar navbar-default menu" style="border-radius:0px">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div>
                        <a href="<?= base_url() ?>Control_Usuario" class="navbar-brand">                        
                            <!--Anunciate-->
                            <img alt="Brand" src="<?php echo base_url(); ?>img/logotipo-nombre.png" style="width: 200px; height: 43px; margin-top: -7%;">
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbar-1">
                    <!--<ul class="nav navbar-nav">
                        <li><a href="#">Item #1</a></li>
                        <li class="active"><a href="#">Item #2</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Dropdown <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="">Item #1</a></li>
                                <li><a href="">Item #2</a></li>
                                <li class="divider"></li>
                                <li><a href="">Item #4</a></li>
                            </ul>
                        </li>                                                              
                    </ul>-->
                    <!--a href="?= base_url(); ?>Control_Usuario/login" style="color:white; text-decoration:none;">
                        <button class="btn btn-md entra navbar-btn">
                            
                                Inicia sesión 
                                <span class="glyphicon glyphicon-log-in"></span>
                            
                        </button>
                    </a-->

                    <?php if ($this->tank_auth->get_username()): ?>
                        <a href="<?php echo base_url('Control_Dashuser'); ?>" class="btn btn-md entra navbar-btn">

                            <span class="glyphicon glyphicon-user"></span> <?php $username = $this->tank_auth->get_username();
                    echo $username; ?>

                        </a>

<?php else: ?>
                        <a href="<?= base_url(); ?>Control_Usuario/login" style="color:white; text-decoration:none;">
                            <button class="btn btn-md entra navbar-btn">

                                Inicia sesión 
                                <span class="glyphicon glyphicon-log-in"></span>

                            </button>
                        </a>
<?php endif; ?>

                    <!--                    
                                            <a href="?php echo base_url('Control_Dashuser'); ?>">
                                                <button type="submit" class="btn btn-md entra navbar-btn">
                                                    <span class="glyphicon glyphicon-user"></span> ?php echo $this->session->userdata('name'); ?>
                                                    <p>Email: <? echo $this->session->userdata('id'); ?> </p>
                                                </button>
                                            </a>-->

                    <form class="navbar-form navbar-right searchnav" role="search" action="<?= base_url('Control_Usuario/buscar') ?>" method="POST">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar" name="criterio">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default" style="height: 34px;"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </div>
                        </div>
                    </form>

                    <!--<ul class="nav navbar-nav navbar-right">                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Dropdown <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="">Item #1</a></li>
                                <li><a href="">Item #2</a></li>
                                <li class="divider"></li>
                                <li><a href="">Item #4</a></li>
                            </ul>
                        </li>
                    </ul>-->

                    <!-- Modal -->
                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <!--<h3 class="modal-title" id="myModalLabel">Registro</h3>-->
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-1">
                                                <div class="account-box">
                                                    <div class="logo ">
                                                        <img src="<?php echo base_url(); ?>img/logologin.png" alt="" class="logo"/>
                                                    </div>
                                                    <form class="form-signin"  method="POST" id="login">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Email"  name="email" required  />
                                                        </div>
                                                        <div id="mail" class="alert-danger" style="display:none;">Correo incorrecto</div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" placeholder="Password" name="password" required />
                                                        </div>
                                                        <div id="pass" class="error" style="background-image: url('<?php echo base_url(); ?>img/error.png');  "><b>Su usuario o contraseña es incorrecto</b></div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="sesionopen" name="sesionopen" /> Mantener sesión iniciada                                                          
                                                            </label>
                                                        </div>
                                                        <button class="btn btn-lg btn-block purple-bg" type="submit">
                                                            Iniciar sesión
                                                        </button>

                                                    </form>

                                                    <a class="forgotLnk" href="#">No puedo acceder a mi cuenta</a>
                                                    <div class="or-box">
                                                        <span class="or">ó</span>
                                                        <div class="row">
                                                            <div class="col-md-6 row-block">
                                                                <a href="#" class="btn btn-facebook btn-block">Facebook</a>
                                                            </div>
                                                            <div class="col-md-6 row-block">
                                                                <a href="#" class="btn btn-google btn-block">Google</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--<div class="or-box row-block">
                                                        <div class="row">
                                                            <div class="col-md-12 row-block">
                                                                <a href="http://www.jquery2dotnet.com" class="btn btn-primary btn-block">Create New Account</a>
                                                            </div>
                                                        </div>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>

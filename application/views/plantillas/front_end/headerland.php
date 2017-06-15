<!DOCTYPE HTML>
<html>
    <head>
        <title>anunciate!</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href="<?= base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/component.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script src="<?= base_url(); ?>js/modernizr.custom.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script src="<?= base_url(); ?>js/jquery.cbpFWSlider.min.js"></script>
        
        
        <!-- bxSlider Javascript file -->
        <script src="<?php echo base_url(); ?>assets/jquerybxslider/jquery.bxslider.min.js"></script>
        <!-- bxSlider CSS file -->
        <link href="<?php echo base_url(); ?>assets/jquerybxslider/jquery.bxslider.css" rel="stylesheet" type="text/css"/>
        <script>
            $(function () {
                /*
                 - how to call the plugin:
                 $( selector ).cbpFWSlider( [options] );
                 - options:
                 {
                 // default transition speed (ms)
                 speed : 500,
                 // default transition easing
                 easing : 'ease'
                 }
                 - destroy:
                 $( selector ).cbpFWSlider( 'destroy' );
                 */

//                $('#cbp-fwslider').cbpFWSlider();
                
                $('.bxslider').bxSlider({
                      mode: 'fade',
                        auto: true,
                });

                
                  $(".bxsliderland .bx-wrapper .bx-controls-direction a").css({"margin-left": "0px", "margin-right": "0px"});
                

                $('.bxsliderland').bxSlider({
                      mode: 'fade',
                        auto: true,
                });

                $('.bxslidera').bxSlider({
                    mode: 'fade',
                    auto: true,
                    adaptiveHeight: true,
                });

            });
        </script>
    </head>
    <body>
        <!---header-->
        <div class="header">
            <div class="wrap">
                <div class="logo">
                    <a href="<?= base_url(); ?>Control_Usuario/landing">
                        <img src="<?= base_url(); ?>images/logotipo2.png" alt=""/>
                    </a>
                </div>
                <div class="signin">
                    <ul>
                        <li><a href="<?= base_url(); ?>Control_Usuario/login">Iniciar sesión</a></li>
                        <li class="a"><h6>o</h6></li>
                        <li class="b"><a href="<?php echo base_url(); ?>auth/register/">Registrarse</a></li>
                        <div class="clear"> </div>	
                    </ul>
                </div>
                <div class="clear"> </div>	
            </div>
        </div>
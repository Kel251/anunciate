<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/ico.ico">
        <title>Anunciate!</title>          

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <script src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script>//
//            var resizefunc = [];
//        </script>
        <!--<script src="?php echo base_url(); ?js/login.js"></script>-->

        <!--<script src="?php echo base_url(); ?>js/bootstrap.min.js"></script>-->

        <!-- Base Css Files -->
        <link href="<?php echo base_url() ?>assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" /> 
        <link href="<?php echo base_url() ?>assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" /> 
        <link href="<?php echo base_url() ?>assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="<?php echo base_url() ?>assets/libs/prettify/github.css" rel="stylesheet" />

        <!-- Extra CSS Libraries Start -->
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- Extra CSS Libraries End -->
        <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url() ?>assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() ?>assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() ?>assets/img/apple-touch-icon-152x152.png" />        

        <!--         Extra CSS Libraries Start 
                <link href="?php echo base_url() ?>assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
                <link href="?php echo base_url() ?>assets/libs/summernote/summernote.css" rel="stylesheet" type="text/css" />-->

        <!-- HOJA DE ESTILO DISEÑADA-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/estilos.css" >
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            function loadLocation() {
                //inicializamos la funcion y definimos  el tiempo maximo ,las funciones de error y exito.
                navigator.geolocation.getCurrentPosition(viewMap, ViewError, {timeout: 1000});
            }

//Funcion de exito
            function viewMap(position) {
                var lon = position.coords.longitude;	//guardamos la longitud
                var lat = position.coords.latitude;		//guardamos la latitud

                var link = "http://maps.google.com/?ll=" + lat + "," + lon + "&z=14";
                document.getElementById("long").innerHTML = "Longitud: " + lon;
                document.getElementById("latitud").innerHTML = "Latitud: " + lat;
                document.getElementById("link").href = link;
            }

            function ViewError(error) {
                alert(error.code);
            }
        </script>

        <style type="text/css">
            #listaEmpleados table tr td {
                padding-left: 5px;
                padding-right: 0px;
            }
        </style>

    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
        <!-- Modal Task Progress -->	
        <div class="md-modal md-3d-flip-vertical" id="task-progress">
            <div class="md-content">
                <h3><strong>Task Progress</strong> Information</h3>
                <div>
                    <p>CLEANING BUGS</p>
                    <div class="progress progress-xs for-modal">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80&#37; Complete</span>
                        </div>
                    </div>
                    <p>POSTING SOME STUFF</p>
                    <div class="progress progress-xs for-modal">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                            <span class="sr-only">65&#37; Complete</span>
                        </div>
                    </div>
                    <p>BACKUP DATA FROM SERVER</p>
                    <div class="progress progress-xs for-modal">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                            <span class="sr-only">95&#37; Complete</span>
                        </div>
                    </div>
                    <p>RE-DESIGNING WEB APPLICATION</p>
                    <div class="progress progress-xs for-modal">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            <span class="sr-only">100&#37; Complete</span>
                        </div>
                    </div>
                    <p class="text-center">
                        <button class="btn btn-danger btn-sm md-close">Close</button>
                    </p>
                </div>
            </div>
        </div>

        <!-- Modal Logout -->
        <div class="md-modal md-just-me" id="logout-modal">
            <div class="md-content">
                <h3><strong>Logout</strong> Confirmation</h3>
                <div>
                    <p class="text-center">Are you sure want to logout from this awesome system?</p>
                    <p class="text-center">
                        <button class="btn btn-danger md-close">Nope!</button>
                        <a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
                    </p>
                </div>
            </div>
        </div>        <!-- Modal End -->	
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <div class="topbar-left">
                    <div class="logo">
                        <h1><a href="<?php echo base_url('Control_Usuario'); ?>"><img src="<?php echo base_url(); ?>img/logo_nombre.png" style="height:75%;" alt="Logo"></a></h1>
                    </div>
                    <button class="button-menu-mobile open-left">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-collapse2">
                            <ul class="nav navbar-nav hidden-xs">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                                    <div class="dropdown-menu grid-dropdown">
                                        <div class="row stacked">
                                            <div class="col-xs-4">
                                                <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notes</a>
                                            </div>
                                            <div class="col-xs-4">
                                                <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i>Todo List</a>
                                            </div>
                                            <div class="col-xs-4">
                                                <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculator</a>
                                            </div>
                                        </div>
                                        <div class="row stacked">
                                            <div class="col-xs-4">
                                                <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i>Weather</a>
                                            </div>
                                            <div class="col-xs-4">
                                                <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i>Calendar</a>
                                            </div>
                                            <div class="col-xs-4">
                                                <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i>Stocks</a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </li>
                                <!--<li class="language_bar dropdown hidden-xs">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">English (US) <i class="fa fa-caret-down"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">German</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Italian</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </li>-->
                            </ul>
                            <ul class="nav navbar-nav navbar-right top-navbar">
                                <li class="dropdown iconify hide-phone">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">4</span></a>
                                    <ul class="dropdown-menu dropdown-message">
                                        <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>
                                        <li class="unread">
                                            <a href="#">
                                                <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                    <br /><i>2 minutes ago</i>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="unread">
                                            <a href="#">
                                                <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Fappening&#34;</strong>
                                                    <br /><i>8 minutes ago</i>
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p><strong>John Malkovich</strong> Added 3 products
                                                    <br /><i>3 hours ago</i>
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                    <br /><i>12 hours ago</i>
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p><strong>Johnny Depp</strong> Updated his avatar
                                                    <br /><i>Yesterday</i>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="dropdown-footer">
                                            <div class="btn-group btn-group-justified">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Refresh</a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Clear All</a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown iconify hide-phone">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">3</span></a>
                                    <ul class="dropdown-menu dropdown-message">
                                        <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New Messages</li>
                                        <li class="unread">
                                            <a href="#" class="clearfix">
                                                <img src="images/users/chat/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                                <strong>John </strong><i class="pull-right msg-time">5 minutes ago</i><br />
                                                <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                            </a>
                                        </li>
                                        <li class="unread">
                                            <a href="#" class="clearfix">
                                                <img src="images/users/chat/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                                <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />
                                                <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="images/users/chat/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                                <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />
                                                <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                            </a>
                                        </li>
                                        <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>
                                    </ul>
                                </li>
                                <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                                <li class="dropdown topbar-profile">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <?php
                                        if (isset($usuario)):
                                            foreach ($usuario as $cookval):
                                                $img = $cookval->Foto_perfil;
                                                ?>
                                                <?php if ($img == ""): ?>
                                                    <span class="rounded-image topbar-profile-image">
                                                        <img src="<?php echo base_url() ?>img/usershadow.png">
                                                    </span> <strong> <?php echo $cookval->username; ?> </strong> <!--i class="fa fa-caret-down"></i-->
                                                <?php else: ?>
                                                    <span class="rounded-image topbar-profile-image">
                                                        <img src="<?php echo base_url() . 'img/cargas/' . $img; ?>">
                                                    </span> <strong> <?php echo $cookval->username; ?> </strong> <!--i class="fa fa-caret-down"></i-->
                                                <?php
                                                endif;
                                            endforeach;
                                        endif;
                                        ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">My Profile</a></li>
                                        <li><a href="#">Change Password</a></li>
                                        <li><a href="#">Account Setting</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                                        <li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li>
                                        <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                                    </ul>
                                </li>
                                <li class="right-opener">
                                    <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
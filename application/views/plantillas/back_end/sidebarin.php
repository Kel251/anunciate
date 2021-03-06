<!-- Left Sidebar Start -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!-- Search form -->
        <form role="search" class="navbar-form">
            <div class="form-group">
                <input type="text" placeholder="Search" class="form-control">
                <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
                <a href="<?php echo base_url() ?>Control_Dashuser" class="rounded-image profile-image">
                    <?php
                    if (isset($usuario)):
                        foreach ($usuario as $cookval):
                            $img = $cookval->Foto_perfil;
                            if ($img == ""):
                                ?>
                                <img src="<?php echo base_url() ?>img/usershadow.png">
                            </a>
                        </div>
                        <div class="col-xs-8">
                            <div class="profile-text">Bienvenido <b><?php echo $cookval->username; ?></b></div>
                        <?php else: ?>
                            <img src="<?php echo base_url() . 'img/cargas/' . $img; ?>">
                            </a>
                        </div>
                        <div class="col-xs-8">
                            <div class="profile-text">Bienvenido <b><?php echo $cookval->username; ?></b></div>
                        <?php
                        endif;
                    endforeach;
                endif;
                ?>
                <div class="profile-buttons">
                    <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>
                    <a href="#connect" class="open-right"><i class="fa fa-comments"></i></a>
                    <a href="<?= base_url() ?>auth/logout" title="Salir"><i class="fa fa-power-off text-red-1"></i></a>
                </div>
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class='has_sub'><a href='<?php echo base_url('Control_Dashuser') ?>'>
                        <i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"><i class="fa fa-angle-down"></i>
                        </span></a>
                    <ul>
                        <li><a href='<?= base_url('Control_Dashuser/dashboard') ?>'><span>Dashboard v1</span></a></li><li><a href='index2.html'><span>Dashboard v2</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-feather'></i><span>UI Elements</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='alerts.html'><span>Alerts</span></a></li>
                        <li><a href='buttons.html'><span>Buttons</span></a></li>
                        <li><a href='calendar.html'><span>Calendar</span></a></li>
                        <li><a href='grid.html'><span>Grid</span></a></li>
                        <li><a href='icons.html'><span>Icons</span></a></li>
                        <li><a href='modals.html'><span>Modals</span></a></li>
                        <li><a href='nested-list.html'><span>Nested List</span></a></li>
                        <li><a href='notifications.html'><span>Notifications</span></a></li>
                        <li><a href='portlets.html'><span>Portlets</span></a></li>
                        <li><a href='progress-bars.html'><span>Progress Bars</span></a></li>
                        <li><a href='tabs-accordions.html'><span>Tabs & Accordions</span></a></li>
                        <li><a href='typography.html'><span>Typography</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='#'><i class='icon-pencil-3'></i><span>Consultas</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='<?php echo base_url('Control_Dashuser/categorias') ?>'><span>Categorías y subcategorías disponibles</span></a></li>
                        <li><a href='<?php echo base_url('Control_Dashuser/estados') ?>'><span>Estados disponibles</span></a></li>
                        <li><a href='<?php echo base_url('Control_Dashuser/municipios') ?>'><span>Municipios disponibles</span></a></li>
                        <li><a href='form-validation.html'><span>Form Validation</span></a></li>
                        <li><a href='form-uploads.html'><span>File Uploads</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-table'></i><span>Anuncios</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='<?php echo base_url('Control_Dashuser/Anunciate') ?>'><span>Anunciate</span></a></li>
                        <li><a href='<?php echo base_url('Control_Dashuser/Edita') ?>'><span>Edita tu anuncio</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-map-marker'></i><span>Maps</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='google-maps.html'><span>Google Maps</span></a></li>
                        <li><a href='vector-maps.html'><span>Vector Maps</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-envelope'></i><span>Email</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul>
                        <li><a href='inbox.html'><span>Inbox</span></a></li><li><a href='read-message.html'><span>View Email</span></a></li>
                        <li><a href='new-message.html'><span>New Message</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-chart-line'></i><span>Charts</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='sparkline-charts.html'><span>Sparkline Charts</span></a></li>
                        <li><a href='morris-charts.html'><span>Morris Charts</span></a></li>
                        <li><a href='rickshaw-charts.html'><span>Rickshaw Charts</span></a></li>
                        <li><a href='other-charts.html'><span>Other Charts</span></a></li>
                    </ul>
                </li>
                <li class='has_sub'><a href='javascript:void(0);'><i class='icon-megaphone'></i><span>Extras</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li><a href='blank.html'><span>Blank Page</span></a></li>
                        <li><a href='login.html'><span>Login</span></a></li>
                        <li><a href='register.html'><span>Register</span></a></li>
                        <li><a href='lockscreen.html'><span>Lock Screen</span></a></li>
                        <li><a href='404.html'><span>404 Error</span></a></li>
                        <li><a href='500.html'><span>500 Error</span></a></li>
                        <li><a href='profile.html' class='active'><span>User Profile</span></a></li>
                        <li><a href='invoice.html'><span>Invoice</span></a></li>
                        <li><a href='gallery.html'><span>Gallery</span></a></li>
                        <li><a href='maintenance.html'><span>Maintenance</span></a></li>
                        <li class='has_sub'><a href='javascript:void(0);'><span>3 Level menu</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li><a href='javascript:void(0);'><span>Sub Item</span></a></li>
                            </ul>
                        </li>
                        <li class='has_sub'><a href='javascript:void(0);'><span>4 Level Menu</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li class='has_sub'><a href='javascript:void(0);'><span>Sub Item - level 3</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                                    <ul>
                                        <li><a href='javascript:void(0);'><span>Sub Item - level 4</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has_sub'><a href='javascript:void(0);'><span>Submenu with icons</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                            <ul>
                                <li><a href='javascript:void(0);'><i class='fa fa-camera'></i><span>Item with icon</span></a></li>
                                <li><a href='javascript:void(0);'><i class='entypo entypo-users'></i><span>Another Item</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>                    
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="portlets">
            <div id="chat_groups" class="widget transparent nomargin">
                <h2>Chat Groups</h2>
                <div class="widget-content">
                    <ul class="list-unstyled">
                        <li><a href="javascript:;"><i class="fa fa-circle-o text-red-1"></i> Colleagues</a></li>
                        <li><a href="javascript:;"><i class="fa fa-circle-o text-blue-1"></i> Family</a></li>
                        <li><a href="javascript:;"><i class="fa fa-circle-o text-green-1"></i> Friends</a></li>
                    </ul>
                </div>
            </div>

            <div id="recent_tickets" class="widget transparent nomargin">
                <h2>Recent Tickets</h2>
                <div class="widget-content">
                    <ul class="list-unstyled">
                        <li>
                            <a href="javascript:;">My wordpress blog is broken <span>I was trying to save my page and...</span></a>
                        </li>
                        <li>
                            <a href="javascript:;">Server down, need help!<span>My server is not responding for the last...</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div><br><br><br>
    </div>
    <div class="left-footer">
        <div class="progress progress-xs">
            <div class="progress-bar bg-green-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                <span class="progress-precentage">80%</span>
            </div>

            <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
        </div>
    </div>
</div>
<!-- Left Sidebar End -->		    <!-- Right Sidebar Start -->
<div class="right side-menu">
    <ul class="nav nav-tabs nav-justified" id="right-tabs">
        <li class="active"><a href="#feed" data-toggle="tab" title="Live Feed"><i class="icon-rss-2"></i></a></li>
        <li><a href="#connect" data-toggle="tab" title="Chat"><i class="icon-chat"></i></a></li>
        <li><a href="#settings" data-toggle="tab" title="Preferences"><i class="icon-wrench"></i></a></li>
    </ul>
    <div class="clearfix"></div>
    <div class="tab-content">
        <div class="tab-pane active" id="feed">
            <div class="tab-inner slimscroller">
                <div class="search-right">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <div class="right-toolbar">
                    <a href="javascript:;" class="pull-right">Settings <i class="icon-cog"></i></a>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="panel-group" id="collapse">
                    <div class="panel panel-default">
                        <div class="panel-heading bg-orange-1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#rnotifications">
                                    <i class="icon-bell-2"></i> Notifications
                                    <span class="label bg-darkblue-1 pull-right">4</span>
                                </a>
                            </h4>
                        </div>
                        <div id="rnotifications" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled" id="notification-list">
                                    <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-video"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-users-1"></i></span> 3 Users signed up <span class="muted">16 minutes ago</span></a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-picture-1"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-hourglass-1"></i></span> Deadline for 1 project <span class="muted">12 minutes ago</span></a></li>
                                </ul>
                                <a class="btn btn-block btn-sm btn-warning">See all notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading bg-green-3">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#remails">
                                    <i class="icon-mail"></i> E-mails
                                    <span class="label bg-darkblue-1 pull-right">3</span>
                                </a>
                            </h4>
                        </div>
                        <div id="remails" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled" id="inbox-list">
                                    <li><a href="javascript:;"><span class="sender"><i class="icon-star text-yellow-2"></i> Kim Wilde</span> <span class="datetime">6 mins ago</span>
                                            <span class="title">You keep me hangin on</span>
                                            <span class="content">Where are you? I am waiting for 3 hours in the restaurant. I ate 3 hamburgers.</span>
                                        </a></li>
                                    <li><a href="javascript:;"><span class="sender">Tyler Durden</span> <span class="datetime">13 hours ago</span>
                                            <span class="title">Buy some soap from market before</span>
                                            <span class="content">We are crowded here. We need some more soap at home. Buy some before you come home.</span>
                                        </a></li>
                                    <li><a href="javascript:;"><span class="sender">John Bonomo</span> <span class="datetime">Yesterday</span>
                                            <span class="title">Late delivery</span>
                                            <span class="content">Hello, I ordered 15 box of viagra for a friend of mine but he still hasn't receive them.</span>
                                        </a></li>
                                </ul>
                                <a class="btn btn-block btn-sm btn-primary">Go to inbox</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading bg-blue-1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#rupdates">
                                    <i class="icon-signal-2"></i> Updates
                                    <span class="label bg-darkblue-1 pull-right">5</span>
                                </a>
                            </h4>
                        </div>
                        <div id="rupdates" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled" id="updates-list">
                                    <li><a href="javascript:;"><span class="icon-wrapper bg-green-1"><i class="icon-comment-1"></i></span> <b>David Guetta</b> came online <abbr title="15 seconds ago">just now</abbr>.</a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper bg-red-1"><i class="icon-user-3"></i></span> <b>Katy Perry</b> updated her profile <abbr title="4 mins ago">4 mins ago</abbr>.</a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper bg-blue-1"><i class="icon-twitter-2"></i></span> <b>4 tweets posted</b> with cronjob <abbr title="22 mins ago">22 mins ago</abbr>.</a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper bg-orange-3"><i class="icon-water"></i></span> <b>Adele</b> set fire to the rain <abbr title="43 mins ago">43 mins ago</abbr>.</a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper bg-pink-2"><i class="icon-heart-broken"></i></span> <b>Taylor Swift</b> learned that you are trouble <abbr title="3 hours ago">3 days ago</abbr>.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="connect">
            <div class="tab-inner slimscroller">
                <div class="search-right">
                    <input type="text" class="form-control" placeholder="Search">
                </div>	
                <div class="panel-group" id="collapse">
                    <div class="panel panel-default" id="chat-panel">
                        <div class="panel-heading bg-darkblue-2">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#chat-coll">
                                    <i class="icon-briefcase-1"></i> Colleagues
                                    <span class="label bg-darkblue-1 pull-right">14</span>
                                </a>
                            </h4>
                        </div>
                        <div id="chat-coll" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled" id="chat-list">
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg">Where is my mind</span></a></li>
                                    <li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images/users/chat/4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
                                    <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
                                    <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" id="chat-panel">
                        <div class="panel-heading bg-darkblue-2">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <i class="icon-heart-3"></i> Friends
                                    <span class="label bg-darkblue-1 pull-right">3</span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled" id="chat-list">
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg" title="Eminem - The Monster ft. Rihanna"><i class="icon-play"></i> Eminem - The Monster ft. Rihanna</span></a></li>
                                    <li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images/users/chat/4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
                                    <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
                                    <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane" id="settings">
            <div class="tab-inner slimscroller">
                <div class="col-sm-12">
                    <h3>Preferences</h3>
                    <div class="row">
                        <div class="col-xs-8">
                            Live data updates
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            Live feeds
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            Sync data to cloud
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            Keep activity record
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-danger ios-switch-sm" checked />
                        </div>
                    </div>
                    <h4>Other Settings</h4>
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="checkboxw"><input type="checkbox" checked> Autosave settings</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="checkboxw"><input type="checkbox"> Always online</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Right Sidebar End -->	
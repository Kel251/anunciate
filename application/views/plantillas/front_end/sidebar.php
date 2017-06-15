<!-- ASIDE NAVBAR DER -->

 <script type="text/javascript">
    $(document).ready(function () {
        $("#estado").change(function () {
            $("#estado option:selected").each(function () {
                idestado = $('#estado').val();
                $.post("<?php echo base_url(); ?>Control_Ciudades/llena_municipios", {
                    idestado: idestado
                }, function (data) {
                    $("#municipios").html(data);
                    $("#municipios").removeAttr("disabled");
                });
            });
        });
    });
</script>

<div class="row">
    //<?php
//        print_r($selEstado);
//    
    ?>
    <section>
        <div class="visible-md visible-lg col-sm-2 sidemenu col-lg-2">
            <div class="sidebar-nav">
                <div class="navbar navbar-default sidealt" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Sidebar menu</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">                            
                        <form action="<?= base_url('Control_Usuario/filtroubicacion'); ?>" method="POST">
                            <div class="form-group">
                                <br>
                                <label for="estado"> Filtrar por ubicación..</label>
                                <select class="form-control selectpicker" id="estado" name="estado">
                                    <option value="#">Selecciona un estado...</option>
                                    <?php foreach ($selEstado as $value): ?>
                                        <option value="<?php echo $value->Id_est; ?>"><?php echo $value->Nom_est; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control selectpicker show-menu-arrow" id="municipios" name="municipios" disabled>
                                    <option value="0">Selecciona un municipio...</option>
                                </select>
                            </div>
                            <center><button type="submit" class="btn btn-sm btn-warning" style="width: 70%;">Filtrar</button></center>
                        </form>
                        
                        <h4>Clacificados</h4>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo base_url() ?>Control_Usuario/Vehiculos">
                                    <img src="<?php echo base_url() ?>img/icon_auto1.png">
                                    Vehículos
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>Control_Usuario/Empleos">
                                    <img src="<?php echo base_url() ?>img/icon_empleo2.png">
                                    Empleos
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>Control_Usuario/Fiestas">
                                    <img src="<?php echo base_url() ?>img/icono_eventos.png">
                                    Fiestas / Eventos
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>Control_Usuario/Ensenanza">
                                    <img src="<?php echo base_url() ?>img/icon_enseñanza1.png">
                                    Enseñanza
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>Control_Usuario/Servicios">
                                    <img src="<?php echo base_url() ?>img/icon_servicio.png">                                             
                                    Servicios
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>Control_Usuario/Hogar">
                                    <img src="<?php echo base_url() ?>img/icon_hogar1.png">
                                    Hogar
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>Control_Usuario/Inmuebles">
                                    <img src="<?php echo base_url() ?>img/icon_inmueble.png">
                                    Inmuebles
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>Control_Usuario/Construccion">
                                    <img src="<?php echo base_url() ?>img/icon_construccion.png">
                                    Construcción / Maquinaria
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url() ?>img/icon_informatica.png">
                                    Informática / Electronicos
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url() ?>img/icono_mascota.png">
                                    Mascotas
                                </a>
                            </li>
                            <!--<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>                                        
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>-->
                            <li><a href="#">Tiendas <span class="badge">1,118</span></a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section>


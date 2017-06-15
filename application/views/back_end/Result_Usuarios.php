<div class="content-page">
    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <div class="content">
        <!-- Page Heading Start -->
        <div class="page-heading">
            <h1><i class='fa fa-check'></i> Forms</h1>
        </div>
        <!-- Page Heading End-->	

        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Busca</strong></h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <form class="form-inline" role="form" action ='<?php echo base_url('Control_Dashuser/cargainformacionusuarios') ?>' method='POST'>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                        <input type="text" class="form-control" id="criterio" name="criterio">
                    </div>
                    <!--<div class="form-group">
                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                    </div>-->
                    <!--<div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>-->
                    <button type="submit" class="btn btn-default">Buscar</button>
                    <!--<a class="btn btn-primary md-trigger" data-modal="form-modal">Form in Modal</a>-->
                </form>
            </div>
        </div>


        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Resultados</strong> </h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <h1>Estados: </h1>
                <table class="table table-striped table-bordered table-hover" >
                    <tr  class="info">

                        <th>Clave</th>
                        <th>Nickname</th>
                        <th>Email</th>
                        <th>Tipo</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Contraseña</th>
                    </tr>
                    <?php
                    foreach ($resultado as $object) {
//        $Id_anun = $object->id_anun;
                        $id_user = $object->Id_user;
//        $descripcion = $object->descripcion;
                        $nickname = $object->Nickname;
                        $email_user = $object->Email_user;
                        $tipo_user = $object->Tipo_user;
                        $nom_user = $object->Nom_user;
                        $app_user = $object->App_user;
                        $password = $object->Password;
//        $costop = $object->costo;
//        $tipop = $object->tipo;
                        echo "<tr><td>$id_user</td><td>$nickname</td><td>$email_user</td><td>$tipo_user</td><td>$nom_user</td><td>$app_user</td><td>$password</td>
 </tr>";
                    }
                    ?>
                </table>
            </div>
        </div>


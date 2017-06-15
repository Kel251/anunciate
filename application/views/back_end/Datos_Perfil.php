<script type="text/javascript">
    $(document).ready(function () {
        $("#estadoa").change(function () {
            $("#estadoa option:selected").each(function () {
                idestadoa = $('#estadoa').val();
                $.post("<?php echo base_url(); ?>Control_Ciudades/llena_municipiosa", {
                    idestadoan: idestadoa
                }, function (data) {
                    $("#municipiosa").html(data);
                    $("#municipiosa").removeAttr("disabled");
                });
            });
        });
    });
</script>
<!-- Start right content -->
<div class="content-page">
    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <div class="content">
        <!-- Page Heading Start -->
        <div class="page-heading">
            <h1>Información adicional a tu perfil</h1>
        </div>

        <!-- Page Heading End-->
        <div class="row">
            <div class="col-sm-12 portlets">
                <div class="widget">
                    <div class="widget-header transparent">
                        <h2><strong>Datos perfil</strong></h2>
                        <div class="additional-btn">
                            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                        </div>
                    </div>
                    <div class="widget-content padding">                     

                        <form role="form" id="registerForm" action="<?php echo base_url('Control_Dashuser/infoadd'); ?>" method="POST">
                            <label>Puedes establecer tu ubicación</label>
                            <?php foreach ($info as $valuecat): ?>                                

                                <div class="form-group">

                                    <label>Escoge tu estado</label>
                                    <select class="form-control" name="estado" id="estadoa">
                                        <option value="<?php echo $valuecat->idest; ?>"><?php echo $valuecat->estado; ?></option>
                                        <?php foreach ($selEstado as $value): ?>
                                            <option value="<?php $val = $value->Id_est;
                                    echo $value->Id_est;
                                            ?>" <?php echo set_select('estado', $val); ?> >
                                            <?php echo $value->Nom_est; ?>
                                            </option>
                                    <?php endforeach; ?>
                                    </select>
    <?php echo form_error('nickname'); ?>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label">Escoge tu municipio</label>                                    
                                    <select class="form-control" id="municipiosa"  name="municipio">
                                        <option value="<?php echo $valuecat->idmun; ?>"><?php echo $valuecat->municipio; ?></option>
                                        <?php foreach ($selEstado as $value): ?>
                                            <option value="<?php
                                            $val = $value->Id_est;
                                            echo $value->Id_est;
                                            ?>" <?php echo set_select('estado', $val); ?> > 
                                            <?php echo $value->Nom_est; ?>
                                            </option>
    <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Puedes establecer una categoría</label>
                                    <select class="form-control" name="categoria" id="categoria">
                                        <option value="" selected="selected">Seleccióna una categoria...</option>
                                            <?php foreach ($selCategoria as $valuecat): ?>
                                            <option value="<?php echo $valuecat->Id_cat; ?>"> 
                                            <?php echo $valuecat->Nom_cat; ?>
                                            </option>
    <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Actualiza</button>
<?php endforeach; ?>
                        </form>
                        
                    </div>
                    
                            <div class="form-group">
                                <p>Cambiar contraseña</p>
                                
                            </div>
                </div>


                <!--                <div class="widget">
                                    <div class="widget-header transparent">
                                        <h2><strong>Regular</strong> Expressions</h2>
                                        <div class="additional-btn">
                                            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                        </div>
                                    </div>
                                    <div class="widget-content padding">
                                        <form role="form" id="ExpressionValidator">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" class="form-control" name="website">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone number</label>
                                                <input type="text" class="form-control" name="phoneNumber">
                                            </div>
                                            <div class="form-group">
                                                <label>Hex color</label>
                                                <input type="text" class="form-control" name="color">
                                            </div>
                                            <div class="form-group">
                                                <label>US zip code</label>
                                                <input type="text" class="form-control" name="zipCode">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>-->

            </div>
            <!--            <div class="col-sm-6 portlets">
                            <div class="widget">
                                <div class="widget-header transparent">
                                    <h2><strong>Contact</strong> Form</h2>
                                    <div class="additional-btn">
                                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                    </div>
                                </div>
                                <div class="widget-content padding">
                                    <form role="form" id="contactForm">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label>Website</label>
                                            <input type="text" class="form-control" name="website">
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control" name="Contactmessage" style="height: 140px; resize: none;"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
            
            
                            <div class="widget">
                                <div class="widget-header transparent">
                                    <h2><strong>Empty</strong> Validator</h2>
                                    <div class="additional-btn">
                                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                    </div>
                                </div>
                                <div class="widget-content padding">
                                    <form role="form" id="NotEmptyValidator">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control" name="country">
                                                <option value="">-- Select a country --</option>
                                                <option value="fr">France</option>
                                                <option value="de">Germany</option>
                                                <option value="it">Italy</option>
                                                <option value="jp">Japan</option>
                                                <option value="ru">Russia</option>
                                                <option value="gb">United Kingdom</option>
                                                <option value="us">United State</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
            
                            <div class="widget">
                                <div class="widget-header transparent">
                                    <h2><strong>Identical</strong> Validator</h2>
                                    <div class="additional-btn">
                                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                    </div>
                                </div>
                                <div class="widget-content padding">
                                    <form role="form" id="IdenticalValidator">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label>Retype password</label>
                                            <input type="text" class="form-control" name="confirmPassword">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
            
                            <div class="widget">
                                <div class="widget-header transparent">
                                    <h2><strong>Other</strong> Validations</h2>
                                    <div class="additional-btn">
                                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                    </div>
                                </div>
                                <div class="widget-content padding">
                                    <form role="form" id="OtherValidator">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="text" class="form-control" name="ages">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
            
                        </div>-->
        </div>      
    </div>
    <!-- ============================================================== -->
    <!-- End content here -->
    <!-- ============================================================== -->

</div>
<!-- End right content -->

<!-- End of page -->
<!-- the overlay modal element -->
<div class="md-overlay"></div>
<!-- End of eoverlay modal -->
<script>
    var resizefunc = [];
</script>

<!-- Page Specific JS Libraries -->


<script src="<?php echo base_url(); ?>assets/libs/bootstrap-validator/js/bootstrapValidator.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-validation.js"></script>
</body>
</html>
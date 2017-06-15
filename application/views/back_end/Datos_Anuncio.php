<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"> </script>
<!-- Start right content -->


<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="content">
    <!-- Page Heading Start -->
    <div class="page-heading">
        <h1>Form Validation</h1>
    </div>
    <!-- Page Heading End-->
    <div class="row">
        <div class="col-sm-6 portlets">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Registration</strong> Form</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <form role="form" id="registerForm">
                        <div class="form-group">
                            <label>Usernames2</label>
                            <input type="text" class="form-control" name="nameuser">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>
                                <div class="col-sm-6">
                                    <label>Re-Password</label>
                                    <input type="password" class="form-control" name="confirmPassword">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phoneNumber">
                        </div>
                        <div class="form-group">
                            <label class="control-label" id="captchaOperation"></label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="captcha" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input name="acceptTerms" type="checkbox"> I agree to the <a href="#">Terms of Service</a>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>




        </div>



        <!-- Footer Start -->

        <!-- Footer End -->			

        <!-- ============================================================== -->
        <!-- End content here -->
        <!-- ============================================================== -->

    </div>
    <!-- End right content -->

</div>
<!-- End of page -->>
<!-- End of eoverlay modal -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->






















<!-- Demo Specific JS Libraries -->



<!-- Page Specific JS Libraries -->
<script src="<?php echo base_url()?>assets/libs/bootstrap-validator/js/bootstrapValidator.min.js"></script>
<script src="<?php echo base_url()?>assets/js/pages/form-validation.js"></script>
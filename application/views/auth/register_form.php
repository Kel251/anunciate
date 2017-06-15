<?php $this->load->view('plantillas/front_end/header'); ?>
    <?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
        'class' => 'form-control',
        'placeholder' => 'Nombre de Usuario / Nickname',
        'style' => 'border-radius:8px;',
	);
}
$attributes = array(
        'class' => 'sr-only',
        'style' => 'color: red;',
        
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
    'class' => 'form-control',
    'placeholder' => 'Ingresa tu correo electronico',
    'style' => 'border-radius:8px;',
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
    'class' => 'form-control',
    'placeholder' => 'Ingresa tu contraseña',
    'style' => 'border-radius:8px;',
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
    'class' => 'form-control',
    'placeholder' => 'Repite tu contraseña',
    'style' => 'border-radius:8px;',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
    'size'	=> 30,
    'class' => 'form-control',
    'placeholder' => 'Ingresa el código de la imagen',
    'style' => 'border-radius:8px;',
);
?>

        <div class="container">
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-lg-5 col-md-6 col-sm-8">
                <div class="panel panel-info">                    
                    <div class="panel-title" style="padding:10px;">
                        <p style="font-weight: bold; font-size:36px;" class="text-center">Registrate es Gratis</p>
                    </div>                    
                
                <div style="padding-top:30px" class="panel-body col-lg-offset-2" >

                    <?php echo form_open($this->uri->uri_string()); ?>

                        <?php if ($use_username) { ?>

                            <div class="form-group">
                                <?php echo form_label('Username', $username['id'], $attributes); ?>
                                    <div style="margin-bottom: 25px" class="input-group">

                                        <?php echo form_input($username); ?>
                                    </div>
                                    <div style="color: red;">
                                        <?php echo form_error($username['name']); ?>
                                            <?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
                                    </div>
                            </div>

                            <?php } ?>
                                <div class="form-group">
                                    <?php echo form_label('Email Address', $email['id'], $attributes); ?>
                                        <div style="margin-bottom: 25px" class="input-group">
                                            <?php echo form_input($email); ?>
                                        </div>
                                        <div style="color: red;">
                                            <?php echo form_error($email['name']); ?>
                                                <?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Password', $password['id'],$attributes); ?>
                                        <div style="margin-bottom: 25px" class="input-group">
                                            <?php echo form_password($password); ?>
                                        </div>
                                        <div style="color: red;">
                                            <?php echo form_error($password['name']); ?>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Confirm Password', $confirm_password['id'], $attributes); ?>
                                        <div style="margin-bottom: 25px" class="input-group">
                                            <?php echo form_password($confirm_password); ?>
                                        </div>
                                        <div style="color: red;">
                                            <?php echo form_error($confirm_password['name']); ?>
                                        </div>
                                </div>
                                <?php if ($captcha_registration) {
		                          if ($use_recaptcha) { ?>
                                    <div class="form-group">
                                        <div id="recaptcha_image"></div>
                                            <div style="margin-bottom: 25px" class="input-group">
                                                <a href="javascript:Recaptcha.reload()">Obtener otro CAPTCHA</a>
                                            </div>
                                            <div class="recaptcha_only_if_image">
                                                    <a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a>
                                            </div>
                                            <div class="recaptcha_only_if_audio">
                                                <a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a>
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="recaptcha_only_if_image">Ingresa el conjunto de números y letras de la imagen</div>
                                            <div class="recaptcha_only_if_audio">Ingresa los números que escuchas</div>
                                            <div style="margin-bottom: 25px" class="input-group">
                                                <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
                                            </div>
                                            <div style="color: red;">
                                                <?php echo form_error('recaptcha_response_field'); ?>
                                            </div>
                                            <?php echo $recaptcha_html; ?>
                                    </div>
                                        <?php } else { ?>
                                        <div class="form-group">
                                            <p>Ingresa el código que aparece en la imagen:</p>
                                            <?php echo $captcha_html; ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Confirmation Code', $captcha['id'],$attributes); ?>
                                            <div style="margin-bottom: 25px; border-radius:5px;" class="input-group">
                                                <?php echo form_input($captcha); ?>
                                            </div>
                                            <div style="color: red;">
                                                <?php echo form_error($captcha['name']); ?>
                                            </div>
                                        </div>
                                        <?php }
	                                      } ?>
                                            <?php echo form_submit('register', 'Registrate',"class = 'btn btn-md btn-success col-lg-9'"); ?>
                                            <?php echo form_close(); ?>
                    </div>
                    <div class="or-box" style="margin-bottom: 5%; ">
                                    <span class="or">ó</span>
                                    <div class="row" style="margin-left: 1%;">
                                        <div class="col-md-6 row-block">
                                            <a href="#" class="btn btn-facebook btn-block">Facebook</a>
                                        </div>
                                        <div class="col-md-6 row-block">
                                            <a href="#" class="btn btn-google btn-block">Google</a>
                                        </div>
                                    </div>
                                </div> 
                </div>
            </div>
            <div style="width: 58%; height: 85.5%; margin-top: 50px; background-color: white;" class="mainbox col-lg-5 col-md-6 col-sm-8">
                <?php if(isset($successful)):?>
                        <h3 class="text-success text-center"><span class="glyphicon glyphicon-ok-sign"></span> <?= $successful;?> </h3>
                    <?php endif;?>                    
                <img src="<?= base_url(); ?>img/email.png" width="100%" height="auto">
                <p style="font-weight: bold; font-size:36px;" class="text-center">Diseña y crea grandes anuncios</p>                 
            </div>
        </div>
            
<?php $this->load->view('plantillas/front_end/footer'); ?>
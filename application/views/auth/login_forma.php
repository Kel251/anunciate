<?php $this->load->view('plantillas/front_end/header'); ?>

<?php
$login = array(
    'name' => 'login',
    'id' => 'login',
    'value' => set_value('login'),
    'maxlength' => 80,
    'size' => 30,
    'class' => 'form-control',
);
if ($login_by_username AND $login_by_email) {
    $login_label = 'Email o Nickname';
} else if ($login_by_username) {
    $login_label = 'Nickname';
} else {
    $login_label = 'Email';
}
$password = array(
    'name' => 'password',
    'id' => 'password',
    'size' => 30,
    'class' => 'form-control',
);
$remember = array(
    'name' => 'remember',
    'id' => 'remember',
    'value' => 1,
    'checked' => set_value('remember'),
    'style' => 'margin:0;padding:0',
);
$captcha = array(
    'name' => 'captcha',
    'id' => 'captcha',
    'maxlength' => 8,
);
?>
<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="col-lg-6 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-1">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Inicia sessión</div>
                <div style="float:right; font-size: 100%; position: relative; top:-13px">
                    <?php echo anchor('/auth/forgot_password/', 'Recordar Contraseña?'); ?>
                </div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <?php echo form_open($this->uri->uri_string(), "class='col-lg-offset-3'"); ?>
                <br><br>
                <div class="form-group">
                    <?php echo form_label($login_label, $login['id']); ?>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <?php echo form_input($login); ?>
                    </div>
                    <div style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']]) ? $errors[$login['name']] : ''; ?></div>
                </div>
                <div class="form-group">
                    <?php echo form_label('Contraseña', $password['id']); ?>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <?php echo form_password($password); ?>
                    </div>
                    <div style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']]) ? $errors[$password['name']] : ''; ?></div>
                </div>

                <?php
                if ($show_captcha) {
                    if ($use_recaptcha) {
                        ?>
                        <div class="form-group">
                            <td colspan="2">
                                <div id="recaptcha_image"></div>
                            </td>

                            <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
                            <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
                            <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
                            </td>
                        </div>
                        <div class="form-group">

                            <div class="recaptcha_only_if_image">Enter the words above</div>
                            <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
                            </td>
                            <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
                            <td style="color: red;">
                            <?php echo form_error('recaptcha_response_field'); ?></td>
                            <?php echo $recaptcha_html; ?>
                        </div>
                    <?php } else { ?>
                        <div class="form-group">
                            <td colspan="3">
                                <p>Enter the code exactly as it appears:</p>
                                <?php echo $captcha_html; ?>
                            </td>
                        </div>
                        <div class="form-group">
                            <div><?php echo form_label('Confirmation Code', $captcha['id']); ?></div>
                            <div><?php echo form_input($captcha); ?></div>
                            <div style="color: red;"><?php echo form_error($captcha['name']); ?></div>
                        </div>
                        <?php
                    }
                }
                ?>

                <div class="form-group">
                    <td colspan="3">
                        <?php echo form_checkbox($remember); ?>
                        <?php echo form_label('Recordarme', $remember['id']); ?>
                    </td>
                </div>

                <?php echo form_submit('submit', 'Iniciar sessión', "class = 'btn btn-success'"); ?>
                 <a href="<?php echo base_url(); ?>auth/register/">
                            <button type='button' class='btn btn-sm btn-block registra'>
                                <span class='glyphicon glyphicon-plus-sign'></span>
                                Registrate
                            </button>
                        </a>
                <?php echo form_close(); ?>
                <br>
                <br>
            </div>                     
        </div>  
    </div>

<?php $this->load->view('plantillas/front_end/footer'); ?>
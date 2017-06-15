<?php $this->load->view('plantillas/front_end/header'); ?>
<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
    'class' => 'form-control',
    'style' => 'border-radius:3px;',
);

if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Ingresa tu email';
} else {
	$login_label = 'Email';
}
?>

<div class="container">
            <div id="loginbox" style="margin-top:50px; margin-bottom: 6%;" class="col-lg-7 col-md-6 col-md-offset-3 col-sm-offset-2 col-sm-8 col-lg-offset-2">
                <div class="panel panel-info">                    
                    <div class="panel-title" style="padding:10px;">
                        <p style="font-weight: bold; font-size:16px;" class="text-center">
                            Puedes recuperar tu contrseña, si la has olvidado
                        </p>
                    </div>                    
                
                <div style="padding-top:30px" class="panel-body col-lg-offset-2" >
                    <?php echo form_open($this->uri->uri_string(),"class = 'form-horizontal col-lg-offset-1' style='margin-left:20%; margin-right:auto;'"); ?>
                        <div class="form-group">
                            <?php echo form_label($login_label, $login['id']); ?>

                            <div style="margin-bottom: 25px" class="input-group">
                            <?php echo form_input($login); ?>
                            </div>
                            <div style="color: red;">
                                <?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
                            </div>
                                        </div>
                    <?php echo form_submit('reset', 'Resetear contraseña',"class = 'btn btn-md btn-success col-lg-5' style='margin-bottom: 5%;'" ); ?>
                    <?php echo form_close(); ?>

                </div>
                   <?php if(isset($respuesta)):?>
                       <div class="alert-info" style="height:20px;">
                        <p style="font-weight: bold; font-size:13px;" class="text-center">
                            <?= $respuesta;?>
                        </p>
                    </div>
                    <?php endif;?>
                    </div></div></div></div>
<?php $this->load->view('plantillas/front_end/footer'); ?>
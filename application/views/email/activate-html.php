<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><title>Welcome to <?php echo $site_name; ?>!</title></head>
<body>
<div style="max-width: 800px; margin: 0; padding: 30px 0;">
<table width="80%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="5%"></td>
<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">Bienvenido a <?php echo $site_name; ?>!</h2>
Gracias por unirte a <?php echo $site_name; ?>. Tu cuenta ha sido creada correctamente.<br/>
Ahora podrás publicar cuantos anuncios desees, de forma rápida y gratuita.
<br/>
Para poder continuar con tu resgistro, verifica tu correo electronico, dando click en el siguiente botón:<br />
<br />
<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="<?php echo site_url('/auth/activate/'.$user_id.'/'.$new_email_key); ?>" style="color: #3366cc;">Finish your registration...</a></b></big><br />
<br />
El boton no funciona? Copia el siguiente enlace a su barra de direcciones del navegador:<br />
<nobr><a href="<?php echo site_url('/auth/activate/'.$user_id.'/'.$new_email_key); ?>" style="color: #3366cc;"><?php echo site_url('/auth/activate/'.$user_id.'/'.$new_email_key); ?></a></nobr><br />
<br />
Por favor, compruebe su correo electrónico dentro de <?php echo $activation_period; ?> horas, de lo contrario su registro dejará de ser válido y tendrá que registrarse de nuevo.<br />
<br />
<br />
<?php if (strlen($username) > 0) { ?>Tu Nickname: <?php echo $username; ?><br /><?php } ?>
Tu correo electronico: <?php echo $email; ?><br />
<?php if (isset($password)) { /* ?>Your password: <?php echo $password; ?><br /><?php */ } ?>
<br />
<br />
Que te diviertas!<br />
Equipo <?php echo $site_name; ?>
</td>
</tr>
</table>
</div>
</body>
</html>
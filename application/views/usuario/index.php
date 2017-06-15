<!-- Formulario de Registro -->

<?php
//imprime el arreglo de los registros de la tabla
//        print_r($selUsuario)
?>

<script>

    $(document).ready(function () {
        $("#registerForm").submit(function (event) {
            event.preventDefault();
            
            nicknamee = $("#nickname").val();
            emaile = $("#email").val();
            anunciantee = $(".anunciante").val();
            nombree = $("#nombre").val();
            apellidoe = $("#apellido").val();
            passworde = $("#password").val();
            
            $.ajax({url: "<?php echo base_url() . 'Control_Usuario/insert'; ?>",
                type: 'POST',
                data: {nickname: nicknamee, emailr: emaile, anunciante: anunciantee, nombrer: nombree, apellidor: apellidoe, password1: passworde},
                success: function (result) {
//                        alert("Los datos no existen");
                    if (result === 'Este usuario ya existe')
                    {
                        $("#respuesta1").fadeIn();
//                            alert('El usuario ya existe');
                        $("#respuesta1").html(result);
                        $("#respuesta1").fadeOut(5000);
                    }
                    if (result === 'Este correo ya existe')
                    {
                        $("#respuesta2").fadeIn();                        
                        $("#respuesta2").html(result);
                        $("#respuesta2").fadeOut(5000);
//                            alert('El correo ya existe');
                    }
                    if (result === 'Ya estas registrado')
                    {
                        alert('Ya estas registrado. Bienvenido!. Te hemos enviado un correo de verificación revisa tu bandeja de entrada ');
                        window.location.href = "http://localhost:8080/anunciate/Control_Dashuser";
//                            alert('El correo ya existe');
                    }//                        
//                        $("#respuesta1").html(result);
//                        $("#respuesta").fadeIn();
                }});
        });
    });
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel2">Crea tu cuenta</h3>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-1">
                            <div class="account-box">
                                <!--<div class="logo ">
                                    <img src="img/logologin.png" alt="" class="logo"/>
                                </div>-->
                                <form id="registerForm" class="form-signin" method="POST" action="<?php echo base_url('Control_Usuario/insert') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Nombre de usuario" required/>

                                        <?php echo form_error('nickname'); ?>
                                    </div>
                                    <div id="respuesta1" class="error" style="background-image: url('<?php echo base_url(); ?>img/error.png');"><b></b></div>
                                    <?php if (isset($nameuser) === TRUE): ?>

                                        <div class="alert-danger">
                                            <?php echo $nameuser; ?>
                                        </div>

                                    <?php endif; ?>

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="emailr" placeholder="Email / Correo electronico" required/>

                                        <?php echo form_error('emailr'); ?>
                                    </div>
                                    <div id="respuesta2" class="error" style="background-image: url('<?php echo base_url(); ?>img/error.png');  "><b></b></div>                                    
                                    <div class="form-group sr-only">
                                        Anunciante
                                    </div>
                                    <div class="form-group">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="particular" class="anunciante" name="anunciante" /> Anunciante particular                                                            
                                            </label><br>
                                            <label>                                                            
                                                <input type="radio" value="comercial" class="anunciante" name="anunciante" /> Anunciante comercial
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nombre" name="nombrer" placeholder="Nombre" required />
                                        <?php echo form_error('nombrer'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="apellido" name="apellidor" placeholder="Apellido" required />
                                        <?php echo form_error('apellidor'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name="password1" placeholder="Contraseña" required />
                                        <?php echo form_error('password1'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password2" placeholder="Confirma contraseña" required />
                                        <?php echo form_error('password2'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input name="acceptTerms" type="checkbox" required> Acepto las <a href="#">Condiciones del Servicio</a>
                                            </label>
                                        </div>
                                    </div>

                                    <button class="btn btn-lg btn-block btn-success" type="submit">
                                        Crear cuenta
                                    </button>

                                </form>
                                <!--<a class="forgotLnk" href="#">I can't access my account</a>-->
                                <div class="or-box">
                                    <span class="or">ó</span>
                                    <div class="row">
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
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>

<!--<div id="respuesta"></div>-->
<!--<script src="?php echo base_url() . 'js/jquery.js'; ?>"></script>-->
<!--
<script>

    $(document).ready(function () {
        $("#log").submit(function (event) {
            event.preventDefault();


            $("#mens").fadeIn(2000);
            $("#mens").css({"background-color": "yellow", "width": "300px"});

            title = $("#title").val();
            txt = $("#text").val();

            if (title != "" && txt != "") {

                $.ajax({url: "<?php echo base_url() . 'news/create'; ?>",
                    type: 'POST',
                    data: {titulo: title, texto: txt},
                    success: function (result) {
                        alert("Los datos no existen");
                        $("#mens").html(result);
                        $("#mens").fadeOut(5000);

                    }});


            } else {

                $("#mens").html("No deje campos vacíos");
                $("#mens").fadeOut(5000);

            }

        });

    });

</script>
<form id="log">
    <h2>Create a news item</h2>


    <label for="title">Title</label> 
    <input type="input" name="title" id="title" /><br />

    <label for="text">Text</label>
    <textarea name="text" id="text"></textarea><br />

    <button id="add">Add</button>no encerrar button entre la etiqueta form


    <div id="mens"></div>
</form>-->

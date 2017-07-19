<!-- FOOTER -->
<script type="text/javascript">
    $(document).ready(function () {
        $('.slider5').bxSlider({
            slideWidth: 700,
            minSlides: 5,
            maxSlides: 5,
            moveSlides: 5,
            slideMargin: 10,
            auto: true,
            pause: 6700
        });
        $('.sliderdes').bxSlider({
            slideWidth: 700,
            minSlides: 5,
            maxSlides: 5,
            moveSlides: 5,
            slideMargin: 10,
            auto: true,
            pause: 6700
        });
    });
</script>

<script>
    $(document).ready(inicio);
    function inicio() {
        $("body").on("click", "article .panel-body a", function (event) {
            event.preventDefault();
            //alert('funciona');
            idsele = $(this).attr("href");
            mostrarimg(idsele);
            mostrainfo(idsele);
            showcomments(idsele);
//            postcomment(idsele);
        });
    }
    function mostrarimg(idanun) {
        $('#listaimg').html('<div id="gifimg"><img src="<?php echo base_url() . 'images/loadi.gif"/'; ?>></div>');
        $.ajax({
            url: "<?php echo base_url() . 'Control_Usuario/showpictures'; ?>",
            type: "POST",
            data: {id: idanun},
            success: function (resp) {
                //alert(resp);
                var registros = eval(resp);

                html = "";
                html += "<img class='img-responsive' src='<?php echo base_url() ?>img/cargas/" + registros[0]['img'] + "'/>";
                for (var i = 1; i < registros.length; i++) {
                    html += "<img class='img-responsive hidden' src='<?php echo base_url() ?>img/cargas/" + registros[i]['img'] + "'/>";
                }
                ;
                html += "</div>";
                $("#listaimg").html(html);
            }
        });
    }

    function mostrainfo(idinfo) {
        $('#infoanun').html('<div id="info"></div>');
        $.ajax({
            url: "<?php echo base_url() . 'Control_Usuario/showinfo'; ?>",
            type: "POST",
            data: {id: idinfo},
            success: function (respu) {
                //alert(resp);
                var registro = eval(respu);

                html = "";
                //html += "<img class='img-responsive' src='?php echo base_url()?>img/cargas/" + registros[0]['img'] + "'/>";
                for (var i = 0; i < registro.length; i++) {
                    html += "<div class='img-poster clearfix'><a href='#'><img class='img-circle' src='<?php echo base_url() ?>img/cargas/" + registro[i]['foto'] + "'/></a><strong style='font-size: 16px;'>" + registro[i]["nickname"] + "</strong><strong style='float: right; margin-top: -8%;'><a style='background-color: #3498db;color: #fff;' class='btn btn-xs' href='<?= base_url() ?>Control_Usuario/perfilanunciante/" + registro[i]["usuario"] + "'>Ver perfil del anunciante</a></strong><span>" + registro[i]["fecha"] + "</span></div>";
                    html += "<div style='margin-top: 5%; margin-left: 3%;'><p style='font-size: 17px;'>" + registro[i]["anuncio"] + "</p><p style='font-size: 15px;color: green;'>$" + registro[i]["precio"] + "</p><p>" + registro[i]["descripcion"] + "</p></div>";
                    ///html += "<div style='overflow-y: auto;'></div>";
                }
                ;
                html += "";
                $("#infoanun").html(html);
            }
        });
    }

    function showcomments(idanun) {
        $('#showcomentarios').html('<div id="info"></div>');
        $.ajax({
            url: "<?php echo base_url() . 'Control_Usuario/showcomentarios' ?>",
            type: "POST",
            data: {id: idanun},
            success: function (respuesta) {
                //alert(respuesta);
                var registros = eval(respuesta);
                html = "<ul class='img-comment-list'>";
                for (var i = 0; i < registros.length; i++) {
                    html += "<li><div class='comment-img'><img src='<?php echo base_url() ?>img/cargas/" + registros[i]['fotop'] + "'/></div><div class='comment-text'><strong><a href='#'>" + registros[i]["nickname"] + "</a></strong><div class='txtcoment'>" + registros[i]["coment"] + "</div></div></li>";
                }
                ;
                html += "</ul>";
                $("#showcomentarios").html(html);
            }
        });
    }

//    function postcomment(idanun) {
//        $("#fcomentario").submit(function (event) {
//            event.preventDefault();
//            comment = $("#comment").val();
//            id = idanun;
//            if (comment !== "")
//            {
//                $.ajax({
//                    url: "<?php echo base_url() . 'Control_Usuario/postcomentario' ?>",
//                    type: "POST",
//                    data: {comentario: comment, idanuncio: id},
//                    success: function (resp) {
//                        //$("#comment").val('');
//                        alert(resp);
//
//                        showcomments(id);
////                    $('#fcomentario')[0].reset();
//
//                    }
//                });
//            } else {
//                alert("Tienes que agregar texto a tu comentario.");
//                return False;
//            }
//        });
//    }

</script>
<script>
    $(document).ready(function () {
        $("body").on("click", "article .panel-body a", function (event) {
            event.preventDefault();

            ids = $(this).attr("href");
            //alert('funciona'+ids);
            //$("#fcomentario").submit(function (event) {
            //  event.preventDefault();
            $("#textoforcoment").keyup(function (event) {
                if (event.keyCode === 13) {
                    //comment = $("#textoforcoment").val();
                    comment = document.getElementById("textoforcoment").innerHTML;  
                    if (comment !== "")
                    {
                        $.ajax({
                            url: "<?php echo base_url() . 'Control_Usuario/postcomentario' ?>",
                            type: "POST",
                            data: {comentario: comment, idanuncio: ids},
                            success: function (resp) {
                                document.getElementById("textoforcoment").innerHTML = '';
                                if (resp === "Tienes que iniciar sesion o registrarte para poder comentar.") {
                                    swal(resp, "", "info");
                                }
                                showcomments(ids);
                                //$('#fcomentario')[0].reset();
                            }
                        });
                    } else {
                        swal("Tienes que agregar texto a tu comentario.", "", "info");
//                    swal("Good job!", "", "info");
                        return FALSE;
                    }
                    //alert('You pressed enter!');
                    return FALSE;
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#comment").keyup(function (event) {
            if (event.keyCode === 13) {
                alert('You pressed enter!');
            }
        });
    });
</script>
</div>
<div class="col-lg-2"></div>
<div class="col-lg-10 col-md-10 col-xs-12 col-sm-12" style="margin-top: 2%;">
    <footer style="height: 8%;">
        <div class="">            
            <table class="table table-responsive " id="mod"> 
                <tr>
                    <td style="width: 100px;">
                        <img src="<?php echo base_url() . 'img/logotipo7c.png' ?>">
                    </td>
                    <td>
                        Información <br>
                        Términos 
                    </td>
                    <td>
                        Prensa<br>
                        Enviar sugerencias
                    </td>
                    <td>
                        Derechos de autor <br> Política y seguridad 
                    </td>
                    <td>
                        Publicidad <br> Creadores
                    </td>
                    <td>
                        Publicidad <br> Privacidad
                    </td>
                    <td>
                        Desarrolladores<br>
                        &copy; 2017 anunciate!
                    </td>
                </tr>
            </table>
        </div>

    </footer>
</div>
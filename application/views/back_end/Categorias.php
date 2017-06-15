<script>
    $(document).ready(inicio);


    function inicio() {
        $("#msg-error").hide();
        mostrarDatos("");
        $("#buscar").keyup(function () {
            buscar = $("#buscar").val();
            mostrarDatos(buscar);
        });
        $("#btnbuscar").click(function () {
            mostrarDatos("");
            $("#buscar").val("");
        });
    }

    function mostrarDatos(valor) {
        $.ajax({url: "<?php echo base_url() . 'Control_Dashuser/mostrarCate'; ?>",
            type: "POST",
            data: {buscar: valor},
            success: function (respuesta) {
                //alert(respuesta);
                var registros = eval(respuesta);

                html = "<table class='table table-responsive table-bordered table-hover'><thead>";
                html += "<tr class='info'><th>Id_cat</th><th>Categoría</th><th>Id_subcat</th><th>Subcategoría</th></tr>";
                html += "</thead><tbody>";
                for (var i = 0; i < registros.length; i++) {
                    html += "<tr><td>" + registros[i]["Id_cat"] + "</td><td>" + registros[i]["Nom_cat"] + "</td><td>" + registros[i]["Id_subcat"] + "</td><td>" + registros[i]["Nom_subcat"] + "</td></tr>";
                }
                ;
                html += "</tbody></table>";
                $("#listaCategorias").html(html);
            }
        });
    }
</script>
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

        <!-- Your awesome content goes here -->
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

                <div class="form-group col-lg-6">

                    <input type="text" class="form-control" id="buscar" name="criterio">
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
                <button id="btnbuscar" class="btn btn-default">Buscar todo</button>
                <!--<a class="btn btn-primary md-trigger" data-modal="form-modal">Form in Modal</a>-->

            </div>
        </div>


        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Categorías y Subcategorías disponibles</strong> </h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <div id="listaCategorias" class="widget-content padding">
            </div>            
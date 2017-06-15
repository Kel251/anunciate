<script src="<?php echo base_url() . 'js/jquery.js'; ?>"></script>

<script>

    $(document).ready(function () {
$("#log").submit(function(event){
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
	
	<button id="add">Add</button><!--no encerrar button entre la etiqueta form-->


	<div id="mens"></div>
        </form>

        <div class="content">
            <div class="wrap">	
                <div class="text">	
                    <!--		<h2>Awesome Slogan of Marketing</h2>-->
                    <h2>Sorprendentes Anuncios</h2>
<!--                    <p>Sub-heading with mentioning your awesome services will be appear here</p>-->
                    <p>Busca lo que necesitas, anuncia lo que quieras.</p>
                </div>	
                <div class="form" style="width: auto;">	
                   <form style="height:8%; padding-left: 8%; padding-right: 8%;" action="<?= base_url('Control_Usuario/buscar')?>" method="POST">
                        <input type="text" size="30" name="criterio" id="search" placeholder="ejem: casas, autos, bodegas, motos, deportes, mariachis.....">
                        <input type="submit" value="Ver anuncios" id="submit" name="submit">
                    </form>
                </div>
            </div>
            <div class="slider">	
                <div class="wrap">
                    <div class="container" style="top: 0px">	
                       <div id="cbp-fwslider" class="cbp-fwslider" style="width: 100%">
                           <ul class="bxsliderland" style="height: 385px;">
                                <li><a href="#"><img style="max-width:100%" src="<?= base_url(); ?>images/slider16.jpg" alt="img02"/></a></li>
                                <li><a href="#"><img style="max-width:100%" src="<?= base_url(); ?>images/slider15.jpg" alt="img02"/></a></li>
                                <li><a href="#"><img style="max-width:100%" src="<?= base_url(); ?>images/slider17.png" alt="img02"/></a></li>
                                <li><a href="#"><img style="max-width:100%" src="<?= base_url(); ?>images/slider19.jpg" alt="img02"/></a></li>
                                <li><a href="#"><img style="max-width:100%" src="<?= base_url(); ?>images/slider20.jpg" alt="img02"/></a></li>
                                <li><a href="#"><img style="max-width:100%" src="<?= base_url(); ?>images/slider21.jpg" alt="img02"/></a></li>
                                <li><a href="#"><img style="max-width:100%" src="<?= base_url(); ?>images/slider22.jpg" alt="img02"/></a></li>
                                <li><a href="#"><img style="max-width:100%" src="<?= base_url(); ?>images/slider23.jpg" alt="img02"/></a></li>
                            </ul>
                        </div>
                        <div class="clear"> </div>	
                    </div>	
                    <!--div class="bottom-text">	
                        <h2>Impresionantes servicios de diseño para tus anuncios</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p><a href="about.html">Learn More</a></p>
                    </div-->	
                </div>
            </div>
        </div>
        <div class="footer-top">
            <div class="wrap">
                <div class="left">
                    <h3>Impresionantes servicios de diseño para tus anuncios</h3>
                    <p>Descubre las plantillas prediseñadas para darle una mejor presentación a tus anuncios, podrás cambiar las imagenes y añadir el texto que desees, hay una para cada categoría disponible de anuncios.</p>
                    <p class="a">También podrás hacer uso de estas plantillas y poder compartirlas con tus contactos vía email, de esta forma podrás compartir tus anuncios con quien desees.</p>
                    <p><a href="<?= base_url('Control_Usuario/acerca'); ?>">Leer más</a></p>
                </div>
                <div class="right">
                    <img src="<?= base_url(); ?>images/landing1.png" alt="">
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <div class="contact">
            <div class="wrap">
                <h3>Contacto</h3>
                <form>
                    <form-text>
                        <input type="text" class="textbox" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Name';
                                }">
                        <input type="text" class="textbox" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'E-mail';
                                }">
                        <input name="Website" type="text" class="Website" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Website';}">
                    </form-text>
                    <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'Message';
                            }">Message</textarea>
                    <input type="submit" value="Submit">
                    <div class="clear"> </div>
                </form>
            </div>
        </div>	
        <div class="footer-bottom">
            <div class="wrap">
                <div class="copy-right">
                    <p>Copyright 2014. All Rights Reserved</p>
                </div>
                <div class="copy">
                    <p>Template by <a href="http://w3layouts.com">w3layouts</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
<?php session_start();?>
<?php include_once 'header.php';?>

<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>Contáctanos</h2>
            <p><a href="/">Principal</a> &nbsp; / &nbsp; Contacto</p>

        </div>
    </div>
</section>
<!-- contact1 -->
<section class="w3l-contact-1 py-5 text-center">
    <div class="contacts-9 py-lg-5 py-sm-4">
        <div class="container">
            <div class="d-grid contact-view">
                <div class="cont-details">
                    <h3 class="title-big">Contacta con Nosotros</h3>
                </div>         
            </div>
            <div class="map-iframe my-5">
                <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Asuncion%2C%20Paraguay&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
            </div>
            <div class="d-grid contact-view">
                <div class="cont-details">
                    <div class="cont-top">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Llámanos</h6>
                            <p><a href="tel:+44 99 555 42">+595 972 500 421</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Email</h6>
                            <p><a href="mailto:example@mail.com" class="mail">hotelohana@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker text-primary"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Dirección</h6>
                            <p>Avda. Aviadores del Chaco 3241. Asunción, Paraguay.</p>
                        </div>
                    </div>
                </div>
                <div class="map-content-9 mt-lg-0 mt-4">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                        <div class="twice-two">
                            <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Nombre"
                                required="">
                            <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email"
                                required="">
                        </div>
                        <div class="twice">
                            <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                                placeholder="Subject" required="">
                        </div>
                        <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Mensaje"
                            required=""></textarea>
                        <button type="submit" class="btn btn-contact">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /contact1 -->

<?php include_once 'footer.php';?>
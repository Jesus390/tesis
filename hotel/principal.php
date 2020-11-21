<?php
session_start();
if(isset($_SESSION['name'])) {
    header("Location: home.php");
}

?>

<?php include_once 'header.php';?>

         <!-- main-slider -->
         <section class="w3l-main-slider" id="home">
             <div class="companies20-content">
                 <div class="owl-one owl-carousel owl-theme">
                     <div class="item">
                         <li>
                             <div class="slider-info banner-view bg bg2">
                                 <div class="banner-info">
                                     <div class="container">
                                         <div class="banner-info-bg">
                                             <h5>La ubicación perfecta para tu viaje.</h5>
                                             <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.php">Nuestros Servicios</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </div>
                     <div class="item">
                         <li>
                             <div class="slider-info  banner-view banner-top1 bg bg2">
                                 <div class="banner-info">
                                     <div class="container">
                                         <div class="banner-info-bg">
                                             <h5>Nuestro hotel se encuentra en la principal ciudad conectando tu experiencia con la vida local.</h5>
                                             <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html">Nuestros Servicios</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </div>
                     <div class="item">
                         <li>
                             <div class="slider-info banner-view banner-top2 bg bg2">
                                 <div class="banner-info">
                                     <div class="container">
                                         <div class="banner-info-bg">
                                             <h5>Ideal para pasar tus vacaciones lo más relajado posible con todas las comodidades.
                                             </h5>
                                             <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html">Nuestros Servicios</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </div>
                     <div class="item">
                         <li>
                             <div class="slider-info banner-view banner-top3 bg bg2">
                                 <div class="banner-info">
                                     <div class="container">
                                         <div class="banner-info-bg">
                                             <h5>Nuestro estilo es urbano y ofrece las soluciones más simples, convenientes y relevantes para tu estadía.</h5>
                                             <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="services.html">Nuestros Servicios</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </div>
                 </div>
             </div>
         </section>

        <section class="w3l-about py-5">
        	<div class="container py-sm-4">
        		<div class="row">
        			<div class="col-lg-6 about-left mb-md-0 mb-5">
        				<h3 class="title-big">Relájate en nuestro Resort</h3>
        				<h5>Tenemos lo mejor para nuestros clientes.</h5>
        				<p class="mt-3">Nuestro hotel cuenta con piscina y gimnasio, ideal para que puedas mantener tu rutina de ejercicios y disfrutar de tus momentos de relax en ambientes placenteros.</p>
        				<a href="about.html" class="btn btn-style btn-primary mt-sm-5 mt-4">Sobre Nosotros</a>
        			</div>
        			<div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
        				<img src="assets/images/top.jpg" alt="" class="img-fluid img-border mt-4" />
        				<img src="assets/images/bottom.jpg" alt="" class="img-fluid position-absolute img-position" />
        			</div>
        		</div>
        	</div>
        </section>
        <!-- //about -->
        <div class="best-rooms py-5">
            <div class="container py-lg-5 py-sm-4">
                <h3 class="title-big text-center">Nuestras Habitaciones</h3>
                <div class="ban-content-inf row py-lg-3">
                    <div class="maghny-gd-1 col-lg-6">
                        <div class="maghny-grid">
                            <figure class="effect-lily">
                                <img class="img-fluid" src="assets/images/room1.jpg" alt="">
                                <figcaption class="w3set-hny">
                                    <div>
                                        <h4 class="top-text">Hotel de Lujo.
                                            <span>Un lugar tranquilo para quedarse.</span></h4>
                                        <p>Desde 150.000₲</p>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="room-info">
                                <h3 class="room-title"><a href="room-single.html">Habitaciones</a></h3>
                                <ul class="mb-3">
                                    <li><span class="fa fa-users"></span> 2 Personas</li>
                                    <li><span class="fa fa-bed"></span>Doble Cama</li>
                                </ul>
                                <p>Habitaciones de la mejor calidad para que tu estadía sea única.</p>
                                <a href="#booking" class="btn btn-style btn-primary mt-sm-4 mt-3">Reserva Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                        <div class="row">
                            <div class="maghny-gd-1 col-6">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/room2.jpg" alt="">
                                <figcaption class="w3set-hny">
                                    <div>
                                        <h4 class="top-text">Habitaciones Simples.</h4>
                                        <p>Desde 250.000₲</p>
                                    </div>
                                </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-6">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/room3.jpg" alt="">
                                <figcaption class="w3set-hny">
                                    <div>
                                        <h4 class="top-text">Habitaciones Dobles.</h4>
                                        <p>Desde 320.000₲</p>
                                    </div>
                                </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-6 mt-4">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/room4.jpg" alt="">
                                <figcaption class="w3set-hny">
                                    <div>
                                        <h4 class="top-text">Habitaciones Familiares.</h4>
                                        <p>Desde 380.000₲</p>
                                    </div>
                                </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="maghny-gd-1 col-6 mt-4">
                                <div class="maghny-grid">
                                    <figure class="effect-lily border-radius">
                                        <img class="img-fluid" src="assets/images/room5.jpg" alt="">
                                <figcaption class="w3set-hny">
                                    <div>
                                        <h4 class="top-text">Habitaciones Resort.</h4>
                                        <p>Desde 450.000₲</p>
                                    </div>
                                </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include_once 'footer.php';?>
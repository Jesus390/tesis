<?php

?>

<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- //Meta tags -->
        <link rel="stylesheet" href="assets/css/style-starter.css" type="text/css" media="all" /><!-- Style-CSS -->
        <link href="assets/css/font-awesome.css" rel="stylesheet"><!-- font-awesome-icons -->

        <title>Hotel Ohana</title>

        <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>

    <body>
        

        <!--w3l-header-->

        <header class="w3l-header-nav">
        	<!--/nav-->
        	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        		<div class="container">
        			<a class="navbar-brand" href="principal.php">
        				<img src="assets/images/hotel.png" alt="Your logo"/>
        			</a>
        			<button class="navbar-toggler" type="button" data-toggle="collapse" 
                        data-target="#navbarSupportedContent"
        				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        				<span class="navbar-toggler-icon"></span>
        			</button>

        			<div class="collapse navbar-collapse" id="navbarSupportedContent">
        				<ul class="navbar-nav ml-auto">
        					<li class="nav-item _active">
        						<a class="nav-link" href="principal.php">Principal</a>
        					</li>
        					<li class="nav-item @@about__active">
        						<a class="nav-link" href="about.php">Acerca de Nosotros</a>
        					</li>
        					<li class="nav-item @@services__active">
        						<a class="nav-link" href="services.php">Servicios</a>
        					</li>
        					<li class="nav-item @@contact__active">
        						<a class="nav-link" href="contact.php">Contáctanos</a>
        					</li>
        				</ul>
                    </div>    
  
<?php
    if(!isset($_SESSION['name'])) {
?>                        
                    <!--Modal: Login / Register Form-->
                        <div class="text-center">
                            <a href="" class="ml-3 book btn btn-primary btn-style" data-toggle="modal" data-target="#modalLRForm">Inicia Sesión</a>
                        </div>

                    <!--Modal: Login / Register Form-->
                        <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog"aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog cascading-modal" role="document">
                            <!--Content-->
                        <div class="modal-content">

                                  <!--Modal cascading tabs-->
                        <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 justify-content-center" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="tab" href="#panel7" role="tablist"><span class="fa fa-user"></span>
                      Iniciar Sesión</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus"></i>
                      Registrarse</a>
                  </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                  <!--Panel 7-->
                  <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                    <!--Body-->
            <section class="w3l-form-36" id="login">
                <div class="form-36-mian section-gap">
                    <div class="wrapper">
                        <div class="form-inner-cont2">
                            <h3>Inicia Sesión</h3>
                            <form action="scripts/archivo_destino.php" method="POST" class="signin-form">
                                <div class="form-input2">
                                    <span class="fa fa-envelope-o" aria-hidden="true"></span> 
                                    <input id="control1_email" type="email" name="datos_introducidos_email"
                                        placeholder="Email" required />
                                </div>
                                <div class="form-input2">
                                    <span class="fa fa-key" aria-hidden="true"></span> 
                                    <input id="control1_contraseña" type="password" name="datos_introducidos_password" placeholder="Contraseña"
                                        required/>
                                </div>
                                <div class="login-remember d-grid">
                                    <label class="check-remaind">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <p class="remember">Recuérdame</p>
                                    </label>
                                    <button type="submit" class="ml-3 book btn btn-primary btn-style">Iniciar Sesión</button>
                                </div>
                                <div class="new-signup">
                                    <a href="#reload" class="signuplink">Olvidaste tu Contraseña?</a>
                                </div>
                            </form>
                            <div class="social-icons">
                                <p class="continue"><span>O</span></p>
                                <div class="social-login">
                                    <a href="#facebook">
                                        <div class="facebook">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>

                                        </div>
                                    </a>
                                    <a href="#google">
                                        <div class="google">
                                            <span class="fa fa-google-plus" aria-hidden="true"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <p class="signup">No tienes una cuenta? <a href="#panel8" class="signuplink">Regístrate</a></p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
                  <!--/.Panel 7-->

                  <!--Panel 8-->
            <div class="tab-pane fade" id="panel8" role="tabpanel">

                    <!--Body-->
                <section class="w3l-form-36">
                    <div class="form-36-mian section-gap">
                        <div class="wrapper">
                            <div class="form-inner-cont2">
                                <h3>Regístrate</h3>
                                <form action="scripts/archivo_registrar.php" method="post" class="signin-form">
                                    <div class="form-input2">
                                    <span class="fa fa-envelope-o" aria-hidden="true"></span> 
                                    <input id="control2_nombre" type="text" name="datos_registrar_nombre"
                                        placeholder="Nombre" required />
                                </div>
                                    <div class="form-input2">
                                        <span class="fa fa-envelope-o" aria-hidden="true"></span> 
                                        <input type="email" name="datos_registrar_email" id="control2_email"
                                            placeholder="Email" required />
                                    </div>
                                    <div class="form-input2">
                                        <span class="fa fa-key" aria-hidden="true"></span> 
                                        <input type="password" name="datos_registrar_password" id="control2_contraseña" placeholder="Contraseña"
                                            required />
                                    </div>
                                    <div class="login-remember d-grid">
                                        <button type="submit" class="ml-3 book btn btn-primary btn-style">Registrarse</button>
                                    </div>
                                </form>
                                <div class="social-icons">
                                    <p class="continue"><span>O</span></p>
                                    <div class="social-login">
                                        <a href="#facebook">
                                            <div class="facebook">
                                                <span class="fa fa-facebook" aria-hidden="true"></span>

                                            </div>
                                        </a>
                                        <a href="#google">
                                            <div class="google">
                                                <span class="fa fa-google-plus" aria-hidden="true"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <p class="signup">Ya tienes una cuenta? <a href="#signup.html" class="signuplink">Inicia Sesión</a></p>
                            </div>
                        </div>
                    </div>
                </section>
                        </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
        	<!--//nav-->
        </header>
        <!-- //w3l-header -->



    <?php } else { ?>

        				<a href="mis_reservas.php#booking" class="ml-3 book btn btn-primary btn-style">Reserva Ya</a>

                            <li class="dropdown ml-3 book btn btn-light btn-style">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h6>¡Bienvenido <?php print $_SESSION['name'];?>!</h6> <span class="caret"></span></a>
                                <ul class="dropdown-menu ml-3 book btn btn-style">
                                    <li><a href="mis_reservas.php">Mis Reservas</a></li>
                                    <li><a href="scripts/cerrar_sesion.php">Salir</a></li>
                                </ul>
                            </li>     
                    </div>    
                </div>
            </nav>            
    </header>

<?php }?>





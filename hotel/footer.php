
        <section class="w3l-footer-29-main">
          <div class="footer-29 py-5">
            <div class="container py-lg-4">
              <div class="row footer-top-29">
                <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
                  <h6 class="footer-title-29">Contáctanos</h6>
                  <ul>
                    <li>
                      <p><span class="fa fa-map-marker"></span> Avda. Aviadores del Chaco 3241. Asunción, Paraguay.</p>
                    </li>
                    <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(595)-972-500-421</a></li>
                    <li><a href="mailto:hotels@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                        hotelohana@gmail.com</a></li>
                  </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-sm-0 mt-5">

                  <ul>
                    <h6 class="footer-title-29">Links</h6>
                    <li><a href="/">Principal</a></li>
                    <li><a href="about.php">Sobre Nosotros</a></li>
                    <li><a href="services.php">Servicios</a></li>
                    <li><a href="contact.php">Contáctanos</a></li>
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-5 footer-list-29 footer-3 mt-lg-0 mt-5">
                    <h6 class="footer-title-29">Términos y Políticas</h6>
                    <div class="footer-post">
                      <a href="#url">Garantía de mejor tarifa</a>
                    </div>
                    <div class="footer-post">
                      <a href="#url">Aviso de privacidad</a>
                    </div>
                    <div class="footer-post">
                      <a href="#url">Términos de Uso</a>
                    </div>
                    <div class="footer-post">
                      <a href="#url">Cookies</a>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                  <h6 class="footer-title-29">Subscríbete</h6>
                  <p>Ingresa tu email para recibir noticas sobre nosotros.</p>

                  <form action="#" class="subscribe" method="post">
                    <input type="email" name="email" placeholder="Ingresa tu email" required="">
                    <button><span class="fa fa-envelope-o"></span></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="w3l-footer-29-main w3l-copyright">
          <div class="container">
            <div class="row bottom-copies">
              <p class="col-lg-8 copy-footer-29">© 2020 Hotel Ohana. Todos los derechos reservados.</p>
            </div>
          </div>

         <!-- move top -->
         <button onclick="topFunction()" id="movetop" title="Go to top">
          &#10548;
        </button>
        <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
            scrollFunction()
          };

          function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              document.getElementById("movetop").style.display = "block";
            } else {
              document.getElementById("movetop").style.display = "none";
            }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
        </script>
        <!-- /move top -->
        </section>

        <!-- Template JavaScript -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>

        <script src="assets/js/owl.carousel.js"></script>
        <!-- script for banner slider-->
        <script>
          $(document).ready(function () {
            $('.owl-one').owlCarousel({
              loop: true,
              margin: 0,
              nav: false,
              responsiveClass: true,
              autoplay: false,
              autoplayTimeout: 5000,
              autoplaySpeed: 1000,
              autoplayHoverPause: false,
              responsive: {
                0: {
                  items: 1,
                  nav: false
                },
                480: {
                  items: 1,
                  nav: false
                },
                667: {
                  items: 1,
                  nav: true
                },
                1000: {
                  items: 1,
                  nav: true
                }
              }
            })
          })
        </script>
        <!-- //script -->

        <!-- script for owlcarousel -->
        <script>
          $(document).ready(function () {
            $('.owl-testimonial').owlCarousel({
              loop: true,
              margin: 0,
              nav: true,
              responsiveClass: true,
              autoplay: false,
              autoplayTimeout: 5000,
              autoplaySpeed: 1000,
              autoplayHoverPause: false,
              responsive: {
                0: {
                  items: 1,
                  nav: false
                },
                480: {
                  items: 1,
                  nav: false
                },
                667: {
                  items: 1,
                  nav: true
                },
                1000: {
                  items: 1,
                  nav: true
                }
              }
            })
          })
        </script>
        <!-- //script for owlcarousel -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script>
          $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
              type: 'inline',

              fixedContentPos: false,
              fixedBgPos: true,

              overflowY: 'auto',

              closeBtnInside: true,
              preloader: false,

              midClick: true,
              removalDelay: 300,
              mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
              type: 'inline',

              fixedContentPos: false,
              fixedBgPos: true,

              overflowY: 'auto',

              closeBtnInside: true,
              preloader: false,

              midClick: true,
              removalDelay: 300,
              mainClass: 'my-mfp-slide-bottom'
            });
          });
        </script>


        <!-- disable body scroll which navbar is in active -->
        <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
        </script>
        <!-- disable body scroll which navbar is in active -->

        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
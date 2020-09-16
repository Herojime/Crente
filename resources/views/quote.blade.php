<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive bootstrap landing template">
        <meta name="author" content="Themesdesign">

        <link rel="shortcut icon" href="images/favicon.png">

        <title>Crente | Inicio</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700|Roboto:400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Raleway:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Google Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Iconify Icons -->
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        

        <!-- Materialdesign icons css -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet">

        <!-- Mobirise icons css -->
        <link href="css/mobiriseicons.css" rel="stylesheet">

        <!-- Magnific-popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">


        <!--Slider-->
        <link rel="stylesheet" href="css/owl.carousel.css"/> 
        <link rel="stylesheet" href="css/owl.theme.css"/> 
        <link rel="stylesheet" href="css/owl.transitions.css"/>

        <!-- Custom styles for this template -->
        <link href="css/menu.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/animate.css"/>

        <!--Template Color-->
        <link href="css/colors/default.css" rel="stylesheet">
    </head>

	<body>

		<!-- START NAVIGATION BAR -->
        <header id="topnav" class="defaultscroll fixed-top sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a href="/" class="logo text-uppercase">
                        <img src="images/logo-dark.png" alt="" class="logo-light" height="24" />
                        <img src="images/logo-dark.png" alt="" class="logo-dark" height="24" />
                    </a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="active">
                            <a href="/">Inicio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>        
        <!-- END NAVIGATION BAR -->

		<!-- CONTACT SECTION START-->
        <section class="section " id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title text-center">
                            <h2><b>Cotiza</b> tu proyecto</h2>
                            <span class="title-border"><i class="mdi mdi-set-none"></i></span>
                        </div>
                    </div>
                </div>              
                <div class="custom-form mt-4 pt-4">
                    <div id="message"></div>
                    <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Tu nombre..." >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Correo Electronico</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Tu correo electronico..." >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="subject">Tema</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Tu tema.." />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="comments">Mensaje</label>
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Tu mensaje..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-custom" value="Enviar Mensaje">
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
        </section> 
        <!-- CONTACT SECTION END-->
	
		<!-- FOOTER START -->
        <section class="section bg-light"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="text-uppercase footer-title">Sobre Crente</p>
                        <ul class="list-unstyled company-sub-menu">
                            <li><a href="#">Sobre Nosotros</a></li>
                            <li><a >Ofertas de empleo</a></li>
                            <li><a >Terminos</a></li>
                            <li><a >Privacidad</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <p class="text-uppercase footer-title">Recursos</p>
                        <ul class="list-unstyled company-sub-menu">
                            <li><a >Blog</a></li>
                            <li><a href="#">Ayuda</a></li>
                            <li>
                            	<!--
                            	<div class="text-center search-form mt-4">
                            	<form action="#" class="justify-content-center">
                                	<input type="text" placeholder="Correo electronico">
                                	<button type="submit" class="btn btn-custom">Subscribete</button>
                            	</form> 
                             	</div>
                             	-->
                             	<!--START NEWSTELLER MODAL -->
                             	<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
								  aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header text-center">
								        <h4 class="modal-title w-100 font-weight-bold">Subscribete</h4>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body mx-3">
								        <div class="md-form mb-5">
								          <i class="mdi mdi-account prefix grey-text"></i>
								          <label data-error="wrong" data-success="right" for="form3">Nombre</label>
								          <input type="text" id="form3" class="form-control validate">
								        </div>

								        <div class="md-form mb-4">
								          <i class="mdi mid-email prefix grey-text"></i>
								          <label data-error="wrong" data-success="right" for="form2">Correo electronico</label>
								          <input type="email" id="form2" class="form-control validate">
								        </div>

								      </div>
								      <div class="modal-footer d-flex justify-content-center">
								        <button class="btn btn-indigo">Enviar <i class="fas fa-paper-plane-o ml-1"></i></button>
								      </div>
								    </div>
								  </div>
								</div>

								<div>
								  <a href="" class="" data-toggle="modal" data-target="#modalSubscriptionForm">Boletin de noticias</a>
								</div>
								<!--START NEWSTELLER MODAL -->
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <p class="text-uppercase footer-title">Contactanos</p>
                        <div class="contact-us">
                            <p> <i class="mdi mdi-phone"></i> +52 686 239 04 27</p>
                            <p> <i class="mdi mdi-email"></i> Contact@crente.net</p>
                        </div>
                        <ul class="footer-icons list-inline mt-4"> 
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-facebook"></i></a></li> 
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-instagram"></i></a></li> 
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="mdi mdi-linkedin"></i></a></li>  
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER START -->


        <!-- COPYRIGHT FOOTER START -->
        <div class="footer-alt bg-dark">
            <p class="copy-rights">Crente© Derechos de autor 2020, Todos los derechos reservados.</p>
        </div>
        <!-- COPYRIGHT FOOTER END -->

        <!-- JS START -->
            <!-- js placed at the end of the document so the pages load faster -->
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/jquery.easing.min.js"></script>
            <script src="js/owl.carousel.min.js" type="text/javascript"></script>
            <script src="js/scrollspy.min.js" type="text/javascript"></script>
            <!-- Typed -->
            <script src="js/typed.js" type="text/javascript"></script>
            <!-- Magnific Popup -->
            <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
            <!--Partical js-->
            <script src="js/particles.js"></script>  
            <script src="js/particles.app.js"></script>  
            <!--common script for all pages-->
            <script src="js/jquery.app.js"></script>
            <script src="js/main.js"></script>
            <script type="text/javascript">
            $(".element").each(function(){
                var $this = $(this);
                $this.typed({
                strings: $this.attr('data-elements').split(','),
                typeSpeed: 100, // typing speed
                backDelay: 3000 // pause before backspacing
                });
            });
            </script>
        <!-- JS END -->
	</body>
</html>
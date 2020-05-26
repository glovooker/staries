<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="logo.ico">
    <title>Staries</title>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:600&display=swap" rel="stylesheet">
    <script src="js/removeBanner.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylemymhome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/et-line.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/vertical.min.css" rel="stylesheet">

    <!--Delete after config-->
    <link href="css/style.changer.css" rel="stylesheet">
    <link id="theme" href="css/theme/thememym.css" rel="stylesheet">
    <style media="screen">
      #redes-sociales a:before{
        border:1px solid #FC595A;
      }
      #redes-sociales i:before{
        color:#FC595A;
      }
      #redes-sociales{
        margin-left: 10px;
      }
    </style>
  </head>
  <body class="appear-animate">
    <?php
			if (isset($_SESSION['loggedin'])) {
			}
			else {
					echo "<div class='alert alert-danger mt-4' role='alert'>
					<h4>You need to log in to access this page.</h4>
					<p><a href='Login/login.html'>Log in Here!</a></p></div>";
					exit;
			}
		?>
    <div id="top"></div>
    <!-- Navigation panel-->
    <nav class="main-nav white transparent stick-fixed">
      <div class="full-wrapper relative clearfix">
        <!-- Logo ( paste you text or image)-->
        <div class="nav-logo-wrap"><a href="staries-home.php" class="logo" style="color:#3590AD;"><span class="higl">Star</span>ies</a></div>
        <div class="navbar-mobile"><i class="fa fa-bars"></i></div>
        <!-- Main Menu-->
        <div class="inner-nav navbar-desktop">
          <ul class="clearlist scroll scroll-nav">
            <li class="active"><a href="staries-home.php"> Volver a Inicio</a></li>
            <li><a href="#" id="user" class="menu-has-sub"><?php echo $_SESSION['name']; ?><i class="fa fa-angle-down"></i></a>
              <!-- Sub-->
              <ul class="menu-sub">
                <li><a href="Login/logout.php">Cerrar Sesión <ion-icon name="log-out" style="font-size:20px;margin-bottom:-5px;margin-left:55px;"></ion-icon></a></li>
              </ul>
              <!-- End Sub-->
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="hero" class="full-screen">
      <div data-top="transform: scale3d(1,1,1)" data-top-bottom="transform: scale3d(.75,.75,1)" data-anchor-target="#hero" class="parallax parallax-hero full-screen bg-dark-50">
        <!--Start Slider-->
        <div class="fullwidth-slider owl-high-pagination">
          <div data-background="img/mym/mym-square.png" class="full-screen bg-img bg-dark-50">
            <div class="hero-content">
              <div class="hero-content-inner">
                <div data-effect="fadeInDown" class="hs-line-2 animate-e">Gabriel Lobo</div>
                <h1 data-effect="fadeInLeft" class="hs-line-1 animate-e">Melodías y Memorias</h1>
                <div data-effect="fadeInUp" class="mt-30 animate-e"><a href="#service" class="scroll btn btn-coffee btn-border-w btn-round btn-medium">Leer Estrella</a><span>&nbsp; &nbsp;</span><a href="#about" class="scroll btn btn-coffee btn-border-w btn-round btn-medium hidden-xs">Ver Sipnosis</a></div>
              </div>
            </div><a href="#page" data-start="display: block" data-100-start="display: none" class="btn-scroll-down scroll"></a>
          </div>
          <div data-background="img/mym/mym-square.png" class="full-screen bg-img bg-dark-50">
            <div class="hero-content">
              <div class="hero-content-inner"><a href="img/mym/Melodías y Memorias - Gabriel Lobo.1080p.mp4" class="magnific mfp-iframe"><span data-effect="rotateIn" class="icon-big-round animate-e"><i class="fa fa-play"></i></span></a>
                <h1 data-effect="zoomIn" class="hs-line-5 animate-e">Ver Comercial</h1>
              </div>
            </div><a href="#page" data-start="display: block" data-100-start="display: none" class="btn-scroll-down scroll"></a>
          </div>
        </div>
      </div>
    </section>

    <div id="page" class="page">
      <!--Start section about-->
      <section id="about">
        <div class="container">
          <div class="row mt-40 mt-xs-20">
            <div class="col-md-12 text-center">
              <h3><b>Sinopsis</b></h3>
            </div>
          </div>
          <div class="row mt-60 mt-xs-30">
            <div class="col-md-8 col-md-offset-2 text-center">
              <blockquote data-wow-delay="0.1s" data-wow-duration="1s" class="about-quote wow fadeInUp">
                <p>Tyler es un chico que cuenta, página por página, sus experiencias más conmovedoras en el instituto; envolviendo cada una de ellas en melodías con su opinión acerca de lo que significan las relaciones en la vida escolar para él.</p>
              </blockquote>
            </div>
          </div>
        </div>
        <div id="facts" class="small-section bg-light mt-80 mt-xs-80" style="background: #FC595A;color: white;">
          <style media="screen">
            ion-icon{font-size: 45px; margin-bottom: -15px;}
          </style>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h4 class="alt-font" style="color: white;">Estadísticas</h4>
              </div>
            </div>
            <div class="row mt-60">
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><ion-icon name="trophy"></ion-icon><span class="focus-number">0</span></div>
                  <h5 class="fact-desc alt-font" style="color: white;">Premios</h5>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><ion-icon name="eye"></ion-icon><span class="focus-number"> <?php

									$handle = fopen("countermym.txt", "r");
									if(!$handle){

									 echo "0" ;

									}
									else {


										$counter = (int ) fread($handle,20);
										fclose ($handle);
										$counter++;
										echo "$counter";
									$handle = fopen("countermym.txt", "w" );
									fwrite($handle,$counter) ;
									fclose ($handle) ;
										}
									?></span></div>
                  <h5 class="fact-desc alt-font" style="color: white;">Visitas</h5>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><ion-icon name="list-box"></ion-icon><span class="focus-number">13</span></div>
                  <h5 class="fact-desc alt-font" style="color: white;">Capítulos</h5>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><li class="heart" style="visibility: hidden;"><ion-icon name="star" id="likes" style="visibility: visible; font-size:80px;margin-top:-10px;margin-left:5px;"></ion-icon><span class="focus-number" style="visibility: hidden;"></span></li></div>
                  <h5 class="fact-desc alt-font" style="color: white; margin-top:8px;">Estrella Completa</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Start section Service-->
      <section id="service" class="pb-40">
        <div class="container">
          <div class="row mt-40 mt-xs-20">
            <div class="col-md-12 text-center">
              <h3><b>Memorias</b></h3>
            </div>
          </div>
          <div data-wow-delay="0.1s" data-wow-duration="2s" class="row mt-60 mt-xs-30 wow fadeIn">
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Dedicatoria<br>y<br>Prólogo</h5>
                <div class="service-desc">
                  <br>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Dedicatoria y Prólogo/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 1</h5>
                <h5 class="alt-font">Hola, Soy Tyler</h5>
                <div class="service-desc">
                  <p>-This'll Be My Year-<br>-Train-</p>
                  <br><br>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 1/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 2</h5>
                <h5 class="alt-font">Audífonos</h5>
                <div class="service-desc">
                  <p>-Brother-<br>-Kodaline-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 2/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 3</h5>
                <h5 class="alt-font">Hermanos Mayores</h5>
                <div class="service-desc">
                  <p>-Count On Me - EP Version-<br>-Bruno Mars-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 3/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 4</h5>
                <h5 class="alt-font">Serpiente</h5>
                <div class="service-desc">
                  <p>-Weak-<br>-AJR-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 4/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 5</h5>
                <h5 class="alt-font">Te Quiero Como Amigo</h5>
                <div class="service-desc">
                  <p>-FRIENDS-<br>-Marshmello feat. Anne Marie-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 5/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 6</h5>
                <h5 class="alt-font">Corazón Roto</h5>
                <div class="service-desc">
                  <p>-A Different Way (with Lauv)-<br>-DJ Snake feat. Lauv-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 6/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 7</h5>
                <h5 class="alt-font">Primer Beso</h5>
                <div class="service-desc">
                  <p>-Monaco-<br>-MKTO-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 7/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 8</h5>
                <h5 class="alt-font">Cuento de Hadas</h5>
                <div class="service-desc">
                  <p>-Nandemonaiya - movie ver.-<br>-RADWIMPS-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 8/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 9</h5>
                <h5 class="alt-font">Introducción al Desenlace</h5>
                <div class="service-desc"  style="margin-top:-20px;">
                  <p>-Yumetourou-<br>-RADWIMPS-</p>
                  <br>
                  <p>-Cold-<br>-Maroon 5 feat. Future-</p>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 9/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 10</h5>
                <h5 class="alt-font">Nudo del Desenlace (Parte I)</h5>
                <div class="service-desc"  style="margin-top:-20px;">
                  <p>-Holding Hands-<br>-Quinn XCII feat. Elohim-</p>
                  <br>
                  <p>-In Your Pocket-<br>-Maroon 5-</p>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 10/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 11</h5>
                <h5 class="alt-font">Nudo del Desenlace (Parte II)</h5>
                <div class="service-desc"  style="margin-top:-20px;">
                  <p style="font-size:14px;">-Everybody Dies In Their Nightmares-<br>-XXXTENTACION-</p>
                  <br>
                  <p>-The Man Who Never Lied-<br>-Maroon 5-</p>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 11/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 12</h5>
                <h5 class="alt-font">Desenlace del Desenlace</h5>
                <div class="service-desc"  style="margin-top:-20px;">
                  <p>-Let Go-<br>-Beau Young Prince-</p>
                  <br>
                  <p>-Leave The City-<br>-Twenty One Pilots-</p>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 12/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Memoria 13</h5>
                <h5 class="alt-font">Para Star...</h5>
                <div class="service-desc">
                  <p>-A Sky Full of Stars-<br>-Coldplay-</p>
                  <br>
                  <div class="col-md-12 text-center"><a href="Melodías y Memorias/Memoria 13/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Canciones<br>y<br>Recuerdos</h5>
                <div class="service-desc">
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos.php" class="btn btn-coffee btn-border">Leer Continuación</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Testimonial slider start-->
      <div class="fullwidth-testimotal-slider bg-dark-80 pt-100 pb-100">
        <!--Item start-->
        <div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center">
                <div class="section-icon"><span class="icon-quote"></span></div>
                <h3 class="alt-font">Frases de la Novela</h3>
                <blockquote class="testimonial">
                  <p> "Y ahí, ahí fue donde la conocí. Nunca había visto a una chica tan hermosa, ni en persona ni en televisión. Su voz era dulce, de la mano con una personalidad encantadora."</p>
                  <footer class="testimonial-author">Tyler Davidson, Melodías y Memorias</footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <!--Item end-->
        <!--Item start-->
        <div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center">
                <div class="section-icon"><span class="icon-quote"></span></div>
                <h3 class="alt-font">Frases de la Novela</h3>
                <blockquote class="testimonial">
                  <p> "No pensé que fuera a conseguir mucho más que un simple compañero."</p>
                  <footer class="testimonial-author">Tyler Davidson, Melodías y Memorias</footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <!--Item end-->
        <!--Item start-->
        <div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center">
                <div class="section-icon"><span class="icon-quote"></span></div>
                <h3 class="alt-font">Frases de la Novela</h3>
                <blockquote class="testimonial">
                  <p> "Y eso hacía que mi miedo a que nuestros destinos difirieran disminuyera."</p>
                  <footer class="testimonial-author">Tyler Davidson, Melodías y Memorias</footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <!--Item end -->
      </div>

      <section id="team">
        <div class="container">
          <div class="row mt-40 mt-xs-20">
            <div class="col-md-12 text-center">
              <h3>Conoce al autor detrás de la <b>estrella</b></h3>
            </div>
          </div>
          <div class="row mt-80 mt-xs-40 mb-80 mb-xs-40 text-center">
            <div class="col-sm-12">
              <figure class="team-item"><img src="img/team/p10.jpg" style="width: 200px; height: 200px;" alt="200x200" class="resp img-circle">
                <div class="social-links team-social" id="redes-sociales" style="margin-left:500px;"><a href="https://twitter.com/the_retirw" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/the_retirw/" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></div>
                <figcaption style="margin-left:5px;">
                  <h5 class="alt-font">Gabriel Lobo <br><small>Escritor y CEO de Staries</small></h5>
                  <p>El escritor del firmamento.</p>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      <!-- Page Footer Start-->
      <footer class="page-footer" style="background:#3590AD; color: white;">
        <div class="container text-center">
          <!-- Social links-->
          <div class="social-links"><a href="https://twitter.com/stariesbooks" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/stariesbooks/?hl=es-la" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></div>
          <div class="copy-right mt-50"><a href="#" class="alt-font" style="color: white;">© Staries 2020</a>
            <p style="color: white;">Caído del Cielo</p>
            <br>
            <br>
            <img src="img/team/GEO.png" width="200px" height="250px">
          </div>
        </div><a href="#top" class="scroll scroll-to-top"><i class="fa fa-angle-up"></i></a>
      </footer>
      <!-- Page footer end -->
    </div>
    <!--JS sctipts-->
    <script src="js/vendor/jquery-2.1.3.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/plagins.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

    <!--Delete after config-->
    <script src="js/style.changer.js"></script>
		<script src="js/jquery.js"></script>

    </script>
  </body>
</html>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="shortcut icon" href="../logo.ico">
    <title>Staries</title>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,500,100,700%7Dosis:400,500" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:600&display=swap" rel="stylesheet">
    <script src="../js/removeBanner.js"></script>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/stylecondicion.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/et-line.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/magnific-popup.css" rel="stylesheet">
    <link href="../css/vertical.min.css" rel="stylesheet">

    <!--Delete after config-->
    <link href="../css/style.changer.css" rel="stylesheet">
    <link id="theme" href="../css/theme/condicion.css" rel="stylesheet">
    <style media="screen">
      #redes-sociales a:before{
        border:1px solid #332E95;
      }
      #redes-sociales i:before{
        color:#332E95;
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
					<h4>You need to login to access this page.</h4>
					<p><a href='Login/login.html'>Login Here!</a></p></div>";
					exit;
			}
		?>
    <div id="top"></div>
    <!-- Navigation panel-->
    <nav class="main-nav white transparent stick-fixed">
      <div class="full-wrapper relative clearfix">
        <!-- Logo ( paste you text or image)-->
        <div class="nav-logo-wrap"><a href="../staries-home.php" class="logo" style="color:#800080;"><span class="higl">Star</span>ies</a></div>
        <div class="navbar-mobile"><i class="fa fa-bars"></i></div>
        <!-- Main Menu-->
        <div class="inner-nav navbar-desktop">
          <ul class="clearlist scroll scroll-nav">
            <li class="active"><a href="../staries-home.php"> Volver a Inicio</a></li>
            <li><a href="#" id="user" class="menu-has-sub"><?php echo $_SESSION['name']; ?><i class="fa fa-angle-down"></i></a>
              <!-- Sub-->
              <ul class="menu-sub">
                <li><a href="../Login/logout.php">Cerrar Sesión <ion-icon name="log-out" style="font-size:20px;margin-bottom:-5px;margin-left:55px;"></ion-icon></a></li>
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
          <div data-background="../img/portfolio/condicion.png" class="full-screen bg-img bg-dark-50">
            <div class="hero-content">
              <div class="hero-content-inner">
                <div data-effect="fadeInDown" class="hs-line-2 animate-e">Gabriel Lobo</div>
                <h1 data-effect="fadeInLeft" class="hs-line-1 animate-e">La Condición Humana</h1>
                <div data-effect="fadeInUp" class="mt-30 animate-e"><a href="loader/index.html" class="scroll btn btn-coffee btn-border-w btn-round btn-medium">Leer Estrella</a><span>&nbsp; &nbsp;</span><a href="#about" class="scroll btn btn-coffee btn-border-w btn-round btn-medium hidden-xs">Ver Sipnosis</a></div>
              </div>
            </div><a href="#page" data-start="display: block" data-100-start="display: none" class="btn-scroll-down scroll"></a>
          </div>
          <div data-background="../img/portfolio/destello.png" class="full-screen bg-img bg-dark-50">
            <div class="hero-content">
              <div class="hero-content-inner">
                <div data-effect="fadeInDown" class="hs-line-2 animate-e">Similar:</div>
                <h1 data-effect="fadeInLeft" class="hs-line-1 animate-e">El Destello Caído<br>del<br>Firmamento</h1>
                <div data-effect="fadeInUp" class="mt-30 animate-e"><a href="../El Destello Caído del Firmamento/El Destello Caído del Firmamento.php" class="scroll btn btn-coffee btn-border-w btn-round btn-medium">Leer Estrella</a></div>
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
                <p>El caballero de brillante armadura...</p>
              </blockquote>
            </div>
          </div>
        </div>
        <div id="facts" class="small-section bg-light mt-80 mt-xs-80" style="background: #332E95;color: white;">
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

									$handle = fopen("counterch.txt", "r");
									if(!$handle){

									 echo "0" ;

									}
									else {


										$counter = (int ) fread($handle,20);
										fclose ($handle);
										$counter++;
										echo "$counter";
									$handle = fopen("counterch.txt", "w" );
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

      <!--Testimonial slider start-->
      <div class="fullwidth-testimotal-slider bg-dark-80 pt-100 pb-100">
        <!--Item start-->
        <div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center">
                <div class="section-icon"><span class="icon-quote"></span></div>
                <h3 class="alt-font">Frases del Cuento</h3>
                <blockquote class="testimonial">
                  <p> "Por la maldad que arrasa este mundo, las estrellas nos han abandonado."</p>
                  <footer class="testimonial-author">Gabriel Lobo, La Condición Humana</footer>
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
                  <p> "Si quieres entender el verdadero valor de tu anhelada condición, debes demostrar que, pese a los ensaltamientos que recibas, o los logros que alcances, o las vestiduras que portes, el humano dentro de ti siempre será el mismo."</p>
                  <footer class="testimonial-author">La Reina de las Hadas, La Condición Humana</footer>
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
                  <p> "Espero haberte ayudado un poco a descubrir cuál es tu condición humana."</p>
                  <footer class="testimonial-author">Gabriel Lobo, La Condición Humana</footer>
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
              <figure class="team-item"><img src="../img/team/p10.jpg" style="width: 200px; height: 200px;" alt="200x200" class="resp img-circle">
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
      <footer class="page-footer" style="background:	#332E95; color: white;">
        <div class="container text-center">
          <!-- Social links-->
          <div class="social-links"><a href="https://twitter.com/stariesbooks" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/stariesbooks/?hl=es-la" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></div>
          <div class="copy-right mt-50"><a href="#" class="alt-font" style="color: white;">© Staries 2019</a>
            <p style="color: white;">Caído del Cielo</p>
            <br>
            <br>
            <img src="../img/team/GEO.png" width="200px" height="250px">
          </div>
        </div><a href="#top" class="scroll scroll-to-top"><i class="fa fa-angle-up"></i></a>
      </footer>
      <!-- Page footer end -->
    </div>
    <!--JS sctipts-->
    <script src="../js/vendor/jquery-2.1.3.min.js"></script>
    <script src="../js/smoothscroll.js"></script>
    <script src="../js/plagins.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;amp;language=en"></script>
    <script src="../js/gmap3.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.fitvids.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/contact-form.js"></script>
    <!--[if lt IE 10]><script type="text/javascript" src="../js/placeholder.js"></script><![endif]-->

    <!--Delete after config-->
    <script src="../js/style.changer.js"></script>
  </body>

<!-- Mirrored from dexifly.com/exline/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 15:40:57 GMT -->
</html>

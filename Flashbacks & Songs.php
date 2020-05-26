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
    <link href="css/stylecyrhome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/et-line.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/vertical.min.css" rel="stylesheet">

    <!--Delete after config-->
    <link href="css/style.changer.css" rel="stylesheet">
    <link id="theme" href="css/theme/themecyr.css" rel="stylesheet">
    <style media="screen">
      #redes-sociales a:before{
        border:1px solid #22738E;
      }
      #redes-sociales i:before{
        color:#22738E;
      }
      #redes-sociales{
        margin-left: 10px;
      }
      #enlace_desactivado {
      pointer-events: none;
      cursor: default;
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
        <div class="nav-logo-wrap"><a href="staries-home.php" class="logo" style="color:#505050;"><span class="higl">Star</span>ies</a></div>
        <div class="navbar-mobile"><i class="fa fa-bars"></i></div>
        <!-- Main Menu-->
        <div class="inner-nav navbar-desktop">
          <ul class="clearlist scroll scroll-nav">
            <li class="active"><a href="staries-home.php"> Back Home</a></li>
            <li><a href="#" id="user" class="menu-has-sub"><?php echo $_SESSION['name']; ?><i class="fa fa-angle-down"></i></a>
              <!-- Sub-->
              <ul class="menu-sub">
                <li><a href="Login/logout.php">Log Out <ion-icon name="log-out" style="font-size:20px;margin-bottom:-5px;margin-left:55px;"></ion-icon></a></li>
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
          <div data-background="img/cyr/f&s.png" class="full-screen bg-img bg-dark-50">
            <div class="hero-content">
              <div class="hero-content-inner">
                <div data-effect="fadeInDown" class="hs-line-2 animate-e">Gabriel Lobo</div>
                <h1 data-effect="fadeInLeft" class="hs-line-1 animate-e">Flashbacks & Songs</h1>
                <div data-effect="fadeInUp" class="mt-30 animate-e"><a href="#service" class="scroll btn btn-coffee btn-border-w btn-round btn-medium">Read Star</a><span>&nbsp; &nbsp;</span><a href="#about" class="scroll btn btn-coffee btn-border-w btn-round btn-medium hidden-xs">Read Synopsis</a></div>
              </div>
            </div><a href="#page" data-start="display: block" data-100-start="display: none" class="btn-scroll-down scroll"></a>
          </div>
          <div data-background="img/mym/m&m.png" class="full-screen bg-img bg-dark-50">
            <div class="hero-content">
              <div class="hero-content-inner">
                <div data-effect="fadeInDown" class="hs-line-2 animate-e">Prequel:</div>
                <h1 data-effect="fadeInLeft" class="hs-line-1 animate-e">Memories & Melodies</h1>
                <div data-effect="fadeInUp" class="mt-30 animate-e"><a href="Memories & Melodies.php" class="scroll btn btn-coffee btn-border-w btn-round btn-medium">Read Previous Star</a></div>
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
                <p>In this sequel, Tyler keeps writing the consequences of what happened in his past memories, now named flashbacks. However, in this second part, Tyler is writing all that happened, not to us, but to an unknown character 2 years after what we read in the past chapters, leaving in doubt everything that happened during those long 24 months in high school, including all the friendships and enmities forged until then.</p>
              </blockquote>
            </div>
          </div>
        </div>
        <div id="facts" class="small-section bg-light mt-80 mt-xs-80" style="background: #22738E;color: white;">
          <style media="screen">
            ion-icon{font-size: 45px; margin-bottom: -15px;}
          </style>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h4 class="alt-font" style="color: white;">Stats</h4>
              </div>
            </div>
            <div class="row mt-60">
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><ion-icon name="trophy"></ion-icon><span class="focus-number">0</span></div>
                  <h5 class="fact-desc alt-font" style="color: white;">Awards</h5>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><ion-icon name="eye"></ion-icon><span class="focus-number"> <?php

									$handle = fopen("countercyr.txt", "r");
									if(!$handle){

									 echo "0" ;

									}
									else {


										$counter = (int ) fread($handle,20);
										fclose ($handle);
										$counter++;
										echo "$counter";
									$handle = fopen("countercyr.txt", "w" );
									fwrite($handle,$counter) ;
									fclose ($handle) ;
										}
									?></span></div>
                  <h5 class="fact-desc alt-font" style="color: white;">Views</h5>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><ion-icon name="list-box"></ion-icon><span class="focus-number">17</span></div>
                  <h5 class="fact-desc alt-font" style="color: white;">Chapters</h5>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 text-center">
                <div class="fact-item">
                  <div class="fact-number"><li class="heart" style="visibility: hidden;"><ion-icon name="star" id="likes" style="visibility: visible; font-size:80px;margin-top:-10px;margin-left:5px;"></ion-icon><span class="focus-number" style="visibility: hidden;"></span></li></div>
                  <h5 class="fact-desc alt-font" style="color: white; margin-top:8px;">Completed Star</h5>
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
              <h3><b>Flashbacks</b></h3>
            </div>
          </div>
          <div data-wow-delay="0.1s" data-wow-duration="2s" class="row mt-60 mt-xs-30 wow fadeIn">
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Dedicatory<br>and<br>Prologue</h5>
                <div class="service-desc">
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Dedicatoria y Prólogo/loader/index.html" class="btn btn-coffee btn-border">Read</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Flashback 1</h5>
                <h5 class="alt-font">Alcohol</h5>
                <div class="service-desc">
                  <p>-Sober Up-<br>-AJR feat. Rivers Cuomo-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 1/loader/index.html" class="btn btn-coffee btn-border">Read</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Flashback 2</h5>
                <h5 class="alt-font">Parties</h5>
                <div class="service-desc">
                  <p>-Without You-<br>-Avicii feat. Sandro Cavazza-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 2/loader/index.html" class="btn btn-coffee btn-border">Read</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Flashback 3</h5>
                <h5 class="alt-font">Ruptura</h5>
                <div class="service-desc">
                  <p>-Scared to Be Lonely-<br>-Martin Garrix feat. Dua Lipa-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 3/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Recuerdo 4</h5>
                <h5 class="alt-font">¿Amigos?</h5>
                <div class="service-desc">
                  <p>-Melody-<br>-James Blunt feat. Lost Frequencies-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 4/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Recuerdo 5</h5>
                <h5 class="alt-font">Químicos</h5>
                <div class="service-desc">
                  <p>-fuck, i'm lonely-<br>-Lauv feat. Anne-Marie-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 5/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Recuerdo 6</h5>
                <h5 class="alt-font">Prólogo del Desastre</h5>
                <div class="service-desc">
                  <p>-Strength-<br>-The Alarm-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 6/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Recuerdo 7</h5>
                <h5 class="alt-font">El Sobre Azul</h5>
                <div class="service-desc">
                  <p>-Teeth-<br>-5 Seconds of Summer-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 7/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Recuerdo 8</h5>
                <h5 class="alt-font">El Desastre (Parte I)</h5>
                <div class="service-desc">
                  <p>-Couldn't Tell-<br>-Dermot Kennedy-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 8/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Recuerdo 9</h5>
                <h5 class="alt-font">El Sobre Verde</h5>
                <div class="service-desc">
                  <p>-Hey, Sould Sister-<br>-Train-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 9/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Recuerdo 10</h5>
                <h5 class="alt-font">Interludio del Desastre</h5>
                <div class="service-desc">
                  <p>-The Good In Me-<br>-Jon Bellion-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 10/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Recuerdo 11</h5>
                <h5 class="alt-font">El Sobre Amarillo</h5>
                <div class="service-desc">
                  <p>-How to Save a Life-<br>-The Fray-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 11/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Recuerdo 12</h5>
                <h5 class="alt-font">El Desastre (Parte II)</h5>
                <div class="service-desc">
                  <p>-U & US-<br>-Quinn XCII-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 12/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Recuerdo 13</h5>
                <h5 class="alt-font">El Sobre Rosa</h5>
                <div class="service-desc">
                  <p>-Good Things Fall Apart-<br>-ILLENIUM feat. Jon Bellion-</p>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 13/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item"><i></i>
                <h5 class="alt-font">Recuerdo 14</h5>
                <h5 class="alt-font">La Nota</h5>
                <div class="service-desc">
                  <p>-Are You Bored Yet? - Live From Henson Studios-<br>-Wallows-</p>
                  <br>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 14/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item">
                <br>
                <h5 class="alt-font"style="font-size:14px;"><br>Recuerdo !</h5>
                <h5 class="alt-font"style="font-size:14px;">Interludio</h5>
                <div class="service-desc">
                  <p>-From Michigan With Love-<br>-Quinn XCII-</p>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo !/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item">
                <br>
                <h5 class="alt-font"style="font-size:14px;"><br>Recuerdo 15</h5>
                <h5 class="alt-font"style="font-size:14px;">Fuegos Artificiales</h5>
                <div class="service-desc">
                  <p>-all the kids are depressed-<br>-Jeremy Zucker-</p>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 15/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item">
                <br>
                <h5 class="alt-font"style="font-size:14px;"><br>Recuerdo 16</h5>
                <h5 class="alt-font"style="font-size:14px;">Hasta Siempre, Hermano</h5>
                <div class="service-desc">
                  <p>-Old Friends-<br>-Coldplay-</p>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 16/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <div class="service-item">
                <br>
                <h5 class="alt-font"style="font-size:14px;"><br>Recuerdo 17</h5>
                <h5 class="alt-font"style="font-size:14px;">Adiós</h5>
                <div class="service-desc">
                  <p>-The Scientist-<br>-Coldplay-</p>
                  <br>
                  <div class="col-md-12 text-center"><a href="Canciones y Recuerdos/Recuerdo 17/loader/index.html" class="btn btn-coffee btn-border">Leer</a></div>
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
                  <p> "Por aquella memoria que prometí narrarte bajo una noche estrellada..."</p>
                  <footer class="testimonial-author">Gabriel Lobo, Canciones y Recuerdos</footer>
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
                  <p> "Así que acomódate, porque te voy a contar una historia."</p>
                  <footer class="testimonial-author">Tyler Davidson, Canciones y Recuerdos</footer>
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
                  <p> "La clave del éxito no yace en los libros, ni en el dinero ni la fama. Está en ti y en mí. Porque el éxito no significa ganar fortunas y ser mundialmente conocido. Una persona que ayuda a otra, aunque sea con un simple hola, cada día, sin falta, ya es exitosa. Pero el éxito se alcanza con dolor y esfuerzo. Todos tenemos la clave de nuestra propia prosperidad. Pero depende de cada uno arriesgarse por conseguirla."</p>
                  <footer class="testimonial-author">Franklin, Canciones y Recuerdos</footer>
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
      <footer class="page-footer" style="background:#22738E; color: white;">
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
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;amp;language=en"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/contact-form.js"></script>
    <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

    <!--Delete after config-->
    <script src="js/style.changer.js"></script>
  </body>

<!-- Mirrored from dexifly.com/exline/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 15:40:57 GMT -->
</html>
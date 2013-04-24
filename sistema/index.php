<?php include("assets/functions/utils.php");?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Estagios</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/flexslider.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
        <!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brand" href="index.html">Estagios - um novo jeito de gerenciar...</a>
                            </h1>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li class="current-page">
                                        <!-- <a href="index.html"><i class="icon-home"></i><br />Inicio</a> -->
										<?php echo link_to("<i class='icon-home'></i><br />Inicio", "?pag=home"); ?>
                                    </li>
                                    <li>
                                        <!-- <a href="portfolio.html"><i class="icon-camera"></i><br />Portfolio</a> -->
										<?php echo link_to("<i class='icon-camera'></i><br />Portfolio", "?pag=portfolio"); ?>
                                    </li>
                                    <li>
                                        <!-- <a href="#"><i class="icon-comments"></i><br />Blog</a> -->
										<?php echo link_to("<i class='icon-comments'></i><br />Blog", "?pag=#"); ?>
                                    </li>
                                    <li>
                                        <!-- <a href="services.html"><i class="icon-tasks"></i><br />Services</a> -->
										<?php echo link_to("<i class='icon-tasks'></i><br />Services", "?pag=services"); ?>
                                    </li>
                                    <li>
										<!-- <a href="?pag=about"><i class="icon-user"></i><br />About</a> -->
										<?php echo link_to("<i class='icon-user'></i><br />Sobre", "?pag=about"); ?>
                                    </li>
                                    <li>
                                        <!-- <a href="contact.html"><i class="icon-envelope-alt"></i><br />Contact</a> -->
										<?php echo link_to("<i class='icon-envelope-alt'></i><br />Contato", "?pag=contact"); ?>
										
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="container">
			Teste
			<?php //include("pags/home.php"); ?>
		</div>
				
        <!-- Slider -->
        <div class="slider">
            <div class="container">
				<? 	if (isset($_GET['pag'])) {
						$pag = $_GET['pag'];
					}else{
						$pag = "home";
					}
					render_partial($pag); ?>
				<? //include("pags/home.php"); ?>
                <!--
				<div class="row">
                    <div class="span10 offset1">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="assets/img/slider/1.jpg">
                                    <img src="assets/img/slider/1.jpg">
                                    <p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.</p>
                                </li>
                                <li data-thumb="assets/img/slider/2.jpg">
                                    <img src="assets/img/slider/2.jpg">
                                    <p class="flex-caption">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                </li>
                                <li data-thumb="assets/img/slider/5.jpg">
                                    <img src="assets/img/slider/5.jpg">
                                    <p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.</p>
                                </li>
                                <li data-thumb="assets/img/slider/6.jpg">
                                    <img src="assets/img/slider/6.jpg">
                                    <p class="flex-caption">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
				-->
			</div>
        </div>

        
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="widget span3">
                        <h4>About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                        <p><a href="">Read more...</a></p>
                    </div>
                    <div class="widget span3">
                        <h4>Latest Tweets</h4>
                        <div class="show-tweets"></div>
                    </div>
                    <div class="widget span3">
                        <h4>Flickr Photos</h4>
                        <ul class="flickr-feed"></ul>
                    </div>
                    <div class="widget span3">
                        <h4>Contact Us</h4>
                        <p><i class="icon-map-marker"></i> Address: Via Principe Amedeo 9, 10100, Torino, TO, Italy</p>
                        <p><i class="icon-phone"></i> Phone: 0039 333 12 68 347</p>
                        <p><i class="icon-user"></i> Skype: Andia_Agency</p>
                        <p><i class="icon-envelope-alt"></i> Email: <a href="">contact@andia.co.uk</a></p>
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row">
                    <div class="copyright span4">
                        <p>Copyright 2012 Andia - All rights reserved. Template by <a href="http://azmind.com">Azmind</a>.</p>
                    </div>
                    <div class="social span8">
                        <a class="facebook" href=""></a>
                        <a class="dribbble" href=""></a>
                        <a class="twitter" href=""></a>
                        <a class="pinterest" href=""></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/jquery.tweet.js"></script>
        <script src="assets/js/jflickrfeed.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/jquery.quicksand.js"></script>
        <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>


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
										<?php echo link_to("<i class='icon-list-alt'></i><br />Documentos", "?pag=portfolio"); ?>
                                    </li>
                                    <li>
                                        <!-- <a href="#"><i class="icon-comments"></i><br />Blog</a> -->
										<?php echo link_to("<i class='icon-comments'></i><br />Blog", "?pag=#"); ?>
                                    </li>
                                    <li>
                                        <!-- <a href="services.html"><i class="icon-tasks"></i><br />Services</a> -->
										<?php echo link_to("<i class='icon-tasks'></i><br />Estágios", "?pag=services"); ?>
                                    </li>
                                    <li>
										<!-- <a href="?pag=about"><i class="icon-user"></i><br />About</a> -->
										<?php echo link_to("<i class='icon-user'></i><br />Sobre", "?pag=about"); ?>
                                    </li>
                                    <li>
                                        <!-- <a href="contact.html"><i class="icon-envelope-alt"></i><br />Contact</a> -->
										<?php echo link_to("<i class='icon-envelope-alt'></i><br />Contato", "?pag=contact"); ?>
										
                                    </li>
									<li class="separator"></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle usermenu" data-toggle="dropdown">
											<i class='icon-envelope-alt'></i><br />
											<span>&nbsp;&nbsp;Logar</span>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="#">Perfil</a>
											</li>
											<li>
												<a href="#">Configurações</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="../index.htm">Sair</a>
											</li>
										</ul>
									</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div

				
        <!-- Slider -->
        <div class="slider">
            <div class="container">
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

        <div class="what-we-do container">
            <div class="row">
                
			<nav id="left-panel" style="height: 100%; position: fixed; align: center; top: 200px; left: 15px;">
				<div class="nav-collapse collapse" id="left-panel-content" style="overflow: hidden;">
					<ul class="nav pull-right" style="-webkit-transition: -webkit-transform 0ms; transition: -webkit-transform 0ms; -webkit-transform-origin: 0px 0px; 
								-webkit-transform: translate3d(0px, 0px, 0);">
						<li class="active" >
							<a href="dashboard.htm">
								<div class="service" style="height:5px; width:100px text-align:left;">
									<i class="icon-envelope"></i>
									OPCAOTESTE<br>
								</div>
							</a>
						</li>
						<li>
							<div style="align:left;"><a href="#" ><span class="icon-th-large"></span>Layout</a></div>
						</li>
						<li>
							<a href="#"><span class="icon-font"></span>Typography</a>
						</li>
						<li>
							<a href="#"><span class="icon-edit"></span>Forms</a>
						</li>
						<li>
							<a href="#"><span class="icon-table"></span>Tables</a>
						</li>
						
						<li>
							<a href="#"><span class="icon-inbox"></span>Components</a>
						</li>
						<li>
							<a href="#"><span class="icon-cog"></span>JavaScript</a>
						</li>
						<li class="lp-dropdown">
							<a href="#" class="lp-dropdown-toggle" id="extras-dropdown"><span class="icon-reorder"></span>Extras</a>
							
						</li>
						<li class="lp-dropdown">
							<a href="#" class="lp-dropdown-toggle" id="pages-dropdown"><span class="icon-file-alt"></span>Pages</a>
							
						</li>
					</ul>
				</div>
				<div class="icon-caret-down"></div>
				<div class="icon-caret-up"></div>
			</nav>
		</div>
		</div>
		
		<div class="slider">
		<div class="container">
			<? 	if (isset($_GET['pag'])) {
					$pag = $_GET['pag'];
				}else{
					$pag = "home";
				}
				render_partial($pag); 
			?>
		</div>
        </div>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="widget span3">
                        <h4>Sobre nós</h4>
                        <p>Informações sobre a instituição.</p>
                        <p><a href="">Ler mais...</a></p>
                    </div>
                    <div class="widget span3">
                        <h4>Ultimos Tweets</h4>
                        <div class="show-tweets"></div>
                    </div>
                    <div class="widget span3">
                        <h4>Flickr Fotos</h4>
                        <ul class="flickr-feed"></ul>
                    </div>
                    <div class="widget span3">
                        <h4>Nos contate</h4>
                        <p><i class="icon-map-marker"></i> Endereço: Av. JK</p>
                        <p><i class="icon-phone"></i> Tel: (32) 91246030</p>
                        <p><i class="icon-user"></i> Skype: kerollensoares</p>
                        <p><i class="icon-envelope-alt"></i> Email: <a href="">kerollen.soares@gmail.com</a></p>
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row">
                    <div class="copyright span4">
                        <p>Copyright 2012 Kerollen - Todos os direitos reservados. Template by <a href="http://kerollen.com">Kerollen</a>.</p>
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


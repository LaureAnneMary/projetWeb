<!DOCTYPE HTML>
<!--
	Colorized by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		@yield('headtop')
		<title>BDE CESI BORDEAUX</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		@yield('headbottom')
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div id="logo-wrapper">
				<div class="container">
						
					<!-- Logo -->
						<div id="logo">
							<h1><a href="#">Le BDE cesi Bordeaux</a></h1>
						</div>
				</div>
			</div>			
			<div class="container">
				<!-- Nav -->
					<nav id="nav">
						<ul>

							<li class="active"><a href="/">Accueil</a></li>
							<li class="active"><a href="/Boite-à-idées">Boite à idées</a></li>
							<li class="active"><a href="/Toutes-les-manifestations">Toutes les manifestations</a></li>
                            <li class="active"><a href="/Boutique">Boutique</a></li>
                            <li class="active"><a href="/Connexion">Connexion/Inscription</a></li>
						</ul>
					</nav>
			</div>
		</div>

    <div id="main">

            @yield('Accueil')
            @yield('Inscription')
            @yield('Boite-à-idées')
			@yield('Boutique')
        	@yield('Toutes-les-manifestations')
    </div>

	<!-- Footer -->
		<footer>
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">BDE CESI Bordeaux</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
                <img class="d-flex ml-3" src="images/pics07jpg" alt="Generic placeholder image">
            </div>
		</footer>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<section>
					<p>Conditions</p>
				</section>
			</div>
		</div>

	</body>
</html>
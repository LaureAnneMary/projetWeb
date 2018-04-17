<!DOCTYPE HTML>
<!--
	Colorized by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)


    Site pour le bde cesi bordeaux réalisé avec le template colorized
    template.blade.php s'occupe de charger les base de notre site.
-->
<html>
	<head>
        <!--yield headtop permet d'ajouter des links/ scripts pour du contenue supplémentaire-->
		{{--@yield('headtop')--}}
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
			<link href="{{ asset('css/style.css') }}" rel="stylesheet">
			<link href="{{ asset('css/skel-noscript.css') }}" rel="stylesheet">
			<link href="{{ asset('css/style-desktop.css') }}" rel="stylesheet">
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

	<!-- Header -->
    <!--Contient le le bandeau, le titre et les puce de navigation du site-->
		<div id="header">
			<div id="logo-wrapper">
				<div class="container">
						
					<!-- Logo -->
						<div id="logo">
							<h1><a href="#">Le BDE cesi Bordeaux</a></h1>
						</div>
				</div>
			</div>

			<!-- Barre de navigation-->
			<!-- représente la barre de navigation du site. La partie css de celui-ci se trouve dans le fichier style.CSS -->
			<div class="container">
				<!-- Nav -->
					<nav id="nav">



						<ul>
							<li class="active"><a href="/">Accueil</a></li>
							<li class="active"><a href="/evenements">Boite à idées</a></li>
							<li class="active"><a href="/evenementsValider">Les Événements du mois </a></li>
                            <li class="active"><a href="/Boutique">Boutique</a></li>
							<!-- Authentication Links -->
							@guest
								<li class="active"><a  href="{{ route('login') }}">{{ __('Connexion') }}</a></li>
								<li class="active"><a  href="{{ route('register') }}">{{ __('Inscription') }}</a></li>
							@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->prenom }} <span class="caret"></span>
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li class="active"><a class="dropdown-item" href="{{ route('logout') }}"
										   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
											{{ __('se déconnecter') }}
									</a></li>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</li>
							@endguest
						</ul>
					</nav>
			</div>
		</div>

    <!--Main-->
    <!--Ajout du contenu supplémentaire / code de nouvelles pages vient s'insérer ici-->
    <div id="main">
		@yield('content')
    </div>


	<!-- Footer -->
	<!--Bas de la page-->
		<footer>
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">BDE CESI Bordeaux</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
		</footer>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				<section>
					<p>Mentions légales</p>
				</section>
			</div>
		</div>

	</body>
</html>
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
			<link href="{{ asset('css/style-desktop.css') }}" rel="stylesheet">
            <link href="{{ asset('css/style.css') }}" rel="stylesheet">
            <link href="{{ asset('css/skel-noscript.css') }}" rel="stylesheet">
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		{{--@yield('headbottom')--}}
        <!--Même que headtop-->
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
			<div class="container">
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="/">Accueil</a></li>
							<li class="active"><a href="/evenements">Boite à idées</a></li>
							<li class="active"><a href="/evenementsValider">Toutes les manifestations</a></li>
                            <li class="active"><a href="/Boutique">Boutique</a></li>
							<!-- Authentication Links -->
							@guest
								<li class="active"><a  href="{{ route('login') }}">{{ __('Connection') }}</a></li>
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
											{{ __('Logout') }}
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
    <!--Ajout du contenu supplémentaire-->
    <div id="main">
		@yield('content')
    </div>

	<!-- Footer -->
		<footer>
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-0 mb-1">BDE CESI Bordeaux</h5>
                    Le  BDE CESI Bordeaux est une association nommé le "bureau des élèves" qui a pour but de promouvoir la création d'association au sein du CESI.
                </div>
			</div>
		</footer>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
                <iframe
                        width="600"
                        height="450"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAlnAPZfqZupIK9wch0TzHw1ULLDBx_szQ
    &q=264+boulvard+godard,+33000+bordeaux" allowfullscreen>
                </iframe>
				<section>
					<p>Mentions légales</p>
				</section>
			</div>
		</div>
    @yield('script')
	</body>
</html>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Crété Jonathan &mdash; Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Crété Jonathan développeur" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="Crété Jonathan" />



	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon-code.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- myStyle  -->
	<link rel="stylesheet" href="myStyle.css">

	<!-- myStyle  -->
	<link rel="stylesheet" href="css/timelineHorizon.css">




	
	<link rel="stylesheet" href="css/style.css">

	
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<?php
			require('modals.html');
	?>
</head>

<body>
	<header role="banner" id="fh5co-header">
		<div class="container">
			<!-- <div class="row"> -->
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					 aria-controls="navbar">
						<i></i>
					</a>
					<a class="navbar-brand" href="index.php">Jonathan Crété</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						
						<li class="active">
							<a href="#" data-nav-section="intro">
								<span>Introduction</span>
							</a>
						</li>
						<li>
							<a href="#" data-nav-section="framework">
								<span>Framework et librairies</span>
							</a>
						</li>
						
						<li>
							<a href="#" data-nav-section="speAngu">
								<span>Spécialisation</span>
							</a>
						</li>
						<li>
							<a href="#" data-nav-section="actu">
								<span>Actualités</span>
							</a>
						</li>
						<li>
							<a href="#" data-nav-section="test">
								<span>Tests</span>
							</a>
						</li>
						
						<li>
							<a href="#" data-nav-section="sources">
								<span>Sources</span>
							</a>
						</li>


						<li>
							<a href="#" data-nav-section="contact">
								<span>Contact</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- </div> -->
		</div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/jsWalpaper.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							
							<h1 class="to-animate">JavaScript</h1>
							<h2 class="to-animate">Framework et librairies
							</br>
							<button style="margin : 20px 0;" onclick="document.location.href='index.php#sectionVeille'"id="btnBackVJ" class="btn btn-primary"> Retour au Portfolio  </button>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="slant"></div>
	</section>

	
	<section id="fh5co-testimonials" data-section="intro">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Introduction</h2>
					<div class="row">
						<div class="col-md-8  text-right to-animate">
							<h3>Histoire de JavaScript</h3>
							<p>
							JavaScript est un langage de programmation créé en <span class="toBold"> 1995 par Brendan Eich </span> qui travaillait pour la société Netscape.
							Le but originel du langage est de créer des scripts, c’est­ à­ dire des <span class="toBold"> programmes interprétés, qui sont exécutés par un navigateur, 
							principalement pour manipuler les données du DOM </span> (Document Object Model), c’est­ à ­dire les objets(au sens informatique du terme) 
							représentant les éléments du document balisé (par exemple, une page HTML) et alloués en mémoire du navigateur.
							</p>
						</div>
						<div class="col-md-4 to-animate">
							<img src="images/javascript.png" alt="frameworkjavascript" class="img-responsive">
						</div>
					</div>
					
					
					</br>
				
					<div class="row">
						
						<div class="col-md-12  text-left to-animate">
							<h3>Exemple d’utilisations de JavaScript </h3>
							<p><span class="toUnderline">Du côté client, les scripts JavaScript mis en œuvre par le navigateur sont utilisés pour :</span></p>
							<ul>
								<li><span class="toBold">Gérer l’événementiel lié à une page HTML</span> </li>
								<li><span class="toBold">Accéder aux éléments du DOM </span>(Le DOM représente la hiérarchie des objets créés par les balises (HTML...) en mémoire du navigateur.)</li>
								<li><span class="toBold">Gérer des flux de données asynchrones </span> avec le serveur via l’architecture AJAX (Asynchronous JavaScript and XML)</li>
								<li><span class="toBold">Gérer une communication bidirectionnelle entre clients et serveur(s) </span> </li>
								<li><span class="toBold">Créer des interfaces graphiques </span> en utilisant la balise "canvas" ou les bibliothèques D3.js ou dc.js</li>
							</ul>
							<p>Du côté serveur, les codes JavaScript mis en œuvre sont utilisés pour créer des serveurs HTTP très réactifs, car fondés sur l’architecture événementielle de JavaScript. 
							Le principal environnement JavaScript permettant de créer de tels serveurs est Node.js.
							</p>
						</div>
						
					</div>
					
					<div class="row ">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<section class="main-timeline-section">
								<div class="timeline-start"></div>
								<div class="conference-center-line"></div>
								<div class="conference-timeline-content">
									<div class="timeline-article timeline-article-top to-animate-2">
										<div class="content-date">
											<span>Années 2015</span>
										</div>
										<div class="meta-date"></div>
										<div class="content-box">
											<p>Améliorations et optimisations du langage (Applications web progressives...)</p>
										</div>
									</div>

									<div class="timeline-article timeline-article-top to-animate-2">
										<div class="content-date">
											<span>Années 2010</span>
										</div>
										<div class="meta-date"></div>
										<div class="content-box">
											<p>Profesionnalisation et structuration du langage (Node.js, Angular...)</p>
										</div>
									</div>
									<div class="timeline-article timeline-article-top to-animate-2">
										<div class="content-date">
											<span> Années 2000</span>
										</div>
										<div class="meta-date"></div>
										<div class="content-box">
											<p>Arrivée des librairies de manipulation du DOM</p>
										</div>
									</div>

									<div class="timeline-article timeline-article-top to-animate-2">
										<div class="content-date">
											<span>Années 1990</span>
										</div>
										<div class="meta-date"></div>
										<div class="content-box">
											<p>Introduction de JavaScript et des premiéres pages DHTML</p>
										</div>
									</div> 
								</div>
								<div class="timeline-end"></div>
							</section>
						</div>
					</div>
				</div>
					
			</div>
			
		</div>
	</section>


	<section id="fh5co-services" data-section="framework">
		<div class="container">
			<div class="row">
			<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate"> Framework &amp librairies </h2>
					
					<div class="row">
						<div class="col-md-8  text-right to-animate">
							<h3>Comment différencier librairie de Framework js ? </h3>
							<p>
							Une librairie est un <span class="toBold"> ensemble de fonctions qui permet de rapidement utiliser dans notre code source des classes de celle-ci sans avoir à les réécrire </span>,  
							alors qu’un Framework sera lui composé de  <span class="toBold"> plusieurs librairies et de composants permettant de rapidement concevoir des applications à l’aide de structures adaptées </span>.
							</p>
						</div>
						<div class="col-md-4 to-animate">
							<img src="images/liborframe.png" alt="distinguer framework de librairie" class="img-responsive">
						</div>
					</div>
					
					
					</br>
				
					<div class="row">
						
						<div class="col-md-12  text-left to-animate">
							<h3>Exemple de Framework ou librairies </h3>
							<div class="col-md-6">
								<p><span class="toUnderline"> Voici des exemples de librairies js : </span></p>

								<ul>
									<li><span class="toBold">JQuery</span> permet d’accéder et de modifier le DOM de manière très aisée, d’importer du serveur de manière asynchrone des données (via l’architecture AJAX) et propose un bel ensemble de widgets graphiques (par exemple, pour créer desonglets, dérouler des accordéons...)</li>
									<li><span class="toBold"> D3.js</span> permet de créer des interfaces graphiques en 2D en encapsulant le langage SVG.</li>
									<li><span class="toBold">Three.js </span> permet de créer des scènes 3D.</li>
									<li><span class="toBold">Decimal.js </span>Pour tout ce qui est du traitement des nombres : 
									Là où Javascript se limite aux entiers et décimaux (et octaux), Decimal.js  permet d’utiliser les exposants, les bases, les décimaux.</li>
									<li><span class="toBold">React.js</span> qui est utilisée pour la production de Facebook, instagram et Netflix. Il permet de construire des interfaces utilisateurs divisés en composants (front-end)</li>
								</ul>
							</div>
							
							<div class="col-md-6">
								<p><span class="toUnderline"> Et voici quelques Framework JavaScript:</span></p>
								<ul>
									<li><span class="toBold">Node.js </span>, Framework back-End est un environnement permettant d’exécuter du code JavaScript hors d’un navigateur. </li>
									<li><span class="toBold">Ember</span>, Il s'appuie sur une architecture de type MVC (modèle-vue-contrôleur). Il permet aux développeurs de créer des applications web monopage</li>
									<li><span class="toBold">Vue.js</span>, utilise le DOM virtuel, et préconise l’adoption des composants réactifs avec un flux mono-directionnel et se focalisent sur le rendering et le data binding (en laissant le routage et la gestion de l’état aux bibliothèques externes).</li>
									<li><span class="toBold">Angular </span>, Framework Front-end et orienté composant, abordant le TypeScript, ayant un module http et un système de validation des formulaires....</li>
									
								</ul>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>		
		</div>

	</section>
	
	<section id="fh5co-about" data-section="speAngu">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="">Spécialisation</h2>
					<div class="row">
						<div class="col-md-8  text-right to-animate">
							<h3>Définition</h3>
							<p>
							Angular est un Framework applicatif JavaScript développé par Google, 
							qui permet de créer des applications web monopages (c’est à dire complètement chargées sur le client avant toute utilisation par l’internaute). 
							Ces applications ne sollicitent le serveur que pour échanger des données (et non pour charger des pages web). 
							Angular est souvent couplé avec un serveur Node.js et en liaison avec un système de gestion de base de données NoSQL MongoDB.
							</p>
						</div>
						<div class="col-md-4">
							<img src="images/angular-presentation.png" alt="angular-presentation" class="img-responsive to-animate">
						</div>
					</div>
					
					</br>
					<div class="row">
						<div class="col-md-6">
							<img src="images/graphiqueAngu.png" alt="angular-presentation" class="img-responsive to-animate">
						</div>
						<div class="col-md-6  text-left to-animate">
							<h3>Développeurs Angular</h3>
							<p>
							Voici le nombre d'entretiens de recrutement que les  profils développeurs Angular obtiennent en 5 jours. Cela donne  une idée de l'attractivité de ce profil. </br> 
							<span class="toItalic">"La difficulté à recruter des développeurs Angular se situe principalement dans le nombre limité de personnes qui ont déjà géré des stacks entières en production, 
							et qui n'ont pas uniquement réalisé des projets personnels avec ce framework"</span>,</br>
							Pierre-Baptiste Béchu, cofondateur d'Aircall.
							
							</p>
							<small>(2016) Données  de Hired, Start-up américaine</small>
						</div>
					</div>
				
				</div>	
			</div>
			
			
		</div>
	</section>


	<section id="fh5co-work" data-section="actu">
		<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Actualités</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext to-animate">
								<h3>Flux d'actualités</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-bottom-padded-sm">
					

					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://jaxenter.com/road-to-angular-6-139479.html" id="popup-angularjax" class="fh5co-project-item  image-popup to-animate">
							<img src="images/angular-jax-resized.png" alt="Angular 6" class="img-responsive">
							<div class="fh5co-text">
								<h2>On the road to Angular v6: Unplanned rc coming right up</h2>
								<span>www.jaxenter.com
								</br>16 avril 2018
								
							</div>
						</a>
					</div>

					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://www.infoworld.com/article/3213244/javascript/whats-new-in-angular-5-easier-progressive-web-apps.html" id="popup-angularnew" class="fh5co-project-item image-popup to-animate">
							<img src="images/angular6.jpg" alt="Nouveauté angular 6" class="img-responsive">
							<div class="fh5co-text">
								<h2>What’s new in Angular: Version 6 release candidate is here</h2>
								<span>www.infoworld.com
								</br> 21 mars 2018
								
							</div>
						</a>
					</div>

					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://www.angularconf.com.au/" id="popup-angularconf" class="fh5co-project-item image-popup to-animate">
							<img src="images/angularconf.png" alt="Conférence angular australia" class="img-responsive">
							<div class="fh5co-text">
								<h2>ANGULAR CONFERENCE AUSTRALIA</h2>
								<span>www.angularconf.com.au
								</br> 21 mars sur Twitter
								
							</div>
						</a>
					</div>

					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://openclassrooms.com/courses/developpez-vos-applications-web-avec-angularjs" id="popup-angularopen" class="fh5co-project-item image-popup to-animate">
							<img src="images/angularOpen-resized.png" alt="Cours angularJS open" class="img-responsive">
							<div class="fh5co-text">
								<h2>Développez des applications Web avec Angular</h2>
								<span>openclassroom.com 
								</br> 14 mars 2018
								
							</div>
						</a>
					</div>

					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://www.lemondeinformatique.fr/actualites/lire-un-kit-de-composants-pour-le-framework-angular-de-google-70714.html" id="popup-angularkit" class="fh5co-project-item image-popup to-animate">
							<img src="images/kitcompo.jpg" alt="un kit de composant angularjs" class="img-responsive">
							<div class="fh5co-text">
								<h2>Un kit de composants pour...</h2>
								<span>www.lemondeinformatique.fr
								</br>30 Janvier 2018
								
								
							</div>
						</a>
					</div>
					
					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://www.eurelis.com/blog/angular-5" id="popup-angular5neuf" class="fh5co-project-item image-popup to-animate">
							<img src="images/angular-eurelis-resized.png" alt="Angular 5 nouveauté" class="img-responsive">
							<div class="fh5co-text">
								<h2>Angular 5, quoi de neuf ?</h2>
								<span>www.eurelis.com
								</br> 13 décembre 2017
								

							</div>
						</a>
					</div>



					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://www.developpez.com/actu/170633/Angular-5-0-est-disponible-la-nouvelle-version-du-framework-JavaScript-de-Google-veut-faciliter-la-creation-d-applications-Web-progressives/" id="popup-angular5dev" class="fh5co-project-item image-popup to-animate">
							<img src="images/Angular-5.png" alt="angular 5.0 disponible" class="img-responsive">
							<div class="fh5co-text">
								<h2>Angular 5.0 est disponible</h2>
								<span>www.developpez.com
								</br> 3 novembre 2017
								
								
							</div>
						</a>
					</div>
					

					
					

					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://formationjavascript.com/angular-4-angular-5-angular-6/" id="popup-angular456" class="fh5co-project-item image-popup to-animate">
							<img src="images/formangu.png" alt="formation angular" class="img-responsive">
							<div class="fh5co-text">
								<h2>Angular 4, Angular 5, Angular 6 : déjà ?</h2>
								<span>www.formationjavascript.com
								</br> 1 novembre 2017
								
							</div>
						</a>
					</div>
					
					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://www.lemondeinformatique.fr/actualites/lire-angular-5-mieux-adapte-au-developpement-d-apps-web-progressives-68996.html" id="popup-angular5prog" class="fh5co-project-item  image-popup to-animate">
							<img src="images/angular5adap.png" alt="angular adaptive" class="img-responsive">
							<div class="fh5co-text">
								<h2>Angular 5 mieux adapté au développement d'apps web progressives </h2>
								<span>www.lemondeinformatique.fr
								</br>4 août 2017
								
							</div>
						</a>
					</div>
					
					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://www.w3schools.com/angular/default.asp" id="popup-angularJSw3" class="fh5co-project-item image-popup to-animate">
							<img src="images/w3school.jpg" alt="w3School angular" class="img-responsive">
							<div class="fh5co-text">
								<h2>AngularJS Tutorial w3schools</h2>
								<span>www.w3schools.com
								</br> Mis à jour en 2018
								
							</div>
						</a>
					</div>
					
					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://www.journaldunet.com/solutions/reseau-social-d-entreprise/1185080-le-salaire-des-developpeurs-angular-js-en-graphiques/" id="popup-angularSalaire" class="fh5co-project-item image-popup to-animate">
							<img src="images/angularSalaire.png" alt="Angular salaire" class="img-responsive">
							<div class="fh5co-text">
								<h2>Le salaire des développeurs Angular en graphiques</h2>
								<span>lejournaldunet.com
								</br> 2017
								
							</div>
						</a>
					</div>

					
					
					<div class="col-md-3 col-sm-6 col-xxs-12">
						<a href="https://www.journaldunet.com/web-tech/developpeur/1132120-angularjs-le-framework-javascript-de-google-au-crible/" id="popup-angularJdn" class="fh5co-project-item image-popup to-animate">
							<img src="images/jdn.png" alt="AngularJS tests" class="img-responsive">
							<div class="fh5co-text">
								<h2>AngularJS : le framework JavaScript de Google au crible</h2>
								<span>www.journaldunet.com
								</br> fin 2016
								
							</div>
						</a>
					</div>

					

				
					

				</div>
				<div class="row">
					<div class="col-md-12 text-center to-animate">
						
					</div>
				</div>
			</div>

	</section>

	<section id="fh5co-about" data-section="test" >
		<div class="container">
			<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2>Exemple d'implémentation</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3>Tentative de développement d'une application de webMail</h3>
							</div>
						</div>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
						<img  class="imgSunMailExplain img-responsive"  src="images/SunMail-c1.png"></img>
						</br>
						<img  class="imgSunMailExplain img-responsive"  id="imgSun2" src="images/SunMail-c2.PNG"></img>
					</div>
					<div class="col-md-6">
						<p id="texthide">Tentative de création d’une application de Webmail nommée SunMail (dossiers, affichage des mails, recherche, tri, lecture d'un mail, écriture d'un mail, envoi et réception de mails).
						</br>Celle-ci s’appuie sur une architecture MEAN (MongoDB, Express, Angular et Node.js)
						<ul>
							<li>Construction d'un contexte</li>
							<li>Analyse (UseCase, contraintes...)</li>
							<li>Développement partie cliente (avec Angular)</li>
							<li>Développement partie serveur (A venir..)</li>

						</ul>
						<p>Cette application personnelle m'a permis de faciliter la compréhension de certains concepts comme le Data binding utilisé par Angular.
						</br>L'application est en cours de développement...
						</p>
						<small>Auto-Formation avec un livre technique, une formation en ligne Udemy et un module Openclassroom.</small>
						</p>
					</div>
				</div>

			</div>	
		</div>
	</section>
	

	
	<section id="fh5co-counters"  data-section="sources" style="background-image: url(images/full_image_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="fh5co-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center to-animate">
					<h2>Sources</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12  text-left to-animate">
					<h2>Sites Web:</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<img src="images/LMI.png" alt="le monde informatique" class="img-responsive">
						</br>
						<span class="fh5co-counter-label">Le monde Informatique</span>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<img src="images/udemy.png" alt="Udemy" class="img-responsive">
						</br>
						<span class="fh5co-counter-label">Udemy</span>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<img src="images/devellopez.png" alt="devellopez" class="img-responsive">
						</br>
						<span class="fh5co-counter-label">Developez.com</span>
					</div>
				</div>


				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<img src="images/JDN-logo.png" alt="JDN class" class="img-responsive">
						</br>
						<span class="fh5co-counter-label">Le journaldunet.com</span>
					</div>
				</div>
			</div>
		</br>
			<div class="row">
				<div class="col-md-12  text-left to-animate">
					<h2>Magazines:</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<img src="images/angu&nodeEni.jpg" alt="Angular et Node.js (ENI)" class="img-responsive">
						</br>
						<span class="fh5co-counter-label">Angular et Node.js (ENI)</span>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<img src="images/jqueryEni.jpg" alt="Jquery (ENI)" class="img-responsive">
						</br>
						<span class="fh5co-counter-label">jQuery (ENI)</span>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<img src="images/linux-pratique.jpg" alt="linux" class="img-responsive">
						</br>
						<span class="fh5co-counter-label">Linux Pratique</span>
					</div>
				</div>


				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fh5co-counter to-animate">
						<img src="images/mag-node.jpg" alt="mag_nodejs" class="img-responsive">
						</br>
						<span class="fh5co-counter-label">NodeJS (Linux Pratique)</span>
					</div>
				</div>
			</div>
		</div>
	</section>


				

	<section id="fh5co-contact" data-section="contact">
		<div class="container">                  
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Me contacter</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>N'hésitez pas à me contacter pour n'importe quel renseignement.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 to-animate">
					<h3>Informations</h3>
					<ul class="fh5co-contact-info">
						<li class="fh5co-contact-address ">
							<i class="icon-home"></i>
							77170 Brie Comte Robert,
							<br>France
						</li>
						<li>
							<i class="icon-phone"></i>06.77.32.33.68</li>
							<li>
								<i class="icon-envelope"></i>jonathan.crete@hotmail.fr</li>
								<li>
									<i class="icon-globe"></i>
									<a href="http://cretejonathan.fr" target="_blank">www.cretejonathan.fr</a>
								</li>
							</ul>
						</div>

						<div class="col-md-6 to-animate text-center">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<h3>M'envoyer un mail:</h3>
								<a class="btn btn-primary btn-lg  icon-envelope-letter fa fa-3x " href="mailto:jonathan.crete@outlook.fr"></a>
							</div>
							
							<div class="col-md-6 col-sm-6 col-xs-12">
								<h3>Me téléphoner:</h3>
								<a class="btn btn-primary btn-lg  icon-screen-smartphone fa fa-3x " href="tel:0677323368"></a>
							</div>
							

						</div>
					</div>

				</div>
			</div>
			<div id="map" class="to-animate"></div>
    </section>


	<footer id="footer" role="contentinfo">
		<a href="#" class="gotop js-gotop">
			<i class="icon-arrow-up2"></i>
		</a>
		<div class="container">
			<div class="">
				<div class="col-md-12 text-center">
					<p>&copy; Bootstraps v3.0. Tous droits réservés.
						<br>Crée par Jonathan Crété avec
						<a href="http://https://getbootstrap.com/" target="_blank">Bootstrap</a>
						
					</p>

				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
						<li>
							<a href="https://github.com/JonathanCrt/">
								<i class="icon-github"></i>
							</a>
							
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


	


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	

	<!--  Actualités script -->
	<script src="callWebsites.js"></script>

	<script src="callModals.js"></script>
	
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>


</body>

</html>
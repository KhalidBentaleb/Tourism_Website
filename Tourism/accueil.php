<?php 
session_start();
if (isset($_GET['action'])) {
 	if ($_GET['action']=='hotel') {
 		if (isset($_SESSION['user'])) {
 			header('location: hotel.php');
 		}
 		else {
 		 header('location: connexion.php');
 		}
 	}
 if ($_GET['action']=='restaurant') {
 		if (isset($_SESSION['user'])) {
 			header('location: restaurant.php');
 		}
 		else {
 		 header('location: connexion.php');
 		}
 	}
 } 
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Gestion Touristique</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="main.css" />
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="accueil.php">Tour</a></h1>
								<span>MOHAMMEDIA</span>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="accueil.php">ACCUEIL</a></li>
									<li><a href="?action=hotel">HOTEL</a></li>
									<li><a href="?action=restaurant">RESTAURANT</a></li>
									<li><a href="connexion.php">CONNEXION</a></li>
								</ul>
							</nav>

					</header>
				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-7 col-12-medium">
								<h2>LA CITÉ DES FLEURS</h2>
								<p>Au bord de la mer</p>
								<p>En amoureux, Nature, Shopping</p>
							</div>
							<div class="col-5 col-12-medium">
								<a href="#" class="image featured"><img src="images/media.jpg" alt="" /></a>
							</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/fleur.jpg" alt="" /></a>
										<div class="inner">
											<header>
												<h2>MOHAMMÉDIA</h2>
											</header>
											<p>Mohammédia, anciennement appelée Fédala, est une ville et commune du Maroc située près de Casablanca, chef-lieu de la préfecture de Mohammédia, dans la région administrative du Casablanca-Settat.</p>
											<a href="https://fr.wikipedia.org/wiki/Mohamm%C3%A9dia" class="button icon fa-arrow-circle-right">Continuer la lecture</a>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/img.jpg" alt="" /></a>
										<div class="inner">
											<header>
												<h2>Situation</h2>
											</header>
											<p>Mohammedia est une grande ville située sur la côte de l'océan Atlantique, à 24 km au Nord-Est de Casablanca, la capitale économique du royaume. Le périmètre urbain de la ville s’étend sur 3.320 ha et se localise...</p>
											<a href="https://fr.wikipedia.org/wiki/Mohamm%C3%A9dia" class="button icon fa-arrow-circle-right">Continuer la lecture</a>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/img2.jpg" alt="" /></a>
										<div class="inner">
											<header>
												<h2>Climat</h2>
											</header>
											<p>Mohammedia jouit d'un climat méditerranéen caractérisé par des hivers doux et humides et des étés chauds et secs. Sa proximité à l'océan Atlantique tend à rafraîchir la ville en été et à la réchauffer en hiver...</p>
											<a href="https://fr.wikipedia.org/wiki/Mohamm%C3%A9dia" class="button icon fa-arrow-circle-right">Continuer la lecture</a>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">
								<!-- Sidebar -->
									<div>
										<section>
											<h2>VIDEO</h2>
											<div class="grid">
												<div class="row gtr-50">
													<video width="300" height="280" controls="controls">
                                                       <source src="images/video.webm" type="video/webm" />
                                                    </video>
												</div>
											</div>
											
									</div>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<h2>LA CARTE DU MOHAMMEDIA</h2>
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53117.33618014183!2d-7.423914358112266!3d33.687374910737525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7b65541dc9c3d%3A0x89fe602f8927da05!2sMohamm%C3%A9dia!5e0!3m2!1sfr!2sma!4v1549048435111" width="600" height="300" style="border-radius: 10px 10px 10px 10px;" allowfullscreen></iframe>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>


				<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>LIENS UTILES</h3>
										<ul class="style2" >
											<li><a href="https://www.visitmorocco.com/fr">Office National Marocain du Tourisme</a></li>
											<li><a href="https://smit.gov.ma/en/">Société Marocaine d'ingénierie Touristique</a></li>
											<li><a href="http://www.observatoiredutourisme.ma/">Observatoire du Tourisme</a></li>
											<li><a href="http://www.fnt.ma/">Confédération Nationale du Tourisme</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>HOTELS</h3>
										<ul class="style2">
											<li><a href="https://www.booking.com/city/ma/mohammedia.fr.html?aid=301664;label=mohammedia-14Zgea*hB4CR2OECNtr4TQS280227435293:pl:ta:p120:p2:ac:ap1t1:neg:fi:tiaud-285284111686:kwd-54506129644:lp1009981:li:dec:dm;ws=&gclid=Cj0KCQiA5Y3kBRDwARIsAEwloL4XZjaKeI_eywZEj73tH0Xu5I4Wex7fK1UaJSIcP0J4hX59xtStaXwaAn80EALw_wcB">Hôtels à Mohammedia</a></li>
											<li><a href="https://www.trivago.fr/mohammedia-85722/hotel">Hôtels Mohammedia, Maroc</a></li>
											<li><a href="https://www.tripadvisor.fr/Hotels-g2095768-Mohammedia_Grand_Casablanca_Region-Hotels.html">Hôtels à Mohammedia et autres hébergements</a></li>
											<li><a href="https://www.momondo.fr/hotel/mohammedia?gclid=Cj0KCQiA5Y3kBRDwARIsAEwloL7b4YpOaugkcL5sUUliv3IeKYRSyflBnkFPfCqqes-tlwCORB54cVgaAmgQEALw_wcB">Les meilleurs hôtels à Mohammedia</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>RESTAURANTS</h3>
										<ul class="style2">
											<li><a href="https://www.petitfute.com/v46127-mohammedia/c1165-restaurants/">Les meilleurs restaurants à MOHAMMEDIA.</a></li>
											<li><a href="https://www.bestrestaurantsmaroc.com/fr/recherche/ville/mohammedia.html">RESTAURANTS MOHAMMEDIA</a></li>
											<li><a href="https://www.tripadvisor.fr/Restaurants-g2095768-Mohammedia_Grand_Casablanca_Region.html">Parcourir Mohammedia par type de cuisine</a></li>
											<li><a href="https://restoport.ma/">RESTAURANT LE PORT</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact">
										<h3>CONTACT NOUS</h3>
										<ul>
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
										</ul>
										<p>Adresse : BP 146 Mohammedia 20650 Maroc <br>
                                           Tél. : 212 (05) 23314708 / 0666613325 <br>
                                           Fax  : 212 (05) 23315353 </p>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy;  Tous Droits Réservés</li><li>Design: ABDEDAIM BENTALEB LOURIKA</li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

	</body>
</html>
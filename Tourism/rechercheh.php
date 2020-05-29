<!DOCTYPE HTML>

<html>
	<head>
		<title>Recherche</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" href="main.css" />
		<style type="text/css">
			
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.card-pricing.popular {
    z-index: 1;
    border: 3px solid #007bff;
}
.card-pricing .list-unstyled li {
    padding: .5rem 0;
    color: #6c757d;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
  }
		</style>
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
									<li><a href="hotel.php">HOTEL</a></li>
									<li><a href="restaurant.php">RESTAURANT</a></li>
									<li><a href="connexion.php">CONNEXION</a></li>
								</ul>
							</nav>

					</header>
				</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">
							<center><h2>Recherche</h2></center>
  	                          

							     
								 <form method="get" action="listehotel.php">
								 <div>
                                 <h5>Recherche par nom : </h5>
                                 <input type="text" name="Nom">
								 </div>
								 <button type="submit" class="btn" name="confirmer"> Confirmer</button>
								 <button type="submit" class="btn" name="réintialiser"> Réinitialiser</button>
								 </form>
								 <h5>OU</h5> 
								 <form method="get" action="listehotel.php">
								 <div>
                                 <h5>Recherche  par Addresse: </h5>
                                 <input type="text" name="Addresse">
								 </div>
								 <button type="submit" class="btn" name="confirmer"> Confirmer</button>
								 <button type="submit" class="btn" name="réintialiser"> Réinitialiser</button>
								 </form>
								 <h5>OU</h5>
								 <form method="get" action="listehotel.php">
								 <div>
                                 <h5>Recherche  par Prix: </h5>
                                 Prix Minimal<input type="number" name="prixmin"><br>
                                 Prix Maximal<input type="number" name="prixmax">
								 </div>
								 <button type="submit" class="btn" name="confirmer"> Confirmer</button>
								 <button type="submit" class="btn" name="réintialiser"> Réinitialiser</button>
								 </form> 
								 
								
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
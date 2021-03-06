<!DOCTYPE HTML>
<html>
  <head>
    <title>Liste des Hotels</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
      <!-- Main -->
        <div class="container"><center><h2>Gestion des Hotels</h2></center>
          <?php
          try {
$db = new PDO( 'mysql:host=localhost;dbname=tourisme', 'root', 'root' );
$db->setAttribute ( PDO::ATTR_CASE, PDO::CASE_LOWER );    //metretous en miniscule
$db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );// les erreurs lonceront les exeptions
} catch (Exception $e) {
echo 'une erreur est revenue';
die();

}
$name=$_POST['Nom'];
$nom=$_POST['nom'];
$tel=$_POST['tel'];
$addresse=$_POST['addresse'];
$siteweb=$_POST['siteweb'];
$service=$_POST['service'];
$prix=$_POST['prix'];
$classe=$_POST['classe'];

                                     if (isset($_POST['confirmer'])) {
                                     
                                     

$sql = $db->prepare("SELECT * FROM hotels WHERE nom='$name'");
$sql->execute();
$s = $sql->fetch(PDO::FETCH_OBJ);

                                     }
                                     elseif (isset($_POST['supprimer'])) {
                                       
$sqql = $db->prepare("DELETE  FROM hotels WHERE tel='$tel'");
$sqql->execute();
                                     }
                                     elseif (isset($_POST['modifier'])) {
$sqql = $db->prepare("UPDATE hotels SET nom='$nom', classe='$classe' , services='$service', tel='$tel', siteweb='$siteweb', adresse='$addresse', prix='$prix' WHERE tel='$tel' ");
$sqql->execute();
                                     }
                                     elseif (isset($_POST['ajouter'])) {
$sqll = $db->prepare("INSERT INTO hotels VALUES( NULL,'$nom','$classe' , '$service', '$tel', '$siteweb', '$addresse','$prix', '') ");
$sqll->execute();
                                     }

                 ?>
                 <form method="post" action="">
                 <div>
                                 <h5>Recherche par nom : </h5>
                                 <input type="text" name="Nom">
                 </div>
                 <button type="submit" class="btn" name="confirmer"> Confirmer</button>
                 <button type="submit" class="btn" name="réintialiser"> Réinitialiser</button>
                 </form>
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="" method="POST">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Nom du Hotel</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="nom" name="nom" class="form-control" required="true" value="<?php echo$s->nom;?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Classe</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="service" name="classe" class="form-control" required="true" value="<?php echo$s->classe;?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Services</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="service" name="service" class="form-control" required="true" value="<?php echo$s->services;?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Téléphone</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="tel" name="tel" class="form-control" required="true" value="<?php echo$s->tel;?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Site Web</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="siteweb" name="siteweb" class="form-control" required="true" value="<?php echo$s->siteweb;?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Addresse</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="addresse" name="addresse" class="form-control" required="true" value="<?php echo$s->adresse;?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Prix</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="cuisine" name="prix" class="form-control" required="true" value="<?php echo$s->prix;?>" type="text"></div>
                            </div>
                         </div>
                         <div align="right">
                        <button type="submit" class="btn btn-primary" name="ajouter"> Ajouter</button>
                         <button type="submit" class="btn btn-success" name="modifier"> Modifier</button>
                         <button type="submit" class="btn btn-danger" name="supprimer"> Supprimer</button>
                        </div>
                      </fieldset>
                   </form>
                </td>
                
             </tr>
          </tbody>
       </table>
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
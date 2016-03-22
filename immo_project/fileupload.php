<?php include("entete.php"); ?>
	
	
<?php
$messErr = "";
// Copie dans le repertoire du script avec un nom
// incluant l'heure a la seconde pres
$repertoireDestination = dirname(__FILE__)."\ImgFixe\\";
$nomDestination        = "PP_du_".date("YmdHis").".jpg";
 	// on se connecte à MySQL 
	$connex = mysqli_connect('localhost', 'root', ''); 

	// on sélectionne la base 
	mysqli_select_db($connex,'siteinternet');
	$sql = 'SELECT * FROM membres WHERE id = "' .$_SESSION['id']. '"';
	$req = mysqli_query($connex,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($connex)); 
	$resultat = mysqli_fetch_array($req);
if (is_uploaded_file($_FILES["monfichier"]["tmp_name"])) {
    if (rename($_FILES["monfichier"]["tmp_name"], $repertoireDestination.$nomDestination)) {
				$sql10 = 'UPDATE membres SET 
				photoprofil = "'.$nomDestination.'" WHERE id = '.$resultat["id"].'';
				$req10 = mysqli_query($connex,$sql10) or die('Erreur SQL !<br>'.$sql10.'<br>'.mysqli_error($connex)); 
				$messErr = "Photo de profil modifiée";
				header('Location: pageperso.php');
    } else {
			$messErr = "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
			}
}
?>
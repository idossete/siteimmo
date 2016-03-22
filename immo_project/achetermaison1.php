<!DOCTYPE html>

<html>
	<head>
		<?php 
		$titre = "CDAE Achat Maison";
		include("head.php"); 
		?>
	</head>

	<body>
	<div class="cent">
		<header>
			 <?php include("entete.php"); ?>
			
			<nav>
				<?php include("menus.php"); ?>
			</nav>
		</header>
		
	<section class=center3>
		<div class=center><br/>
		<strong><h1>Maison située à Brazzaville sur 400000 m²</h1></strong>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br/>
                <br/>
		<aside>
		<ul class="diaporama">
			<li><img src="imgSlide3/maison11.jpg" alt="Image 1" width="512" height="288" /></li>
			<li><img src="imgSlide3/maison12.jpg" alt="Image 2" width="512" height="288"/></li>
			<li><img src="imgSlide3/maison13.jpg" alt="Image 3" width="512" height="288"/></li>
		</aside>
		<?php
		$panErr = "";
		if(isset($_SESSION['id']) AND isset($_SESSION['email']))
		{
			// on se connecte à MySQL 
			$connex = mysqli_connect('localhost', 'root', ''); 

			// on sélectionne la base 
			mysqli_select_db($connex,'siteinternet');
	
			$sql = 'SELECT * FROM membres WHERE id = "' .$_SESSION['id']. '"';
			$req = mysqli_query($connex,$sql) or die('Erreur SQL !<br>'.$sql2.'<br>'.mysqli_error($connex)); 
			$resultat = mysqli_fetch_array($req);
			if (isset($_POST['ajout']))
			{	 
			$idpersonne = $resultat['id'];
			$titre = 'Maison située à Brazzaville';
			// on crée la requête SQL  
			$sql11 = "INSERT INTO panier(titre,idpersonne) VALUES('$titre', $idpersonne)";

			// on envoie la requête 
			$req11 = mysqli_query($connex,$sql11) or die('Erreur SQL !<br>'.$sql11.'<br>'.mysqli_error($connex)); 
			$panErr = "Cet article a été bien ajouté à votre panier";
			// on ferme la connexion à mysql 
			mysqli_close($connex);  
			}
		}
		else 
		{
		$panErr = "Vous devez être membre pour ajouter à votre panier. Veuillez vous inscrire au préalable";
		}
		?>
		<article class="descBien">
		<h2>VENTE MAISON</h2>
		<b>Brazzaville</b><br /><br />
		<b class="darkorange">40.000.000 FCFA</b><br />
		<p>La résidence Haïma est une villa située à Brazzaville, juste à côté de l’immeuble Otawa. 
		Cette magnifique Maison de deux niveaux fait partie de ce qui se fait de mieux au Congo en terme de résidence immobilière. 
		En effet son séjour dont le plafond donne au deuxième niveau vous offre une vue éblouissante d’une très belle toile baptisé 
		« L’entrée du paradis »  représentant des anges et certains disciples de Dieu autour d’un soleil rayonnant. 
		Elle comprend 4 chambres : 3 avec leur salle d’eau et 1 grande chambre avec 1 salle de bain, un séjour, 
		une salle à manger, une cuisine et 1 toilette pour les invités. Lumineuse et chaleureuse, cette maison est tout équipée et propose même un groupe électrogène et un surpresseur. Le garage accueil facilement deux véhicules. 
		Avec la résidence Haïma, rapprochez-vous de la maison de vos rêves !</p>
		<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
		<input type="submit" name="ajout" value="&#9619;  Ajouter au panier" class="button_green" />&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="contacter" value="&sect; Nous Contacter" class="button_green" onclick="document.location.href='#contactPart'" /></form></br>
		<b class="error"><?php echo $panErr; ?></b>
		</article> 
		<br/><br/>
		<div class="zonecontact"><br/><br/>
		<div id="contactPart">
				<h1>NOUS CONTACTER</h1>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<h3 class="darkred">Charles & Delaure Afrique Entreprenariat</h3>
				<b>Adresse :</b><br/>
				<b class="blue">Agence CDAE Yaoundé</b><br/>
				BP 12100 Yaoundé Cameroun<br/>
				Tél : (+237) 94 66 32 00<br/>
				<strong class="darkred">Email : salecharlesjr@gmail.com</strong><br/><br/><br/>
				<b class="blue">Agence CDAE Pointe-Noire</b><br/>
				BP 15200 Pointe-Noire Congo<br/>
				Tél : (+235) 95 25 92 01<br/>
				<strong class="darkred">Email : iossete@gmail.com</strong><br/>
			</div>
			
			<?php 
			include("nouscontacter.php");
			?>
			<div id="formPart"><br/>
				<?php 
				include("nouscontacterform.php");
				?>
			</div>
		</div>
		
		</div>
	</section>
	
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</div>
	</body>
</html> 

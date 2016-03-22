<!DOCTYPE html>

<html>
	<head>
		<?php
		$titre = "CDAE WAZA PARC";
		include("head.php"); 
		?>
	</head>

	<body>
	<div class="cent">
		<header>
			 <?php include("entete.php"); 
			 ?>
			
			<nav>
				<?php include("menus.php"); ?>
			</nav>
		</header>
		
	<section class=center3>
		<div class=center><br/>
		<strong><h1>LE PARC NATIONAL DE WAZA</h1></strong>
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<br/>
                <br/>
		<aside>
		<iframe width="500" height="315" src="//www.youtube.com/embed/Un5hbOz2CuA" frameborder="0" allowfullscreen></iframe>
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
			$titre = 'Safari Waza Parc';
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
		<h2>SAFARI</h2>
		<b>Nord Cameroun</b><br /><br />
		<b class="darkorange">500.000 FCFA</b><br />
		<p>Le parc national de Waza est l'un des parcs nationaux du Cameroun. Situé dans l'extrème nord du pays, non loin du lac Tchad, 
		il couvre une superficie de 1 700 km². C'est une réserve de biosphère classée par l'Unesco. Riche d'une faune exceptionnelle, 
		il est l'un des atouts touristiques du Cameroun.
		D'abord réserve de chasse créée en 1934 sous le nom de Zina-Waza, le parc a reçu le statut de parc national en 1968.
		</p>
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

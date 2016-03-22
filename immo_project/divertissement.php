<!DOCTYPE html>

<html>
	<head>
		<?php
		$titre = "CDAE Divertissement";
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
		
		<section class="center3">
			<div class="rubriqueDiver">
			<span><a href="jeux.php">JEUX</a><span><br/><br/>
				<a href="jeux.php">
				<div class=imageDiver>
					<!-- <img src="tsavo1-900x300.jpg"  alt="lionneSavane"/> -->
					<!-- <span>500.000 FCFA</span><br/>
					<span>Plus d'infos → </span> -->
				</div>
				</a>
			</div>
			
			<div class="rubriqueDiver">
			<span><a href="decouverte.php">DÉCOUVERTE DES PAYS D'AFRIQUE</a></span><br/><br/>
				<a href="decouverte.php">
				<div class=imageDiver2>
					<!-- <img src="tsavo1-900x300.jpg"  alt="lionneSavane"/> -->
				</div>
				</a>
			</div>
		</section>
		
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</div>
	</body>
</html> 

		
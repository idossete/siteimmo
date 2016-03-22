<!DOCTYPE html>

<html>
	<head>
		<?php
		$titre = "CDAE Plan du site";
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
		
		<section>
			<article class="center2">
				<h1><span class="darkred">Plan du Site</span></h1>
				<div id="encadre">
				<ul>
						<li><a href="index.php"># ACCUEIL</a><br/><br/>
						<li><a href="acheter.php"># ACHETER</a>
							<ul>
								<li><a href="immeubles.php"> > Immeubles</a>
								<li><a href="maisons.php"> > Maisons</a>
							</ul><br/><br/>
						<li><a href="louer.php"># LOUER</a>
							<ul>
								<li><a href="appartements.php"> > Appartements</a>
								<li><a href="maisons.php"> > Maisons</a>
								<li><a href="vehicules.php"> > Véhicules</a>
							</ul><br/><br/>
						<li><a href="construire.php"># CONSTRUIRE</a>
							<ul>
								<li><a href="immeubles.php"> > Immeubles</a>
								<li><a href="maisons.php"> > Maisons</a>
							</ul><br/><br/>
						<li><a href="safari.php"># SAFARI</a><br/><br/>
						<li><a href="membre.php"># ESPACE CLIENT</a>
							<ul>
								<li><a href="pageperso.php"> > Compte Personnel</a>
							</ul><br/><br/>
						<li><a href="savoir-faire.php"># SAVOIR-FAIRE</a><br/><br/>
						<li><a href="divertissement.php"># DIVERTISSEMENT</a>
							<ul>
								<li><a href="jeux.php"> > Jeux</a>
								<li><a href="decouverte.php"> > Découverte des pays d'Afrique</a>
							</ul><br/><br/>
						<li><a href="contacts.php"># CONTACTS</a><br/><br/>
						<li><a href="mentionlegales.php"># MENTIONS LÉGALES</a><br/><br/>
					</ul>
					</div><br/><br/>
			</article>
		</section>
		
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</div>
	</body>
</html> 

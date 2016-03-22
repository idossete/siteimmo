	<div id ="footer-nav">
		<a href="index.php" >Accueil</a> - <a href="savoir-faire.php" >Présentation</a> - <a href="decouverte.php" >Découverte</a> - <a href="divertissement.php" >Divertissement</a> - <a href="membre.php" >Membre</a> - 
		<a href="contacts.php" >Nous Contacter</a> - <a href="mentionslegales.php">Mentions légales</a> - <a href="lexique.php" >Lexique </a> - <a href="plandusite.php">Plan du Site</a> 
		</div>
		<div id = "signature">
		<span>Copyright &copy;2014 - 2025. Concept Multimédia. Tous droits réservés. L'utilisation de ce site implique l'acceptation des conditions générales d'utilisation - Design by Charles Jr Salé & Innocent Ossété - 
		<?php 
		if(isset($_SESSION['views']))
		$_SESSION['views']=$_SESSION['views']+1;
		else
		$_SESSION['views']=1;
		echo "Nombre de pages vues : ". $_SESSION['views'];
		?>
		</span>
		<a href="#top" title="Retour haut de page"><div id="btntop"></div></a>
	</div>
	
		<?php
		/* session_start();
		if(isset($_SESSION['views']))
		unset($_SESSION['views']); */
		?>
		
		<?php
		/* session_destroy(); */
		?>
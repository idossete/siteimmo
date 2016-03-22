<!DOCTYPE html>

<html>
	<head>
		<?php
		$titre = "Mot de passe oublié ?";
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
		<article>
			<div id=background3>
				<form action="" method="post" name="oublipass" ><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Mot de passe oublié ? Votre mot de passe est votre numéro de téléphone excepté le premier chiffre "0" :</b><br/><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="tel" name="numtel" class="input"  /><br/><br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="envoi" value="Envoyer" class="button_green" />
				</form>
			</div>
		</article>
		</section>
		
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</div>
	</body>
</html> 

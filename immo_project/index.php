<!DOCTYPE html>
<html>
	<head>
		<?php
		$titre = "CDAE";
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
		

		<section id="slideshow">
			<div class="container">
				<div class="c_slider"></div>
				<div class="slider">
					<figure>
						<img src="imgSlide1/hotel.jpg" alt="" width="1000" height="500" />
						<figcaption>Des appartements à louer au Congo</figcaption>
					</figure>
					<figure>
						<img src="imgSlide1/lions.jpg" alt="" width="1000" height="500" />
						<figcaption>Safari, pourquoi pas ?</figcaption>
					</figure>
					<figure>
						<img src="imgSlide1/yde-by-night.jpg" alt="" width="1000" height="500" />
						<figcaption>Ventes de maisons au coeur de Yaoundé</figcaption>
					</figure>
					<figure>
						<img src="imgSlide1/voitures.jpg" alt="" width="1000" height="500" />
						<figcaption>Achat et location de véhicules</figcaption>
					</figure>
				</div>
			</div>
			<span id="timeline"></span>
		</section>
		
		<section>
			<aside id="rubriqueImg">
				<div class="descriptImg">
					<span class="magenta"> NOUVEAUTE APPARTEMENT</span>
					<a href="louerappartement.php"><img src="imgSlide3/appartement4.jpg" alt="Appart" width="250" height="155">
					<div class="desc">LOCATIONS APPARTEMENTS<br/> BRAZZAVILLE <br/> <span class="magenta">2.000.000 FCFA</span><br/> + de détails
					</div></a>
				</div>
				
				<div class="descriptImg">
					<span class="magenta">NOUVEAUTE MAISON</span>
					<a href="achetermaison2.php"><img src="imgMini/SAM_0215.jpg" alt="Palais d'Odza" width="250" height="155">
					<div class="desc">VENTES MAISONS<br/> YAOUNDE <br/> <span class="magenta">1.000.000.000 FCFA</span><br/> + de détails
					</div></a>
				</div>
				
				<div class="descriptImg">
					<span class="magenta">NOUVEAUTE VÉHICULE</span>
					<a href="louervoiture1.php"><img src="imgMini/petitVoiture.jpg" alt="Prado" width="250" height="155">
					<div class="desc">LOCATIONS VEHICULES<br/> POINTE-NOIRE <br/> <span class="magenta">100.000 FCFA</span><br/> + de détails
					</div></a>
				</div>
				
				<div class="descriptImg">
					<span class="magenta">SAFARI</span>
					<a href="safariwaza.php"><img src="imgMini/petitSaf.jpg" alt="Saf" width="250" height="155">
					<div class="desc">PARC NATIONAL DE WAZA<br/> MAYO-SAVA <br/> <span class="magenta">500.000 FCFA</span><br/> + de détails
					</div></a>
				</div>
			</aside>
		</section>
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</div>
	</body>
</html> 


<!DOCTYPE html>

<html>
	<head>
		<?php
		$titre = "CDAE Contacts";
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
		
		<section id="slideshow">
			<div class="container">
				<div class="c_slider"></div>
				<div class="slider">
					<figure>
						<img src="imgSlide1/hotel.jpg" alt="" width="1000" height="500" />
						<figcaption>Des appartements à louer au Congo</figcaption>
					</figure>
					<figure>
						<img src="imgSlide1/lions.jpg" alt="" width="1000" height="500"/>
						<figcaption>Safari, pourquoi pas ?</figcaption>
					</figure>
					<figure>
						<img src="imgSlide1/yde-by-night.jpg" alt="" width="1000" height="500"/>
						<figcaption>Ventes de maisons au coeur de Yaoundé</figcaption>
					</figure>
					<figure>
						<img src="imgSlide1/voitures.jpg" alt="" width="1000" height="500"/>
						<figcaption>Achat et location de véhicules</figcaption>
					</figure>
				</div>
			</div>
			<span id="timeline"></span>
		</section>
		
		<section id="formcontact">
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
		</section>
		
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</div>
	</body>
</html> 

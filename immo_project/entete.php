		<?php
		$resulterr = "";
		if (isset($_POST['connblog']))
		{ 
			$email = $_POST["logadmin"];
			$motdepasse = $_POST["passadmin"];
			
			// on se connecte à MySQL 
			$connex = mysqli_connect('localhost', 'root', ''); 

			// on sélectionne la base 
			mysqli_select_db($connex,'siteinternet'); 

			// on crée la requête SQL  
			$sql = 'SELECT id, privilege FROM membres WHERE email ="' .$email. '"AND motdepasse = "' .$motdepasse.'"';
			$req = mysqli_query($connex,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($connex)); 
			$resultat = mysqli_fetch_array($req);
			
			if (!$resultat)
			{
			$resulterr = 'Mauvais identifiant ou mot de passe !';
			}
			else
			{
			session_start();
			$_SESSION['id'] = $resultat['id'];
			$_SESSION['privilege'] = $resultat['privilege'];
			$_SESSION['email'] = $email;
		    header('Location: pageperso.php');
			}
			
			// on ferme la connexion à mysql 
			mysqli_close($connex);  
			
			}
		?>
			
			<?php
			$connex = mysqli_connect('localhost', 'root', ''); 

			// on sélectionne la base 
			mysqli_select_db($connex,'siteinternet'); 
			session_start();
			if(isset($_SESSION['id']) AND isset($_SESSION['email']))
			{
			// on se connecte à MySQL 
			$connex = mysqli_connect('localhost', 'root', ''); 

			// on sélectionne la base 
			mysqli_select_db($connex,'siteinternet');
	
			$sql = 'SELECT * FROM membres WHERE id = "' .$_SESSION['id']. '"';
			$req = mysqli_query($connex,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($connex)); 
			$resultat = mysqli_fetch_array($req);
			?>
			
			<div id=imageEntete>
			<a href="index.php" title = "InnoCharl"> <img id="imageEntete1" src="imgFixe/logo-innocharl.jpg" alt="Logo InnoCharl" width=300 height=120 /></a>
			<div class="smallid"><a href="pageperso.php"><?php echo $resultat['prenom']; ?></a>
			&nbsp;&nbsp;</div><div class="smallid2">|&nbsp;&nbsp;<a href="deconnexion.php">Déconnexion</a></div>
			<?php
			}
			else
			{
			?>
			<div id=imageEntete>
			<a href="index.php" title = "InnoCharl"> <img id="imageEntete1" src="imgFixe/logo-innocharl.jpg" alt="Logo InnoCharl" width=300 height=120 /></a>
			<div class="smallid"><a href="membre.php">Connexion</a>	<div class="smallform"><form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" name="smallformlog" > 
			<b>Login :</b><br/><input type="text" name="logadmin" /><br/>
			<b>Mot de passe :</b><br/><input type="password" name="passadmin" /><br/>
			<input type="submit" name="connblog" value="Connexion" /></form><br/></div>&nbsp;&nbsp;</div><div class="smallid2">|&nbsp;&nbsp;<a href="membre.php">Inscription</a></div>
			<?php
		    echo $resulterr;

			// on ferme la connexion à mysql 
			mysqli_close($connex);  			
			}
			?>
			<a href="http://www.esilv.fr" title = "ESILV" > <img id=anim src="imgFixe/logo_esilv_blanc.png" alt="LOGO ESILV" /></a>
			<object type="application/x-shockwave-flash"  width="240" height="20" class="music" data="dewplayer-multi.swf">
			<param name="wmode" value="transparent" />
			<param name="flashvars" value="autoreplay=true" />
			<param name="movie" value="dewplayer-multi.swf?mp3=Musique/X MALEYA feat J MARTNS MON EX.mp3|Musique/Magnificat Anima Mea Dominum - Buxtehude.mp3|Musique/MANU DIBANGO ( ongele mba ) Cameroon.mp3" />
			</object>

			<!-- <span id=slogan>ENSEMBLE, UNISSONS NOS FORCES POUR UNE AFRIQUE FORTE</span> -->
			<!--<div class="webdesigntuts-workshop">
			<form action="" method="">		    
			<input type="search" placeholder="Rechercher...">		    	
			<button><img src="imgFixe/loupe.png" /></button>
			</form>
			</div>-->
			</div>
			

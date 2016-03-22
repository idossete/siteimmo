<!DOCTYPE html>

<html>
	<head><?php
		$titre = "CDAE Membre";
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

<?php
		$resultaterr = "";
			
		if (isset($_POST['Connexion']))
		{ 
			
		 	$civilite = $_POST["choisissez"];
			$nom = $_POST["fname"];
			$prenom = $_POST["lname"];
			$adresse = $_POST["address"];
			$codepostal = $_POST["cpostal"];
			$ville = $_POST["ville"];
			$pays = $_POST["pays"];
			$telephone = $_POST["numtel"];
			$email = $_POST["email"];
			$motdepasse = $_POST["numtel"];
			$photoprofil = 'erreur.jpg';
			// on se connecte à MySQL 
			$connex = mysqli_connect('localhost', 'root', ''); 

			// on sélectionne la base 
			mysqli_select_db($connex,'siteinternet'); 

			// on crée la requête SQL  
			$sql = "INSERT INTO membres(civilite,nom,prenom,adresse,codepostal,ville,pays,telephone,email,dateinscript,motdepasse,photoprofil) VALUES(
			'$civilite', 
			'$nom', 
			'$prenom', 
			'$adresse', 
			$codepostal, 
			'$ville', 
			'$pays', 
			$telephone, 
			'$email', 
			CURDATE(), 
			$motdepasse,
			'$photoprofil')";

			// on envoie la requête 
			$req = mysqli_query($connex,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($connex));
		    header('Location: pageperso.php');	
			// on ferme la connexion à mysql 
			mysqli_close($connex);  
		}
		?>
		
		
		
		<?php
		if (isset($_POST['sublog']))
		{ 	
			$email = $_POST["logadmin"];
			$motdepasse = $_POST["passadmin"];
			
			// on se connecte à MySQL 
			$connex = mysqli_connect('localhost', 'root', ''); 

			// on sélectionne la base 
			mysqli_select_db($connex,'siteinternet'); 

			// on crée la requête SQL  
			$sql = 'SELECT id FROM membres WHERE email ="' .$email. '"AND motdepasse = "' .$motdepasse.'"';
			$req = mysqli_query($connex,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($connex)); 
			$resultat = mysqli_fetch_array($req);
			
			if (!$resultat)
			{
			$resultaterr = 'Mauvais identifiant ou mot de passe !';
			}
			else
			{
			session_start();
			$_SESSION['id'] = $resultat['id'];
			$_SESSION['email'] = $email;
		    header('Location: pageperso.php');
			}
			
			// on ferme la connexion à mysql 
			mysqli_close($connex);  
			
			}
		?>

		
			
		<section class="center3">
		<div> <img id="background2" src="shaking-hands.jpg" alt="salut" width=88% height=600 /> </div>
		<div id=member>
			<div id=blocDeGauche2>
				<h1><span class="darkred">Déja client ?</span> Connexion</h1>
				<h3>Accédez à votre compte,</h3>
				<b>Entrez ci-dessous vos paramètres de connexion :</b><br/><br/>
				<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" name="formlog" > 
				<b class="white">Email :</b><br/> <input type="text" name="logadmin" class="input" /><br/><br/>
				<b class="white">Mot de passe :</b><br/> <input type="password" name="passadmin" class="input" /><br/><br/>
				<input type="submit" name="sublog" value="Valider" class="button_green" /> <span class="white"> <?php echo $resultaterr ?></span><br/>
				<span class="white"><h5><a href="password.php" class="forgottenpass">Mot de passe oublié ?</a></h5></span>
				</form>
			</div>
			
			<div id=blocDeDroite2 >
				<h1>Inscription Gratuite</h1>
				<form method="POST" name="inscriptionform" autocomplete="on" action="<?php echo $_SERVER["PHP_SELF"] ?>">
					Civilité<span class="error">*</span><br /><SELECT name="choisissez" class="input" >
						<OPTION VALUE="M">M</OPTION>
						<OPTION VALUE="Mme">Mme</OPTION>
						<OPTION VALUE="Mlle">Mlle</OPTION>
					</SELECT><br /><br />
					Nom<span class="error">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Prénom<span class="error">*</span><br><input type="text" name="fname" class="input" required />
					 &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" class="input" required/><br /><br />
					<span>Adresse</span><span class="error">*</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Code Postal <span class="error"> *</span>  <br><input type="text" name="address" class="input" required />
					&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cpostal" class="input" required /><br /><br />
					<span>Ville</span><span class="error">*</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Pays<span class="error">*</span><br /><input type="text" name="ville" class="input" required />
					&nbsp;&nbsp;&nbsp;&nbsp;<SELECT name="pays" autocomplete="off" class="input" >
					<option value="Cameroun" selected="selected">Cameroun </option>
					<option value="Congo" selected="selected">Congo </option>
					<optgroup label="Afrique">
					<option value="afriqueDuSud">Afrique Du Sud</option>
					<option value="algerie">Algérie</option>
					<option value="angola">Angola</option>
					<option value="benin">Bénin</option>
					<option value="botswana">Botswana</option>
					<option value="burkina">Burkina</option>
					<option value="burundi">Burundi</option>
					<option value="cameroun">Cameroun</option>
					<option value="capVert">Cap-Vert</option>
					<option value="republiqueCentrafricaine">République Centrafricaine</option>
					<option value="comores">Comores</option>
					<option value="congo">Congo</option>
					<option value="republiqueDemocratiqueDuCongo">République Démocratique Du Congo</option>
					<option value="coteIvoire">Côte d'Ivoire</option>
					<option value="djibouti">Djibouti</option>
					<option value="egypte">Égypte</option>
					<option value="ethiopie">Éthiopie</option>
					<option value="erythrée">Érythrée</option>
					<option value="gabon">Gabon</option>
					<option value="gambie">Gambie</option>
					<option value="ghana">Ghana</option>
					<option value="guinee">Guinée</option>
					<option value="guinee-Bisseau">Guinée-Bisseau</option>
					<option value="guineeEquatoriale">Guinée Équatoriale</option>
					<option value="kenya">Kenya</option>
					<option value="lesotho">Lesotho</option>
					<option value="liberia">Liberia</option>
					<option value="libye">Libye</option>
					<option value="madagascar">Madagascar</option>
					<option value="malawi">Malawi</option>
					<option value="mali">Mali</option>
					<option value="maroc">Maroc</option>
					<option value="maurice">Maurice</option>
					<option value="mauritanie">Mauritanie</option>
					<option value="mozambique">Mozambique</option>
					<option value="namibie">Namibie</option>
					<option value="niger">Niger</option>
					<option value="nigeria">Nigeria</option>
					<option value="ouganda">Ouganda</option>
					<option value="rwanda">Rwanda</option>
					<option value="saoTomeEtPrincipe">Sao Tomé-et-Principe</option>
					<option value="senegal">Sénégal</option>
					<option value="seychelles">Seychelles</option>
					<option value="sierra">Sierra</option>
					<option value="somalie">Somalie</option>
					<option value="soudan">Soudan</option>
					<option value="swaziland">Swaziland</option>
					<option value="tanzanie">Tanzanie</option>
					<option value="tchad">Tchad</option>
					<option value="togo">Togo</option>
					<option value="tunisie">Tunisie</option>
					<option value="zambie">Zambie</option>
					<option value="zimbabwe">Zimbabwe</option>
					</optgroup>
					<optgroup label="Amérique">
					<option value="antiguaEtBarbuda">Antigua-et-Barbuda</option>
					<option value="argentine">Argentine</option>
					<option value="bahamas">Bahamas</option>
					<option value="barbade">Barbade</option>
					<option value="belize">Belize</option>
					<option value="bolivie">Bolivie</option>
					<option value="bresil">Brésil</option>
					<option value="canada">Canada</option>
					<option value="chili">Chili</option>
					<option value="colombie">Colombie</option>
					<option value="costaRica">Costa Rica</option>
					<option value="cuba">Cuba</option>
					<option value="republiqueDominicaine">République Dominicaine</option>
					<option value="dominique">Dominique</option>
					<option value="equateur">Équateur</option>
					<option value="etatsUnis">États Unis</option>
					<option value="grenade">Grenade</option>
					<option value="guatemala">Guatemala</option>
					<option value="guyana">Guyana</option>
					<option value="haiti">Haïti</option>
					<option value="honduras">Honduras</option>
					<option value="jamaique">Jamaïque</option>
					<option value="mexique">Mexique</option>
					<option value="nicaragua">Nicaragua</option>
					<option value="panama">Panama</option>
					<option value="paraguay">Paraguay</option>
					<option value="perou">Pérou</option>
					<option value="saintCristopheEtNieves">Saint-Cristophe-et-Niévès</option>
					<option value="sainteLucie">Sainte-Lucie</option>
					<option value="saintVincentEtLesGrenadines">Saint-Vincent-et-les-Grenadines</option>
					<option value="salvador">Salvador</option>
					<option value="suriname">Suriname</option>
					<option value="triniteEtTobago">Trinité-et-Tobago</option>
					<option value="uruguay">Uruguay</option>
					<option value="venezuela">Venezuela</option>
					</optgroup>
					<optgroup label="Asie">
					<option value="afghanistan">Afghanistan</option>
					<option value="arabieSaoudite">Arabie Saoudite</option>
					<option value="armenie">Arménie</option>
					<option value="azerbaidjan">Azerbaïdjan</option>
					<option value="bahrein">Bahreïn</option>
					<option value="bangladesh">Bangladesh</option>
					<option value="bhoutan">Bhoutan</option>
					<option value="birmanie">Birmanie</option>
					<option value="brunei">Brunéi</option>
					<option value="cambodge">Cambodge</option>
					<option value="chine">Chine</option>
					<option value="coreeDuSud">Corée Du Sud</option>
					<option value="coreeDuNord">Corée Du Nord</option>
					<option value="emiratsArabeUnis">Émirats Arabe Unis</option>
					<option value="georgie">Géorgie</option>
					<option value="inde">Inde</option>
					<option value="indonesie">Indonésie</option>
					<option value="iraq">Iraq</option>
					<option value="iran">Iran</option>
					<option value="israel">Israël</option>
					<option value="japon">Japon</option>
					<option value="jordanie">Jordanie</option>
					<option value="kazakhstan">Kazakhstan</option>
					<option value="kirghistan">Kirghistan</option>
					<option value="koweit">Koweït</option>
					<option value="laos">Laos</option>
					<option value="liban">Liban</option>
					<option value="malaisie">Malaisie</option>
					<option value="maldives">Maldives</option>
					<option value="mongolie">Mongolie</option>
					<option value="nepal">Népal</option>
					<option value="oman">Oman</option>
					<option value="ouzbekistan">Ouzbékistan</option>
					<option value="pakistan">Pakistan</option>
					<option value="philippines">Philippines</option>
					<option value="qatar">Qatar</option>
					<option value="singapour">Singapour</option>
					<option value="sriLanka">Sri Lanka</option>
					<option value="syrie">Syrie</option>
					<option value="tadjikistan">Tadjikistan</option>
					<option value="taiwan">Taïwan</option>
					<option value="thailande">Thaïlande</option>
					<option value="timorOriental">Timor oriental</option>
					<option value="turkmenistan">Turkménistan</option>
					<option value="turquie">Turquie</option>
					<option value="vietNam">Viêt Nam</option>
					<option value="yemen">Yemen</option>
					</optgroup>
					<optgroup label="Europe">
					<option value="allemagne">Allemagne</option>
					<option value="albanie">Albanie</option>
					<option value="andorre">Andorre</option>
					<option value="autriche">Autriche</option>
					<option value="bielorussie">Biélorussie</option>
					<option value="belgique">Belgique</option>
					<option value="bosnieHerzegovine">Bosnie-Herzégovine</option>
					<option value="bulgarie">Bulgarie</option>
					<option value="croatie">Croatie</option>
					<option value="danemark">Danemark</option>
					<option value="espagne">Espagne</option>
					<option value="estonie">Estonie</option>
					<option value="finlande">Finlande</option>
					<option value="France">France</option>
					<option value="grece">Grèce</option>
					<option value="hongrie">Hongrie</option>
					<option value="irlande">Irlande</option>
					<option value="islande">Islande</option>
					<option value="italie">Italie</option>
					<option value="lettonie">Lettonie</option>
					<option value="liechtenstein">Liechtenstein</option>
					<option value="lituanie">Lituanie</option>
					<option value="luxembourg">Luxembourg</option>
					<option value="exRepubliqueYougoslaveDeMacedoine">Ex-République Yougoslave de Macédoine</option>
					<option value="malte">Malte</option>
					<option value="moldavie">Moldavie</option>
					<option value="monaco">Monaco</option>
					<option value="norvege">Norvège</option>
					<option value="paysBas">Pays-Bas</option>
					<option value="pologne">Pologne</option>
					<option value="portugal">Portugal</option>
					<option value="roumanie">Roumanie</option>
					<option value="royaumeUni">Royaume-Uni</option>
					<option value="russie">Russie</option>
					<option value="saintMarin">Saint-Marin</option>
					<option value="serbieEtMontenegro">Serbie-et-Monténégro</option>
					<option value="slovaquie">Slovaquie</option>
					<option value="slovenie">Slovénie</option>
					<option value="suede">Suède</option>
					<option value="suisse">Suisse</option>
					<option value="republiqueTcheque">République Tchèque</option>
					<option value="ukraine">Ukraine</option>
					<option value="vatican">Vatican</option>
					</optgroup>
					<optgroup label="Océanie">
					<option value="australie">Australie</option>
					<option value="fidji">Fidji</option>
					<option value="kiribati">Kiribati</option>
					<option value="marshall">Marshall</option>
					<option value="micronesie">Micronésie</option>
					<option value="nauru">Nauru</option>
					<option value="nouvelleZelande">Nouvelle-Zélande</option>
					<option value="palaos">Palaos</option>
					<option value="papouasieNouvelleGuinee">Papouasie-Nouvelle-Guinée</option>
					<option value="salomon">Salomon</option>
					<option value="samoa">Samoa</option>
					<option value="tonga">Tonga</option>
					<option value="tuvalu">Tuvalu</option>
					<option value="vanuatu">Vanuatu</option>
					</optgroup>
					</select><br/><br/>
					<span>Téléphone Portable</span><span class="error">*</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Email<span class="error">*</span><br /><input type="tel" name="numtel" class="input" autocomplete="off" required />
					&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" class="input" autocomplete="off" required><br /><br />
					<input type="submit" value="Valider votre inscription" name="Connexion" class="button_green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" value="Effacer" class="button_green"><br />
					<span class="notice"><span class="error">*Champs obligatoires</span></span><br />
					<p class="notice">Conformément à la loi informatique et libertés du 6 janvier 1978, vous disposez d'un droit d'accès et 
					de rectifications aux données personnelles vous concernant. Il suffit d'écrire à InnoCharl GROUP, BP 12100, Yaoundé, Cameroun ou de vous inscrire.</p>

				</form>
			</div>
		
		</div>
		</section>
		
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</div>
	</body>
</html>


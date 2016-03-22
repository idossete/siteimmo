<!DOCTYPE html>

<html>
	<head>
		<?php
		$titre = 'Bienvenue sur CDAE' ;
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
    if(isset($_POST["Deconnexion"]))
	{
		include("deconnexion.php"); 
	} 
	?>
	
	<?php
	if(isset($_SESSION['id']) AND isset($_SESSION['email']))
	{
	// on se connecte à MySQL 
	$connex = mysqli_connect('localhost', 'root', ''); 

	// on sélectionne la base 
	mysqli_select_db($connex,'siteinternet');
	
	$sql = 'SELECT * FROM membres WHERE id = "' .$_SESSION['id']. '"';
						if(isset($_POST["Modifier"]))
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
						$poste = $_POST["poste"];
						$id = $_SESSION['id'];
						
						$sql2 = "UPDATE membres SET 
						civilite = '$civilite',
						nom = '$nom',
						prenom = '$prenom',
						adresse = '".$adresse."',
						codepostal = $codepostal,
						ville = '$ville',
						pays = '$pays',
						telephone = '$telephone',
						email = '$email',
						poste = '$poste' WHERE id = $id ";
						
						$req2 = mysqli_query($connex,$sql2) or die('Erreur SQL !<br>'.$sql2.'<br>'.mysqli_error($connex)); 
						$req = mysqli_query($connex,$sql) or die('Erreur SQL !<br>'.$sql2.'<br>'.mysqli_error($connex)); 
						} 
						else
						{
						$req = mysqli_query($connex,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error($connex)); 
						}
	$resultat = mysqli_fetch_array($req);
		if ($resultat['privilege'] == 0)
		{
		$messErr = "";
	?>
	

	
	<section class=center3>
		<div class=center><br/>
			<div class="entete">
				<img src="imgFixe/<?php echo $resultat['photoprofil'];  ?>" alt="Photo de profil" width="150" height="150"/>
				<div class="title">
					<span><h1><?php echo $resultat['prenom']; ?>  <?php echo $resultat['nom']; ?></h1></span>
					Vous êtes inscrit depuis le <?php echo $resultat['dateinscript']; ?> <br /><br />
					Dernière connexion : <br /><br />
					<b>Poste actuel :</b> <?php echo $resultat['poste']; ?> <br /><br /><form method="POST" name="inscriptionform"  action="<?php echo $_SERVER["PHP_SELF"] ?>" >
					</form>					
				</div><br /><br />
				<form enctype="multipart/form-data" action="fileupload.php" method="post">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<b>Modifier votre photo :</b> <input type="file" name="monfichier" value="" /><input type="submit" name="validerPP"/>&nbsp;&nbsp;&nbsp;<b class="error"><?php echo $messErr; ?></b><br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" value="Déconnexion" name="Deconnexion" class="button_green">
					</form>
			</div>
			
			<form method="POST" name="inscriptionform" autocomplete="on" action="<?php echo $_SERVER["PHP_SELF"] ?>" >
				<fieldset>
				<legend><h1>INFORMATIONS PERSONNELLES</h1></legend>
					Civilité&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Poste Actuel <br />
					<SELECT name="choisissez" class="input" />
					<OPTION VALUE="<?php echo $resultat['civilite']; ?>"><?php echo $resultat['civilite']; ?></OPTION>
						<optgroup label="Choisissez">
						<OPTION VALUE="M">M</OPTION>
						<OPTION VALUE="Mme">Mme</OPTION>
						<OPTION VALUE="Mlle">Mlle</OPTION>
						</optgroup>
					</SELECT>
					&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="poste" value = "<?php echo $resultat['poste']; ?>" class="input" />
					<br /><br />
					Nom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Prénom<br /><input type="text" name="fname" value = "<?php echo $resultat['nom']; ?>" class="input" >
					&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" value = "<?php echo $resultat['prenom']; ?>" class="input" ><br /><br />
					Adresse &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Code Postal<br /><input type="text" name="address" value="<?php echo $resultat['adresse']; ?>" class="input" >
					&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cpostal" value="<?php echo $resultat['codepostal']; ?>" class="input" ><br /><br />
					Ville &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Pays<br /><input type="text" name="ville" value="<?php echo $resultat['ville']; ?>" class="input" />
					&nbsp;&nbsp;&nbsp;&nbsp;<SELECT name="pays" autocomplete="off" class="input" />
					<OPTION VALUE="<?php echo $resultat['pays']; ?>"><?php echo $resultat['pays']; ?></OPTION>
					<optgroup label="Choisissez">
					<option value="Cameroun">Cameroun </option>
					<option value="Congo">Congo </option>
					</optgroup>
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
					<option value="france">France</option>
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
					Téléphone Portable &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Email<br /><input type="tel" name="numtel" class="input" value="<?php echo $resultat['telephone']; ?>" autocomplete="off">
					&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" value="<?php echo $resultat['email']; ?>" class="input" autocomplete="off"><br /><br />
					<input type="submit" value="Modifier" name="Modifier" class="button_green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<br />
					<p class="notice">Conformément à la loi informatique et libertés du 6 janvier 1978, vous disposez d'un droit d'accès et 
					de rectifications aux données personnelles vous concernant. Il suffit de modifier les champs ci-dessus.</p>
					
					<?php
					    $motdepasseErr = "";
						if(isset($_POST["ValiderMP"]))
						{
						$Amotdepasse = $_POST["expassadmin"];
						$motdepasse1 = $_POST["newpassadmin"];
						$motdepasse2 = $_POST["newpassadmin2"];
						$id = $_SESSION['id'];
							if(($resultat["motdepasse"] == $Amotdepasse) && ($motdepasse1 == $motdepasse2))
							{ 
							$sql3 = "UPDATE membres SET 
							motdepasse = '$motdepasse2' WHERE id = $id ";
							$req3 = mysqli_query($connex,$sql3) or die('Erreur SQL !<br>'.$sql3.'<br>'.mysqli_error($connex)); 
							$motdepasseErr = "Mot de passe modifié";
							}
							else 
							{
								if ($resultat["motdepasse"] != $Amotdepasse)
								{
								$motdepasseErr = "Ancien mot de passe incorrect";
								}
								
								else 
								{
									if ($motdepasse1 != $motdepasse2)
									{
									$motdepasseErr = "Les 2 mots de passe sont différents";
									}
								}
							}
						}
					?>
					
					<fieldset class="smallfield">
					<legend><h2>Modifier votre mot de passe</h2></legend>
						Ancien mot de passe :</b><br/> <input type="password" name="expassadmin" class="input" /><br/><br/>
						Nouveau mot de passe :</b><br/> <input type="password" name="newpassadmin" class="input" /><br/><br/>
						Confirmer nouveau mot de passe :</b><br/> <input type="password" name="newpassadmin2" class="input" /><br/><br/>
						<input type="submit" value="Valider" name="ValiderMP" class="button_green"><br/><br/>
						<b class="error"><?php echo $motdepasseErr; ?></b>
					</fieldset>
				</fieldset>
			</form><br/><br/>
					
					
			<?php
					
				$messageErr = "";
				$idmsg = "";
						if(isset($_POST["ValiderPan"]))
						{
							$idmsg = $_POST["idpan"];
							$sql18 = 'SELECT * FROM panier';
							$req18 = mysqli_query($connex,$sql18) or die('Erreur SQL !<br>'.$sql18.'<br>'.mysqli_error($connex)); 
							while($resultat18 = mysqli_fetch_assoc($req18))
							{
							if($idmsg != $resultat18["id"])
								{
								$messageErr = "id invalide";
								}
							else
								{
								$sql19 = 'DELETE FROM panier WHERE '."id".' = '.$idmsg.'';
								$req19 = mysqli_query($connex,$sql19) or die('Erreur SQL !<br>'.$sql19.'<br>'.mysqli_error($connex)); 
								$messageErr = "Article supprimé";
								} 
							}
							
						}
			?>
			
			
			<fieldset class="mediumfield">
				<legend><h1>VOTRE PANIER</h1></legend>
			<div class="msg">
						<table class="tabmsg">
							<thead> 
							<tr>
								<th>id</th>
								<th>Ce que vous désirez acheter</th>
							</tr>
							</thead>
				
				<?php 
						try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=siteinternet', 'root', '');
						}
						catch(Exception $e)
						{
							die('Erreur : '.$e->getMessage());
						}
						$id = $_SESSION['id'];
						$reponse8 = $bdd->query('SELECT * FROM panier');
						// On affiche chaque entrée une à une
						while ($donnees8 = $reponse8->fetch())
						{
					?>
							<tbody> <!-- Corps du tableau -->
								<tr>
									<td><?php echo $donnees8['id'];  ?></td>
									<td><?php echo $donnees8['titre'];  ?></td>
								
					<?php
						}
						$reponse8->closeCursor(); // Termine le traitement de la requête
					?>
								</tr>
							</tbody>
						</table>
			</div>
			
						
			
			<br/>
			<form method="POST" name="personnesform"  action="<?php echo $_SERVER["PHP_SELF"] ?>" >
			<b>Pour supprimer un article, veuillez saisir son id ici : </b>
			<br/> 
			<input type="text" name="idpan" class="input" required />
			<br/><br/>
			<input type="submit" value="Supprimer" name="ValiderPan" class="button_green">&nbsp;&nbsp;&nbsp;&nbsp;<b class="error"><?php echo $messageErr; ?></b>
			</form>
			<br/><br/>
			</fieldset><br/><br/>
			
			<fieldset class="bigfield">
				<legend><h1>NOUS CONTACTER</h1></legend>
				<div id="contactPart">
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
		$messageerr = "";
			
		if (isset($_POST['sendblog']))
		{ 
		 	$nomc = $_POST["nom"];
			$telephonec = $_POST["telvisit"];
			$emailc = $_POST["email3"];
			$objet = $_POST["objet"];
			$message = $_POST["message"];

			// on crée la requête SQL  
			$sql4 = "INSERT INTO nouscontacter(nomc,emailc,telephonec,objet,message) VALUES(
			'$nomc', 
			'$emailc',
			$telephonec, 
			'$objet', 
			'$message')";

			// on envoie la requête 
			$req = mysqli_query($connex,$sql4) or die('Erreur SQL !<br>'.$sql4.'<br>'.mysqli_error($connex));
			$messageerr = "Message envoyé !";
		}
		
		?>
			<div id="formPart"><br/>
				<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" name="formlog2" > 
					<input type="text" name="nom" class="input"  placeholder="Nom (requis)" value = "<?php echo $resultat['nom']; ?> <?php echo $resultat['prenom']; ?>" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="email" name="email3" class="input" placeholder="Email (requis)" value = "<?php echo $resultat['email']; ?>" required /><br/><br/>
					<input type="tel" name="telvisit" class="input" placeholder="Téléphone (requis)" value = "<?php echo $resultat['telephone']; ?>" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="objet" class="input"  placeholder="Objet" /><br/><br/>
					<textarea placeholder="Votre message (requis)" class="input2" name="message" required ></textarea><br/><br/>
					<input type="submit" name="sendblog" value="Envoyer" class="button_green" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" value="Effacer" class="button_green"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b class="error"> <?php echo $messageerr; ?> </b>
					<br/>
				</form>
			</div>
			</fieldset>
		</div>
	</section>
	<?php
		}
		else
		{
		$messErr = "";
	?>
	

	<section class=center3>
		<div class=center><br/>
			<div class="entete">
				<img src="imgFixe/<?php echo $resultat['photoprofil'];  ?>" alt="Photo de profil" width="150" height="150"/>
				<div class="title">
					<span><h1><?php echo $resultat['prenom']; ?>  <?php echo $resultat['nom']; ?></h1></span>
					Vous êtes inscrit depuis le <?php echo $resultat['dateinscript']; ?> <br /><br />
					Dernière connexion : <br /><br />
					<b>Poste actuel :</b> <?php echo $resultat['poste']; ?> <br /><br /><form method="POST" name="inscriptionform"  action="<?php echo $_SERVER["PHP_SELF"] ?>" >
					</form>					
				</div><br /><br />
				<form enctype="multipart/form-data" action="fileupload.php" method="post">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<b>Modifier votre photo :</b> <input type="file" name="monfichier" /><input type="submit" name="validerPP"/>&nbsp;&nbsp;&nbsp;<b class="error"><?php echo $messErr; ?></b><br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" value="Déconnexion" name="Deconnexion" class="button_green">
					</form>
			</div>
			
			<form method="POST" name="inscriptionform" autocomplete="on" action="<?php echo $_SERVER["PHP_SELF"] ?>" >
				<fieldset>
				<legend><h1>INFORMATIONS PERSONNELLES</h1></legend>
					Civilité&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Poste Actuel <br />
					<SELECT name="choisissez" class="input" />
					<OPTION VALUE="<?php echo $resultat['civilite']; ?>"><?php echo $resultat['civilite']; ?></OPTION>
						<optgroup label="Choisissez">
						<OPTION VALUE="M">M</OPTION>
						<OPTION VALUE="Mme">Mme</OPTION>
						<OPTION VALUE="Mlle">Mlle</OPTION>
						</optgroup>
					</SELECT>
					&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="poste" value = "<?php echo $resultat['poste']; ?>" class="input" />
					<br /><br />
					Nom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Prénom<br /><input type="text" name="fname" value = "<?php echo $resultat['nom']; ?>" class="input" >
					&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" value = "<?php echo $resultat['prenom']; ?>" class="input" ><br /><br />
					Adresse &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Code Postal<br /><input type="text" name="address" value="<?php echo $resultat['adresse']; ?>" class="input" >
					&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cpostal" value="<?php echo $resultat['codepostal']; ?>" class="input" ><br /><br />
					Ville &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Pays<br /><input type="text" name="ville" value="<?php echo $resultat['ville']; ?>" class="input" />
					&nbsp;&nbsp;&nbsp;&nbsp;<SELECT name="pays" autocomplete="off" class="input" />
					<OPTION VALUE="<?php echo $resultat['pays']; ?>"><?php echo $resultat['pays']; ?></OPTION>
					<optgroup label="Choisissez">
					<option value="Cameroun">Cameroun </option>
					<option value="Congo">Congo </option>
					</optgroup>
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
					<option value="france">France</option>
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
					Téléphone Portable &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Email<br /><input type="tel" name="numtel" class="input" value="<?php echo $resultat['telephone']; ?>" autocomplete="off">
					&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" value="<?php echo $resultat['email']; ?>" class="input" autocomplete="off"><br /><br />
					<input type="submit" value="Modifier" name="Modifier" class="button_green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<br />
					<p class="notice">Conformément à la loi informatique et libertés du 6 janvier 1978, vous disposez d'un droit d'accès et 
					de rectifications aux données personnelles vous concernant. Il suffit de modifier les champs ci-dessus.</p>
					
					<?php
					    $motdepasseErr = "";
						if(isset($_POST["ValiderMP"]))
						{
						$Amotdepasse = $_POST["expassadmin"];
						$motdepasse1 = $_POST["newpassadmin"];
						$motdepasse2 = $_POST["newpassadmin2"];
						$id = $_SESSION['id'];
							if(($resultat["motdepasse"] == $Amotdepasse) && ($motdepasse1 == $motdepasse2))
							{ 
							$sql3 = "UPDATE membres SET 
							motdepasse = '$motdepasse2' WHERE id = $id ";
							$req3 = mysqli_query($connex,$sql3) or die('Erreur SQL !<br>'.$sql3.'<br>'.mysqli_error($connex)); 
							$motdepasseErr = "Mot de passe modifié";
							}
							else 
							{
								if ($resultat["motdepasse"] != $Amotdepasse)
								{
								$motdepasseErr = "Ancien mot de passe incorrect";
								}
								
								else 
								{
									if ($motdepasse1 != $motdepasse2)
									{
									$motdepasseErr = "Les 2 mots de passe sont différents";
									}
								}
							}
						}
					?>
					
					<fieldset class="smallfield">
					<legend><h2>Modifier votre mot de passe</h2></legend>
						Ancien mot de passe :</b><br/> <input type="password" name="expassadmin" class="input" /><br/><br/>
						Nouveau mot de passe :</b><br/> <input type="password" name="newpassadmin" class="input" /><br/><br/>
						Confirmer nouveau mot de passe :</b><br/> <input type="password" name="newpassadmin2" class="input" /><br/><br/>
						<input type="submit" value="Valider" name="ValiderMP" class="button_green"><br/><br/>
						<b class="error"><?php echo $motdepasseErr; ?></b>
					</fieldset>
				</fieldset>
			</form><br/><br/>
					
			<fieldset class="mediumfield">
				<legend><h1>MESSAGES</h1></legend>
			<div class="msg">
						<table class="tabmsg">
							<thead> 
							<tr>
								<th>id</th>
								<th>Nom</th>
								<th>Email</th>
								<th>Telephone</th>
								<th>Objet</th>
								<th>Message</th>
							</tr>
							</thead>
				
				<?php 
						try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=siteinternet', 'root', '');
						}
						catch(Exception $e)
						{
							die('Erreur : '.$e->getMessage());
						}
						$reponse4 = $bdd->query('SELECT * FROM nouscontacter');

						// On affiche chaque entrée une à une
						while ($donnees4 = $reponse4->fetch())
						{
					?>
						
							<tbody> <!-- Corps du tableau -->
								<tr>
									<td><?php echo $donnees4['id'];  ?></td>
									<td><?php echo $donnees4['nomc'];  ?></td>
									<td><?php echo $donnees4['emailc'];  ?></td>
									<td><?php echo $donnees4['telephonec'];  ?></td>
									<td><?php echo $donnees4['objet'];  ?></td>
									<td><?php echo $donnees4['message'];  ?></td>
								
					<?php
						}
						$reponse4->closeCursor(); // Termine le traitement de la requête
					    $messageErr = "";
						$messageEr = "";
					?>
								</tr>
							</tbody>
						</table>
			</div>
			<br/>
			<form method="POST" name="messageform"  action="<?php echo $_SERVER["PHP_SELF"] ?>" >
			<b>Pour supprimer un message, veuillez saisir son id ici : </b>
			
			<br/> 
			<input type="text" name="idmsg" class="input" required />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<b>Cliquer ici pour vider la boîte de réception : </b>
			<br/><br/>
			<input type="submit" value="Supprimer" name="ValiderMsg" class="button_green"><b class="error"><?php echo $messageEr; ?></b>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" value="Vider" name="ViderMsg" class="button_green"><b class="error"><?php echo $messageErr; ?></b>
			</form>
			<br/><br/>
			</fieldset><br/><br/>
			
			<?php
			$idmsg = "";
						if(isset($_POST["ValiderMsg"]))
						{
							$idmsg = $_POST["idmsg"];
							$sql6 = 'SELECT * FROM nouscontacter';
							$req6 = mysqli_query($connex,$sql6) or die('Erreur SQL !<br>'.$sql6.'<br>'.mysqli_error($connex)); 
							while($resultat6 = mysqli_fetch_assoc($req6))
							{
							if($idmsg != $resultat6["id"] )
								{
								$messageEr = "id invalide";
								}
							else
								{
								$sql7 = 'DELETE FROM nouscontacter WHERE id = '.$idmsg.'';
								$req7 = mysqli_query($connex,$sql7) or die('Erreur SQL !<br>'.$sql7.'<br>'.mysqli_error($connex)); 
								$messageEr = "Message supprimé";
								}
							}
						}
			?>
			
			<?php
						if(isset($_POST["ViderMsg"]))
						{
							$sql11 = "TRUNCATE TABLE 'nouscontacter'";
							$req11 = mysqli_query($connex,$sql11) or die('Erreur SQL !<br>'.$sql11.'<br>'.mysqli_error($connex)); 
							$messageErr = "Messages supprimés";
						}
			?>
			
			<?php
			$idmm = "";
			$messgeErr = "";
						if(isset($_POST["ValiderMm"]))
						{
							$idmm = $_POST["idmm"];
							$sql8 = 'SELECT * FROM membres';
							$req8 = mysqli_query($connex,$sql8) or die('Erreur SQL !<br>'.$sql8.'<br>'.mysqli_error($connex)); 
							while($resultat8 = mysqli_fetch_assoc($req8))
							{
							if($idmm != $resultat8["id"])
								{
								$messgeErr = "id invalide";
								}
							else
								{
								$sql9 = "DELETE FROM membres WHERE id = $idmm";
								$req9 = mysqli_query($connex,$sql9) or die('Erreur SQL !<br>'.$sql9.'<br>'.mysqli_error($connex)); 
								$messgeErr = "Membre supprimé";
								} 
							}
						}
			?>
			
			<fieldset class="mediumfield">
				<legend><h1>LISTE DES MEMBRES</h1></legend>
			<div class="msg">
						<table class="tabmsg">
							<thead> 
							<tr>
								<th>Num</th>
								<th>id</th>
								<th>Civilité</th>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Adresse</th>
								<th>Code Postal</th>
								<th>Ville</th>
								<th>Pays</th>
								<th>Telephone</th>
								<th>Email</th>
								<th>Date Inscript</th>
								<th>Panier</th>
								<th>Poste</th>
							</tr>
							</thead>
				
				<?php 
						try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=siteinternet', 'root', '');
						}
						catch(Exception $e)
						{
							die('Erreur : '.$e->getMessage());
						}
						$reponse3 = $bdd->query('SELECT * FROM membres');

						// On affiche chaque entrée une à une
						while ($donnees3 = $reponse3->fetch())
						{
					?>
						
							<tbody> <!-- Corps du tableau -->
								<tr>
									<td><img src="imgFixe/<?php echo $donnees3['photoprofil'];  ?>" alt="Photo de profil" width="100" height="100"/></td>
									<td><?php echo $donnees3['id'];  ?></td>
									<td><?php echo $donnees3['civilite'];  ?></td>
									<td><?php echo $donnees3['nom'];  ?></td>
									<td><?php echo $donnees3['prenom'];  ?></td>
									<td><?php echo $donnees3['adresse'];  ?></td>
									<td><?php echo $donnees3['codepostal'];  ?></td>
									<td><?php echo $donnees3['ville'];  ?></td>
									<td><?php echo $donnees3['pays'];  ?></td>
									<td><?php echo $donnees3['telephone'];  ?></td>
									<td><?php echo $donnees3['email'];  ?></td>
									<td><?php echo $donnees3['dateinscript'];  ?></td>
									<td><?php echo $donnees3['panier'];  ?></td>
									<td><?php echo $donnees3['poste'];  ?></td>
								
					<?php
						}
						$reponse3->closeCursor(); // Termine le traitement de la requête
					?>
								</tr>
							</tbody>
						</table>
			</div>
			
			
			<br/>
			<form method="POST" name="personnesform"  action="<?php echo $_SERVER["PHP_SELF"] ?>" >
			<b>Pour supprimer une personne, veuillez saisir son id ici : </b>
			<br/> 
			<input type="text" name="idmm" class="input" required />
			<br/><br/>
			<input type="submit" value="Supprimer" name="ValiderMm" class="button_green">&nbsp;&nbsp;&nbsp;&nbsp;<b class="error"><?php echo $messageErr; ?></b>
			</form>
			<br/><br/>
			</fieldset>
		</div>
	</section>
	<?php
		}
	
	// on ferme la connexion à mysql 
	mysqli_close($connex);  
	}
	
	else
	{ ?>
	
	<section class=center3>
		<div class=center><br/>
	Vous ne pouvez avoir accès à cette page que si vous êtes connectés. Veuillez vous connecter <a href="membre.php">ici</a>.
	
	
	<br/><br/><br/>
		</div>
	</section>
	<?php
	}
	?>
	
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</div>
	</body>
</html> 

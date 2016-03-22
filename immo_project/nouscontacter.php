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
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" name="formlog2" > 
					<input type="text" name="nom" class="input"  placeholder="Nom (requis)" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="email" name="email3" class="input"  placeholder="Email (requis)" required /><br/><br/>
					<input type="tel" name="telvisit" class="input"  placeholder="Téléphone (requis)" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="objet" class="input"  placeholder="Objet"/><br/><br/>
					<textarea placeholder="Votre message (requis)" class="input2" name="message" required></textarea><br/><br/>
					<input type="submit" name="sendblog" value="Envoyer" class="button_green" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" value="Effacer" class="button_green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b class="error"> <?php echo $messageerr; ?> </b>
					<br/>
</form>
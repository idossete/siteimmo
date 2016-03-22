<!DOCTYPE HTML">


<!--Langue utilisé dans la page-->
<html lang="fr">
<!--Head-->
	<head>
	<?php
		$titre = "Découverte";
		include("head.php"); ?>
		<script src="Javascript/quiz.js" type="text/javascript"></script>
	</head>

	<body onLoad="init()">
	<div class="cent1">
		<!--Entete et Menu à garder sur la page, comme sur les autres-->
		<header>
			 <?php include("entete.php"); ?>
			
			<nav>
				<?php include("menus.php"); ?>
			</nav>
		</header>
		<section class=center3>
		<article class=center><br/>
	
	<form method="post">
		<div  align="center">
			<table border="4" width="460px">
				<tr>
				  <td align="center" colspan="3" >African Quiz</td>
				</tr>
				<tr>
				  <td align="right"><b>Question:</b></td>
				  <td  align="center"><textarea cols="80" rows="2" name="question"></textarea></td>
				</tr>
				<tr>
				  <td align="center"><input type="text" name="tda" size="12" value=""></td>
				  <td align="left" width="350"><input type="text" name="choiceA" size="70"></td>
				  <td  align="center" width="40px"><input type=button name="choixa" class="bout3" value="A" onClick="repa(this.form);testrep(this.form);"></td>
				</tr>
				<tr>
				  <td align="center" ><input type="text" name="tdb" size="12" value=""></td>
				  <td align="left"><input type="text" name="choiceB" size="70"></td>
				  <td align="center"><input type=button name="choixb" class="bout3" value="B" onClick="repb(this.form);testrep(this.form);"></td>
				</tr>
				<tr>
				  <td align="center" ><input type="text" name="tdc" size="12" value=""></td>
				  <td align="left"><input type="text" name="choiceC" size="70"></td>
				  <td align="center"><input type=button name="choixc" class="bout3" value="C" onClick="repc(this.form);testrep(this.form);"></td>
				</tr>
				<tr>
				  <td align="center"><input type="text" name="tdd" size="12" value=""></td>
				  <td align="left"><input type="text" name="choiceD" size="70"></td>
				  <td align="center"><input type=button name="choixd" class="bout3" value="D" onClick="repd(this.form);testrep(this.form);"></td>
				</tr>
				<tr>
				  <td colspan="3" align="left"><input type="hidden" name="yourChoice" size="4"></td>
				</tr>
				<tr>
				  <td align="center"><input type="button" class="bout" value="Nouveau Jeu" onclick="clearForm(this.form);init(this.form);"></td>
				  <td colspan="2" align="center"><input type="button" align="center" class="bout2" value="Question Suivante" onclick="clearRep(this.form);nextQuestion(this.form);"></td>
				  </td>
				</tr>
				<tr>
				  <td align="right"><b>Resultats:</b></td>
				  <td colspan="2" align="center" background="lightyellow"><p><textarea COLS="80" ROWS="3" name="results"></textarea></td>
				</tr>
				<tr>
				  <td align="right"><b>Score:</b></td>
				  <td colspan="2" ><b>&nbsp;&nbsp;Points:&nbsp;</b><input type="text" name="myScore" size="4">&nbsp;&nbsp;<b>sur&nbsp;&nbsp;</b><input type="text" name="questNo" size="4"><b>&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;</b>
				  <input type="text" name="percent" size="6"><b>&nbsp;%</td>
				</tr>
			</table>
		</div>
</body>
		</article>
	</section>	
		
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</body>
</html>
<!DOCTYPE html>

<html>
	<head>
		<?php
		$titre = "CDAE Jeux";
		include("head.php"); 
		?>
		
	<script type="text/javascript">
      // Variables.
      var ballX = 150; // position x de la balle.
      var ballY = 150; // position y de la balle.
      var ballDX = 2; // Change la position x de la balle.
      var ballDY = 4; // Change la position y de la balle.
      var boardX = 500; // largeur du bord.
      var boardY = 400; // hauteur du bord.
      var paddleX = 150; // emplacement initial du ping.
      var paddleH = 10; // hauteur du ping.
      var paddleD = boardY - paddleH; // profondeur du ping.
      var paddleW = 120; // largeur du ping.
      var canvas; // Canvas element.
      var ctx; // Canvas context.
      var gameLoop; // Intervalle de temps de la boucle de jeu.
      // Cette fonction est appelée au début de la page(la 1ere).


      function drawGameCanvas() {

        // Element du canvas.
        canvas = document.getElementById("gameBoard");

        // Verification de l'element du canvas.
        if (canvas.getContext) {
          // specifaction d'un canvas de type 2d.
          ctx = canvas.getContext("2d");

          // lancer le jeu jusqu'à ce que la balle tombe à terre.
          gameLoop = setInterval(drawBall, 16);

          // ajouter les touches clavier.
          window.addEventListener('keydown', whatKey, true);

        }
      }

      function drawBall() {

        // Mise à 0 de l'espace de jeu.
        ctx.clearRect(0, 0, boardX, boardY);

        // remplir l'espace de jeux: les coordoneeées changent a chaque fois que la boule et le ping se deplacent.
        ctx.fillStyle = "thistle";
        ctx.beginPath();
        ctx.rect(0, 0, boardX, boardY);
        ctx.closePath();
        ctx.fill();

        // Dessin d'une balle.
        ctx.fillStyle = "tomato";
        ctx.beginPath();
        ctx.arc(ballX, ballY, 10, 0, Math.PI * 2, true);
        ctx.closePath();
        ctx.fill();

        // Dessin de la ping.
        ctx.fillStyle = "navy";
        ctx.beginPath();
        ctx.rect(paddleX, paddleD, paddleW, paddleH);
        ctx.closePath();
        ctx.fill();

        // Changer la position de la boule.
        ballX += ballDX;
        ballY += ballDY;

        // deplacement à gauche ou à droite.
        if (ballX + ballDX > boardX - 15 || ballX + ballDX < 15) ballDX = -ballDX;

        // Renvoyer la balle si elle atteind le sommet. 
        if (ballY + ballDY < 15) ballDY = -ballDY;
        // Si la balle atteind le sol, verifier si elle atteind le ping.
        else if (ballY + ballDY > boardY - 15) {
          // Si la balle touche le ping, la renvoyer.
          if (ballX > paddleX && ballX < paddleX + paddleW) ballDY = -ballDY;
          // Sinon le jeux est fini.
          else {
            clearInterval(gameLoop);
            alert("Game over!");
          }
        }
      }

      // gestion des boutons du clavier.


      function whatKey(evt) {

        switch (evt.keyCode) {
          // flèche de gauche.
        case 37:
          paddleX = paddleX - 20;
          if (paddleX < 0) paddleX = 0;
          break;

          // fleche de droite.
        case 39:
          paddleX = paddleX + 20;
          if (paddleX > boardX - paddleW) paddleX = boardX - paddleW;
          break;
        }
      }
    </script>
  </head>
  
	<body onload="drawGameCanvas()">
	<div class="cent">
		<header>
			 <?php include("entete.php"); ?>
			
			<nav>
				<?php include("menus.php"); ?>
			</nav>
		</header>
		
		<section class=center3>
		<article class=center><br/>
			<h1>Canvas Racquetball</h1>
			<div>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;</span>
			</div>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<canvas id="gameBoard" width="500" height="400"></canvas>
			
			</article>
		</section>
		<footer>
			 <?php include("pied_de_page.php"); ?>
		</footer>
	</div>
	</body>
</html> 

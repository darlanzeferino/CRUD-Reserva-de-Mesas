<!DOCTYPE html>
<html>
<head>
	

	<title>RESERVA</title>
	
	<link rel="stylesheet" href="../css/style.css">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

	<link rel="shortcut icon" href="../img/logoxibenacuia1.fw.png" type="image/x-icon">

	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-image: url('../img/reserva.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
		
	<div class="container">
		<div class="img">
			<img src="../img/logoxibenacuia1.fw.png">
		</div>
		<div class="login-content">
			<form id="casdastro-form" action="../database/reservaM.php" method="post">
				<h3 class="title">FAÇA SUA RESERVA</h3>

				<div class="input-div one">
					<div class="i"></div>
					<div class="div">
						<input type="text" name="nMesa" placeholder="Numero da Mesa" class="input" pattern="[0-9]+" required>
					</div>
				</div>
				<div class="input-div pass">
						<div class="i"></div>
						<div class="div">
							<input type="text" name="nomeReserva" placeholder="Nome Reserva" class="input" pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s]+" required>
						</div>
				</div>
				<div class="input-div pass">
					<div class="i"></div>
					<div class="div">
						<input type="text" name="qtdPessoas" placeholder="Qtd Pessoas" class="input" pattern="[0-9]+" required>
					</div>
				</div>
				<div class="input-div pass">
					<div class="i"></div>
					<div class="div">
						<input type="text" name="telReserva" placeholder="Tel Reserva" class="input" pattern="[0-9]+" required>
					</div>
				</div>

				<?php
				require('../database/valida.php');
				?>

				<input type="submit" class="btn" name="reserva" value="RESERVAR">
			</form>
		</div>
	</div>
	<script type="text/javascript" src="../js/main.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>Xibé na Cuia</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="shortcut icon" href="img/logoxibenacuia1.fw.png" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/Fundo-Home.css">

</head>

<body>

	<?php

	require('../Papper-AWEB/views/partials/header.php');

	?>

	<main>
		<div class="text-center">
			<div class="logo-principal">
				<img src="img/logoxibenacuia1.fw.png">
			</div>

		</div>

		
		<div class="submenu">
			<p class="col-sm-4 mx-auto">
				<a href="views/reserva.php" class="btn btn-outline-light btn-lg btn-block link-submenu btn-custom">Fazer Reservas</a>
			</p>
			<p class="col-sm-4 mx-auto">
				<a href="views/cardapio.php" class="btn btn-outline-light btn-lg btn-block link-submenu btn-custom">Cardápio Digital</a>
			</p>
		</div>


		<div class="text-center white-text">
			<h4>Horário de Funcionamento</h4>
			<p>Segunda a quinta das 11:30h às 23:00h | Sexta e sabádo das 11:30h às 00:00h | Domingo das 11:30h às 23:00h</p>
			<h4>Couvert Artístico (opcional)</h4>
			<p>R$ 5,90</p>
			<p>Taxa de serviço 10% (opcional)</p>
			<p>Site construído para o paper da <a class="link-texto" href="https://portal.uniasselvi.com.br/">UNIASSELVI</a>. 
			Elaborado por 
			<a class="link-texto" href="https://github.com/darlanzeferino">darlanzeferino</a>,
			<a class="link-texto" href="https://github.com/fabiosrs">fabiosrs</a>,
			<a class="link-texto" href="https://github.com/fefilopes">fefilopes</a>,
			<a class="link-texto" href="https://github.com/lupandrioli">lupandrioli</a>,
			<a class="link-texto" href="https://github.com/PabloDantasDev">PabloDantasDev</a>.
			</p>
		</div>


	</main>

	<?php

	require('../Papper-AWEB/views/partials/footer.php');

	?>

</body>

</html>

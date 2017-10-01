<?php
session_start();
if($_SESSION["email"] == null || $_SESSION["email"] ==""){
	header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sofit - Mantenha-se Saudável</title>
	<!--****************************************************************************************************************-->
	<meta charset="utf-8">
	<meta name="description" content="SoFit - Mantenha-se saúdavel. Ajudamos você a conquistar seu peso ideal através de sugestões de dietas e exercícios">
	<meta name="keywords" content="Academia, Sáude, Alimentação, Dieta">
	<meta name="author" content="André, Jacilene, Márcio, Wildici">
	<!--****************************************************************************************************************-->
	<link rel="icon" href="alteres.png">
	<script src="bibjs.js" charset="utf-8" async defer></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="calculadora-menu.css">
	<link rel="stylesheet" href="calculadora-sofit.css">

	<title>SoFit - Mantenha-se Saudável</title>

</head>
<body class="text-center">
	<nav class="navbar navbar-inverse navbar-expand-md navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="#">SoFit</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav ">
					<li class="nav-item">
						<a class="nav-link" href="registro.php">Registro de Peso</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="sobre.php">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Sair</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="loginbox">
		<div id="loginboxinterno">
			<div id="loginboxlabel">Índice de massa corporal (IMC)</div>
			<p> </p>
			<div class="inputdiv"> <label for="peso">Peso <br> <input type="text" id="peso" placeholder="Kg" maxlength="3"></label>
				<p> <label for="altura">Altura<br> <input type="text" placeholder="Ex.: 1.70 " id="altura" maxlength="4"></label> </p>
				<p> </p>
				<div id="botoes">
					<button id="botao" onclick="calculaIMC();"> Calcular </button> <br> <br>
				</div> <br>
				<div id="imc"></div>
				<div id="resu"></div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
	<script src="https://pingendo.com/assets/scripts/smooth-scroll.js"></script>
</body>
</html>

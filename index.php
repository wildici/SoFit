<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sofit - Mantenha-se Saudável</title>
	<meta charset="utf-8">
	<meta name="description" content="SoFit - Mantenha-se saúdavel. Ajudamos você a conquistar seu peso ideal através de sugestões de dietas e exercícios">
	<meta name="keywords" content="Academia, Sáude, Alimentação, Dieta">
	<meta name="author" content="André, Jacilene, Márcio, Wildici">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="index.css">
	<link rel="icon" href="alteres.png">
</head>

<body>
	<div id="loginbox">
		<div id="loginboxinterno">
			<div id="loginboxlabel">SoFit - Login</div>     
			<div class="inputdiv" id="inputuser">
				<form method="POST" action="leindex.php">
					<input type="text" id="email" name="email" placeholder="Email" onfocus="insereCorNome(this);" required autofocus autocomplete="on">
				</div>
				<div class="inputdiv" id="inputsenha">
					<input type="password" id="senha" name="senha" placeholder="Senha" onfocus="insereCorNome(this);" required>
				</div>
				<div id="botoes">
					<?php
					if(isset($_GET['msg'])){
						?>
						<h4><center><font color="#FF0000">Email ou Senha Inválidos.</font></center></h4>
						<?php 
					}
					?>
					<button id="botao" type="submit"> Entrar </button><br><br>
					<div id="esqueceusenha"><a href="cadastro.php"> Criar Conta </a></div>
				</form>
			</div>       
		</div>  
	</div>
	<section>
		<footer id="cabecalho"><center>
			<h4 style="color: white;">© Copyright 2017 SoFit - Todos os direitos reservados. </h4></center>
		</footer>
	</section>
</body>
</html>
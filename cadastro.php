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
	<link rel="stylesheet" href="cadastro.css">
	<link rel="icon" href="alteres.png">
	<script src="bibjs.js" charset="utf-8" async defer></script>
	<!--****************************************************************************************************************-->
</head>
<body>
	<div id="loginbox">
		<div id="loginboxinterno">
			<div id="loginboxlabel">SoFit - Cadastro </div>       
			<form action="lecadastro.php" method="POST" onSubmit="return validaDados()"; name="dados">     
				<div class="inputdiv" >
					<input type="text" id="inputnome" placeholder="Nome" name="inputnome" required onfocus="insereCorNome(this);" autofocus maxlength="50">
				</div>          
				<div class="inputdiv" id="inputEmail" >
					<input type="Email" id="inputemail" placeholder="Email" required name="inputemail" onfocus="insereCorNome(this);" >
				</div>
				<div class="inputdiv" id="inputSenha" >
					<input type="password" id="inputsenha" placeholder="Senha" minlength="8" name="inputsenha" onfocus="insereCorNome(this);" required>
				</div>
				<div class="inputdiv" id="inputSenha2">
					<input type="password"  id="inputsenha2" placeholder="Repetir Senha" name="inputsenha2" minlength="8" onfocus="insereCorNome(this);" required>
				</div>          
				<div id="botoes">
					<button id="botao" type="submit">Cadastrar</button><br><br><br>     
				</form>
				<div id="login"><a href="index.php"> Fazer Login </a></div>
			</div>       
		</div>  
	</div>
</body>
</html>

<?php
session_start();
if($_SESSION['email'] == null || $_SESSION['email'] == ""){
	header('Location: index.php');
}


include "conexao.php";
try{

	$peso_inicial = $_GET["peso"];
	$altura = $_GET["altura"];
	$email = $_SESSION["usuario"];
	
	$stmt2 =$conexao->prepare("select peso_inicial from usuario where id=?");
 	$stmt2->bindParam(1,$_SESSION["usuario"]);
 	$stmt2->execute();
	
	
 	$resultado = $stmt2->fetchAll(PDO::FETCH_ASSOC);

 		if($stmt2->rowCount() > 0){
 			
			

		foreach($resultado as $linha){
  			$peso = $linha['peso_inicial'];
    			if($peso == null || $peso==""){
			            $stmt =$conexao->prepare("update usuario set peso_inicial=?, altura = ?, data = NOW() where id=?");
						$stmt->bindParam(1,$peso_inicial);
						$stmt->bindParam(2,$altura);
						$stmt->bindParam(3,$_SESSION["usuario"]);
						$stmt->execute();
										
    			}else{
					
						$stmt1 = $conexao->prepare("insert into historico(id_usuario,peso, data) values (?, ?, NOW())");
						$stmt1->bindParam(1,$_SESSION["usuario"]);
						$stmt1->bindParam(2,$peso_inicial);
						$stmt1->execute();

    			}

	}
}else{
		echo "Ola";
}




}catch(PDOException $e){
	echo $e->getMessage();
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
					<button id="botao" onclick="calculaIMC();"> Calcular </button> 
				</div> <br> <br>
				

				<div id="imc"> <?php echo number_format($_GET['imc'],2);?> </div>

				<?php
				$imc = $_GET['imc'];

				if ($imc < 18.5){
					echo" <div id='resu'>Abaixo do Peso</div>";
					$tipo = 2;
					$tipo_exercicio = 2;
				}else if($imc > 18.6 && $imc < 24.9){
					echo" <div id='resu'>Peso Ideal</div>";
					$tipo = 3;
					$tipo_exercicio = 3;
				}else if($imc > 25 && $imc < 29.9){
					echo" <div id='resu'>Peso em Excesso</div>";
					$tipo = 1;
					$tipo_exercicio = 1;
				}else if($imc > 30 && $imc < 34.9){
					echo" <div id='resu'>Obesidade Grau I</div>";
					$tipo = 1;
					$tipo_exercicio = 1;
				}else if($imc > 35 && $imc < 39.9){
					echo" <div id='resu'>Obesidade Grau II (Severa)</div>";
					$tipo = 1;
					$tipo_exercicio = 1;
				}else if($imc >= 40){
					echo" <div id='resu'>Obesidade Grau III (Mórbida)</div>";
					$tipo = 1;
					$tipo_exercicio = 1;
				}
				?>
				<button id="btn-dieta" onclick="mostraDieta();">Exibir Dietas</button> <p> <p> <p> <button id="btn-exercicio" onclick="mostraExercicio();"> Exibir Exercícios</button>
				<br>
				<div id="dieta" style="display: none">
					<div id="links">
						<div id="dieta1"><a href="dietas.php?refeicao=1&tipo=<?php echo $tipo?>"> Café da Manhã </a></div>
						<div id="dieta2"><a href="dietas.php?refeicao=2&tipo=<?php echo $tipo?>"> Lanche da Manhã </a></div>
						<div id="dieta3"><a href="dietas.php?refeicao=3&tipo=<?php echo $tipo?>"> Almoço </a></div>
						<div id="dieta4"><a href="dietas.php?refeicao=4&tipo=<?php echo $tipo?>"> Lanche da Tarde </a></div>
						<div id="dieta5"><a href="dietas.php?refeicao=5&tipo=<?php echo $tipo?>"> Jantar </a></div>     
					</div>  
				</div>

				<br>
				
				<div id="exercicios" style="display: none">
					<div id="links">
						<div id="exercicio1"><a href="exercicios.php?treino=1&tipo_exercicio=<?php echo $tipo_exercicio?>"> Treino A </a></div>
						<div id="exercicio2"><a href="exercicios.php?treino=2&tipo_exercicio=<?php echo $tipo_exercicio?>"> Treino B </a></div>
						<div id="exercicio3"><a href="exercicios.php?treino=3&tipo_exercicio=<?php echo $tipo_exercicio?>"> Treino C </a></div>          
					</div>  
				</div>

			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
<script src="https://pingendo.com/assets/scripts/smooth-scroll.js"></script>
</body>
</html>

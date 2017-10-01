<?php

include "sessao.php";

$refeicao = $_GET['refeicao'];
$tipo = $_GET['tipo'];

if($refeicao ==1){
	$dieta = 'Café da Manhã';
}else if ($refeicao ==2){
	$dieta = 'Lanche da Manhã';
}else if ($refeicao ==3){
	$dieta = 'Almoço';
}else if ($refeicao ==4){
	$dieta = 'Lanche da Tarde';
}else{
	$dieta = 'Jantar';
}

?>

<!DOCTYPE html>
<html>
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
	<style>
		body{
			background-color:#000000;       
			
		}
		
		#loginbox{
			background-color:#363636;
			width:400px;
			height:2000px;
			margin:140px auto 0px;
			border-radius:5px;
			
		}
		
		#loginboxinterno{
			width:380px;
			height:1980px;
			background-color:#000000;
			position:absolute;
			margin:10px;
			border-radius:5px;
			box-shadow:0px 0px 5px #E8E8E8
			overflow:hidden;

		}
		
		#loginboxlabel{
			background-color:#000000;
			height:45px;
			text-align:center;
			color: #FFA500;
			
			font:bold 20px/40px sans-serif;
			
			border-top-left-radius:5px;
			border-top-right-radius:5px;
			border-bottom:1px solid #696969;
			text-shadow:1px 0px 1px #FF8C00;
			
		}
		</style> 
</head>
<body class="text-center">
	<nav class="navbar navbar-inverse navbar-expand-md navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="calculadora.php">Voltar</a>
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
			<div id="loginboxlabel">SoFit - Dietas</div> 
			where
			<center><h3><font color="#F8F8FF"> <?php echo $dieta;?></h3></center>      
			
			<?php

			try{
				include "conexao.php";


				$resultado = $conexao->query("select * from dieta where id_tipo=$tipo and id_refeicao=$refeicao");
				foreach($resultado as $linha){

					echo utf8_encode($linha['descricao'])."<br>-----------------------------------------------------------------------<br>";
				}



// Check connection
			}catch (PDOExeption $e){

				echo $e->getMessage();

			}

			?>


			
			
			</div>       
		</div>  
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
	<script src="https://pingendo.com/assets/scripts/smooth-scroll.js"></script>
</body>
</html>

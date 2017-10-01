<html>
<head>
	<title></title>
	<meta http-equiv="refresh" content="0;url=index.php">
	<meta charset="utf-8">
</head>
<body>
	<?php
	try{
		include "conexao.php";
		$nome=utf8_decode($_POST["inputnome"]);
		$email=utf8_decode($_POST["inputemail"]);
		$senha= password_hash($_POST["inputsenha"],PASSWORD_DEFAULT);

		$stmt = $conexao->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)");

		$stmt->bindParam(1,$nome);
		$stmt->bindParam(2,$email);
		$stmt->bindParam(3,$senha);

		$stmt->execute();

	}catch (PDOException $e){
		echo $e->getMessage();
	}
	?>
</body>
</html>
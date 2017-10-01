<?php
include "conexao.php";
$email=$_POST["email"];
$senha=$_POST["senha"];

$stmt = $conexao->prepare("SELECT * FROM usuario WHERE email = ?");

$stmt->bindParam(1, $email); 
$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(count($resultado) > 0) {
	session_start();
	foreach($resultado as $linha){

		if(password_verify($senha, $linha["senha"])){
			$_SESSION["email"] = $email;
			$_SESSION["senha"] = $linha["senha"];
			$_SESSION["usuario"] = $linha["id"];
			header("Location: calculadora.php");
		} else {
			session_start();
			$_SESSION["email"] = null;
			header("Location: index.php?msg=true");
		}
	}	
} else {
	session_start();
	$_SESSION["email"] = null;
	header("Location: index.php?msg=true");
	//echo "Alguma coisa";
}
?>


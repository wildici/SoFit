function insereCorNome(inputNome){
	inputNome.style.color="#000000";
} 

function validaDados(){
	if (document.getElementById("inputsenha").value != document.getElementById("inputsenha2").value){
		alert("Atenção! Essas senhas não coincidem.");
		document.getElementById("inputsenha2").focus();
		return false;
	}else{
		alert("Cadastro realizado com sucesso!");
		return true;
	}
}

function calculaIMC(){
	var peso = parseInt(document.getElementById("peso").value);
	var altura = parseFloat(document.getElementById("altura").value);
	var imc = parseFloat(peso/(altura*altura));
	document.getElementById("imc").innerHTML = imc.toFixed(2) + "<br>";

	if (imc < 18.5){
		document.getElementById("resu").innerHTML = "Abaixo do Peso";
		location.href = 'calculadoradieta.php?imc='+imc+'&peso='+peso+'&altura='+altura;

	}else if(imc > 18.6 && imc < 24.9){
		document.getElementById("resu").innerHTML = "Saudável";
		location.href = 'calculadoradieta.php?imc='+imc+'&peso='+peso+'&altura='+altura;
	}else if(imc > 25 && imc < 29.9){
		document.getElementById("resu").innerHTML = "Peso em excesso";
		location.href = 'calculadoradieta.php?imc='+imc+'&peso='+peso+'&altura='+altura;
	}else if(imc > 30 && imc < 34.9){
		document.getElementById("resu").innerHTML = "Obesidade Grau I";
		location.href = 'calculadoradieta.php?imc='+imc+'&peso='+peso+'&altura='+altura;
	}else if(imc > 35 && imc < 39.9){
		document.getElementById("resu").innerHTML = "Obesidade Grau II (Severa)";
		location.href = 'calculadoradieta.php?imc='+imc+'&peso='+peso+'&altura='+altura;
	}else if(imc >= 40){
		document.getElementById("resu").innerHTML = "Obesidade Grau III (Mórbida)";
		location.href = 'calculadoradieta.php?imc='+imc+'&peso='+peso+'&altura='+altura;
	}
}

function mostraDieta(){

	let display = document.getElementById("dieta").style.display;
	if (display == "none"){
		document.getElementById("dieta").style.display = "block";
	} else {
		document.getElementById("dieta").style.display = "none";
	}
}

function mostraExercicio(){

	let display = document.getElementById("exercicios").style.display;
	if (display == "none"){
		document.getElementById("exercicios").style.display = "block";
	} else {
		document.getElementById("exercicios").style.display = "none";
	}
}
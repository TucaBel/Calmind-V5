<?php
include("conexao.php");
	$nome=$_POST['nome'];
	$cpf=$_POST['cpf'];
	$telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);
	
	$sql = "INSERT INTO cadastros (nome, cpf, telefone, email, senha) VALUES ('$nome', '$cpf', '$telefone', '$email', '$hashed_password')";
	if(mysqli_query($conexao, $sql)){
		header("Location: inicio.html");
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}
	
	mysqli_close($conexao);
?>
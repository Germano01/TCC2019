<?php

require "conexaocontato.php";

if(isset($_POST['email'])){
	$email = $_POST['email'];
}else{
	$email="";
}


if(isset($_POST['mensagem'])){
	$mensagem = $_POST['mensagem'];
}else{
	$mensagem="";
}


if(empty($email) and empty($mensagem)){
	header('Location: Sobre.php');
	exit();
}

$comando_insert = "insert into contato (email, mensagem) values ('".$email."','".$mensagem."')";

echo $comando_insert;
if(mysqli_query($link,$comando_insert)){
	header('Location: Sobre.php');
	exit();
}else{
	echo "Erro ao cadastrar "+$comando_insert;
}	

?>
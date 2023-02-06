<?php

require "conexaodenuncia.php";

if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
}else{
	$nome="";
}

if(isset($_POST['email'])){
	$email = $_POST['email'];
}else{
	$email="";
}


if(isset($_POST['nomeanunciante'])){
	$nomeanunciante = $_POST['nomeanunciante'];
}else{
	$nomeanunciante="";
}


if(isset($_POST['telanunciante'])){
	$telanunciante = $_POST['telanunciante'];
}else{
	$telanunciante="";
}


if(isset($_POST['nomeproduto'])){
	$nomeproduto = $_POST['nomeproduto'];
}else{
	$nomeproduto="";
}

if(isset($_POST['motivo'])){
	$motivo = $_POST['motivo'];
}else{
	$motivo="";
}

if(isset($_POST['ajuda'])){
	$ajuda = $_POST['ajuda'];
}else{
	$ajuda="";
}

if(empty($nome) and empty($email) and empty($nomeanunciante)and empty($telanunciante)and empty($nomeproduto)and empty($motivo)and empty($ajuda)){
	header('Location: Denunciar.php');
	exit();
}

$comando_insert = "insert into denuncias (nome, email, nomeanunciante, telanunciante, nomeproduto, motivo, ajuda) values ('".$nome."','".$email."','".$nomeanunciante."','".$telanunciante."','".$nomeproduto."','".$motivo."','".$ajuda."')";

echo $comando_insert;
if(mysqli_query($link,$comando_insert)){
	header('Location: Denunciar.php');
	exit();
}else{
	echo "Erro ao cadastrar "+$comando_insert;
}	

?>
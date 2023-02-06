<?php

require "conexao.php";

if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
}else{
	$nome="";
}

if(isset($_POST['cidade'])){
	$cidade = $_POST['cidade'];
}else{
	$cidade="";
}

if(isset($_POST['email'])){
	$email = $_POST['email'];
}else{
	$email="";
}

if(isset($_POST['tel'])){
	$tel = $_POST['tel'];
}else{
	$tel="";
}

if(isset($_POST['data'])){
	$data = $_POST['data'];
}else{
	$data="";
}

if(isset($_POST['nomeproduto'])){
	$nomeproduto = $_POST['nomeproduto'];
}else{
	$nomeproduto="";
}


if(isset($_POST['descricao'])){
	$descricao = $_POST['descricao'];
}else{
	$descricao="";
}


if(isset($_POST['preco'])){
	$preco = $_POST['preco'];
}else{
	$preco="";
}

if(isset($_POST['obs'])){
	$obs = $_POST['obs'];
}else{
	$obs="";
}

if(isset($_POST['quantidade'])){
	$quantidade = $_POST['quantidade'];
}else{
	$quantidade="";
}

if(empty($nome) and empty($cidade) and empty($email) and empty($tel) and empty($data) and empty($nomeproduto) and empty($descricao)and empty($preco) and empty($obs)and empty($quantidade)){
	header('Location: Anunciar.php');
	exit();
}
$nome_temporario=$_FILES["Arquivo"]["tmp_name"]; 
$nome_real=$_FILES["Arquivo"]["name"]; 
copy($nome_temporario,"img/$nome_real"); 


$comando_insert = "insert into dados (nome, cidade, email, tel, data, nomeproduto, descricao, preco, obs, quantidade, imagem) values ('".$nome."','".$cidade."','".$email."','".$tel."','".$data."','".$nomeproduto."','".$descricao."','".$preco."','".$obs."','".$quantidade."','"."./img/".$nome_real."')";

//echo $comando_insert;
if(mysqli_query($link,$comando_insert)){
	header('Location: Anunciar.php');
	exit();
}else{
	echo "Erro ao cadastrar "+$comando_insert;
}	

?>
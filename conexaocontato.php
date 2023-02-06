<?php
error_reporting(0);

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "banco";

$link = mysqli_connect($host,$usuario,$senha) or die ("Erro ao estabelecer conexao com o servidor do BD".mysqli_error($link));

$banco = mysqli_select_db($link,$banco) or die ("Erro ao acessar o BD: ".mysqli_error($link));
?>
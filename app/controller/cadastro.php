<?php
if(!isset($_SESSION)){
	session_start();
}
include("../models/conexao.php");
include('apiEmail.php');

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['email_existe'] = true;
	header('Location: ../views/cadastro.php');
	exit();
}

$sql = "INSERT INTO usuario (nome, email, senha, data_cadastro) VALUES ('$nome', '$email', '$senha', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}
$acao = 'abertura de cadastro';
enviarEmail($nome, $email, $acao);
$conexao->close();

header('Location: ../views/cadastro.php');
exit();
?>

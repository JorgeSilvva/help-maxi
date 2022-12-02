<?php
if(!isset($_SESSION)){
	session_start();
}

include('../models/conexao.php');

	if(empty($_POST['email']) || empty($_POST['senha'])) {
		header('Location: /../index.php');
		exit();
	}

	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	$query = "select usuario_id, nome, nivel from usuario where email = '{$email}' and senha = md5('{$senha}')";
	$result = mysqli_query($conexao, $query);
	$resultado = mysqli_fetch_assoc($result);
	
	if(isset($resultado)){
		$_SESSION['usuario_id'] = $resultado['usuario_id'];
		//$_SESSION['ticket_id'] = $resultado['ticket_id'];
		$_SESSION['nome'] = $resultado['nome'];
		$_SESSION['nivel'] = $resultado['nivel'];
		if($_SESSION['nivel'] == "cliente"){
			header("Location: ../views/dashboardCliente.php");
			exit();
			}elseif($_SESSION['nivel'] == "admin"){
				header("Location: ../views/dashboardAdm.php");
			}else{
			header('Location: /../index.php');
			exit();
		}

	}else{  
	$_SESSION['nao_autenticado'] = true;
	header('Location: /../index.php');
	exit();
}
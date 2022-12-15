<?php
if(!isset($_SESSION)){
	session_start();
}

include('../controller/loginTest.php');
include('../models/conexao.php');

$nivel_necessario = 'admin';

if ($_SESSION['nivel'] != $nivel_necessario) {
    header("Location: dashboardCliente.php");
exit();
}

$busca = "SELECT * FROM usuario ";
$resultado = mysqli_query($conexao, $busca);

?>

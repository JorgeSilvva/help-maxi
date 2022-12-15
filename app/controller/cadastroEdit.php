<?php
if(!isset($_SESSION)){
	session_start();
}
include('../models/conexao.php');
include('../controller/loginTest.php');

$nivel_aut = 'admin';

if ($_SESSION['nivel'] != $nivel_aut) {

    $user = $_SESSION['usuario_id'];

    if($user>0)
    {
        $usuario_id = $user;
        $sqlSelect = "SELECT * FROM usuario WHERE usuario_id=$usuario_id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                //$senha = $user_data['senha'];
                $telefone = $user_data['telefone'];
                $endereco = $user_data['endereco'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                //$nivel = $user_data['nivel'];
            }
        }
        else
        {
            header('Location: ../views/cadastroEdit.php');
        }
    }
    else
    {
        header('Location: ../views/cadastroEdit.php');
    }
}
else
{
    if(!empty($_GET['usuario_id']))
    {
        $usuario_id = $_GET['usuario_id'];
        $sqlSelect = "SELECT * FROM usuario WHERE usuario_id=$usuario_id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                //$senha = $user_data['senha'];
                $telefone = $user_data['telefone'];
                $endereco = $user_data['endereco'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                //$nivel = $user_data['nivel'];
            }
        }
        else
        {
            header('Location: ../views/cadastroLista.php');
        }
    }
    else
    {
        header('Location: ../views/cadastroLista.php');
    }
}
?>

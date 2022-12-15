<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include('../models/conexao.php');
    include('apiEmail.php');
    
    if(isset($_POST['update']))
    {
        $usuario_id = $_POST['usuario_id'];

        $aviso = "Usuario atualizado, e-mail enviado com sucesso!";
        $_SESSION['aviso'] = $aviso;

        $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
        $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
        //$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
        $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
        $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
        $cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
        $estado = mysqli_real_escape_string($conexao, trim($_POST['estado']));
        //$nivel = mysqli_real_escape_string($conexao, trim($_POST['nivel']));
        
        $sqlInsert = "UPDATE usuario 
        SET nome='$nome', email='$email', telefone='$telefone', endereco='$endereco', cidade='$cidade', estado='$estado', data_cadastro= NOW()
        WHERE usuario_id=$usuario_id";
        $result = $conexao->query($sqlInsert);
        //print_r($result);
        
        $acao = 'atualização de cadastro';
        enviarEmail($nome,$email,$acao);
    }
    $nivel_aut = 'admin';
    if ($_SESSION['nivel'] != $nivel_aut) {
    header('Location: ../views/cadastroEdit.php');
    exit();
    }
    header('Location: ../views/cadastroLista.php');
    exit();
?>

<?php

    include('../models/conexao.php');
    
    if(isset($_POST['update']))
    {
        $ticket_id = $_POST['ticket_id'];
        
        $assunto = mysqli_real_escape_string($conexao, trim($_POST['assunto']));
        $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
        $setor = mysqli_real_escape_string($conexao, trim($_POST['setor']));
        $prioridade = mysqli_real_escape_string($conexao, trim($_POST['prioridade']));
        $usuario_id = mysqli_real_escape_string($conexao, trim($_POST['usuario_id']));
        $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
        $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
        //$situacao = mysqli_real_escape_string($conexao, trim($_POST['situacao']));   
        
        
        $sqlInsert = "UPDATE ticket 
        SET assunto='$assunto', descricao='$descricao', setor='$setor', prioridade='$prioridade', usuario_id='$usuario_id', email='$email', telefone='$telefone', data_solicitacao= NOW()
        WHERE ticket_id=$ticket_id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
   
    header('Location: ../views/ticketLista.php');

?>

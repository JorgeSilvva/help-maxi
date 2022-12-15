<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include('../models/conexao.php');
    include('apiEmail.php');
    
    if(isset($_POST['update']))
    {
        $ticket_id = $_POST['ticket_id'];

        $aviso = "Ticket atualizado, e-mail enviado com sucesso!";
        $_SESSION['aviso'] = $aviso;
       
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
        //print_r($result);

        #Busca o nome pelo id usuario cadastrado no ticket e chama a função de de envio do e-mail
        $buscanome = "SELECT nome FROM usuario WHERE usuario_id = $usuario_id";
        $result = mysqli_query($conexao, $buscanome);
        $resultado = mysqli_fetch_assoc($result);
        $nome = $resultado['nome'];
        $acao = 'atualização de ticket';
        enviarEmail($nome,$email,$acao);
    }
    header('Location: ../views/ticketLista.php');
?>

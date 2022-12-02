<?php
if(!isset($_SESSION)){
	session_start();
}       

    include('../models/conexao.php');

    if(isset($_POST['submit']))
    {

        $frase = "Novo Ticket iniciado, e-mail enviado com sucesso";
        $_SESSION['frase'] = $frase;

        $assunto = mysqli_real_escape_string($conexao, trim($_POST['assunto']));
        $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
        $setor = mysqli_real_escape_string($conexao, trim($_POST['setor']));
        $prioridade = mysqli_real_escape_string($conexao, trim($_POST['prioridade']));
        $usuario_id = mysqli_real_escape_string($conexao, trim($_POST['usuario_id']));
        $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
        $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
        //$situacao = mysqli_real_escape_string($conexao, trim($_POST['situacao']));   

        $result = mysqli_query($conexao, "INSERT INTO ticket(assunto, descricao, setor, prioridade, usuario_id, email, telefone, data_solicitacao) 
        VALUES ('$assunto','$descricao','$setor','$prioridade', '$usuario_id', '$email','$telefone', NOW())");

        header('Location: ../views/ticketLista.php');

    }

?>
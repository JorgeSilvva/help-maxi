<?php
include('../models/conexao.php');

    if(!empty($_GET['ticket_id']))
    {
        $ticket_id = $_GET['ticket_id'];
        $sqlSelect = "SELECT * FROM ticket WHERE ticket_id=$ticket_id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $assunto = $user_data['assunto'];
                $descricao = $user_data['descricao'];
                $setor = $user_data['setor'];
                $prioridade = $user_data['prioridade'];
                $usuario_id = $user_data['usuario_id'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                //$status = $user_data['situacao'];

            }
        }
        else
        {
            header('Location: ../views/ticketLista.php');
        }
    }
    else
    {
        header('Location: ../views/ticketLista.php');
    }
?>
<?php

if(!isset($_SESSION)){
	session_start();
}
    include('../models/conexao.php');

    if(!empty($_GET['ticket_id']))
    {

        $frase = "Ticket removido, e-mail enviado com sucesso";
        $_SESSION['frase'] = $frase;

        $ticket_id = $_GET['ticket_id'];

        $sqlSelect = "SELECT *  FROM ticket WHERE ticket_id=$ticket_id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM ticket WHERE ticket_id=$ticket_id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: ../views/ticketLista.php');
   
?>
<?php

include('../models/conexao.php');

$nivel_necessario = 'admin';

if ($_SESSION['nivel'] != $nivel_necessario) {
   
    // Buscador Nível Cliente

    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $usuario = $_SESSION['usuario_id'];
        $busca = "SELECT * FROM ticket WHERE usuario_id = $usuario and assunto LIKE '%$data%'
            or usuario_id = $usuario and setor LIKE '%$data%'
            or usuario_id = $usuario and prioridade LIKE '%$data%'
            or usuario_id = $usuario and situacao LIKE '%$data%' ORDER BY ticket_id ASC";
    }
    else
    {
        $usuario = $_SESSION['usuario_id'];
        $busca = "SELECT * FROM ticket WHERE usuario_id = $usuario";
    }
    $resultado = mysqli_query($conexao, $busca);

} 
else
{
    
    // Buscador Nível Admin

    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $busca = "SELECT * FROM ticket WHERE ticket_id LIKE '%$data%' and usuario_id LIKE '%$data%' 
            or assunto LIKE '%$data%'
            or setor LIKE '%$data%' 
            or prioridade LIKE '%$data%'
            or email LIKE '%$data%' 
            or situacao LIKE '%$data%' ORDER BY ticket_id ASC";
    }
    else
    {
        $busca = "SELECT * FROM ticket ORDER BY ticket_id ASC";
    }
    $resultado = mysqli_query($conexao, $busca);
}
?>

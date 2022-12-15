<?php
if(!isset($_SESSION)){
	session_start();
}
    include('../models/conexao.php');

    if(!empty($_GET['usuario_id']))
    {

        $aviso = "Usuario removido com sucesso!";
        $_SESSION['aviso'] = $aviso;

        $usuario_id = $_GET['usuario_id'];

        $sqlSelect = "SELECT *  FROM usuario WHERE usuario_id=$usuario_id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuario WHERE usuario_id=$usuario_id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: ../views/usuariosLista.php');
?>

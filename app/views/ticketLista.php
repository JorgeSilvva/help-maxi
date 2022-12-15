<?php
if(!isset($SESSION_)){
    session_start();
}

include('../controller/ticketLista.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../webroot/css/ticketLista.css">
    <title>Meus Tickets | Help-Maxi</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid"><a class="navbar-brand" href="dashboardAdm.php">HELP-MAXI</a></div>
      <div class="d-flex"><a href="dashboardAdm.php" class="btn btn-success me-2">Dashboard</a></div>
      <div class="d-flex"><a href="../controller/logout.php" class="btn btn-danger me-2">Desconectar</a></div>
    </nav>
    
    <h1>Usuário: <?php echo $_SESSION['nome'];?></h1>
    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    <?php
    if(isset($_SESSION['aviso'])):
    ?>  
        &nbsp;&nbsp;&nbsp;
        <div class="alert-success">
            <p><?php echo $_SESSION['aviso'];?></p>
        </div>
    <?php
    endif;
    unset($_SESSION['aviso']);
    ?>
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">Ticket</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Descriçao</th>
                    <th scope="col">Setor</th>
                    <th scope="col">Prioridade</th>
                    <th scope="col">Id Cliente</th>
                    <!-- <th scope="col">Email</th>
                    <th scope="col">Telefone</th> -->
                    <th scope="col">Situação</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>".$user_data['ticket_id']."</td>";
                        echo "<td>".$user_data['assunto']."</td>";
                        echo "<td>".$user_data['descricao']."</td>";
                        echo "<td>".$user_data['setor']."</td>";
                        echo "<td>".$user_data['prioridade']."</td>";
                        echo "<td>".$user_data['usuario_id']."</td>";
                        //echo "<td>".$user_data['email']."</td>";
                        //echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['situacao']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='../views/ticketEdit.php?ticket_id=$user_data[ticket_id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='../controller/ticketDel.php?ticket_id=$user_data[ticket_id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
<footer class="footer">
    <div class="content has-text-centered">
        <p>Help-Maxi - Sistema de HelpDesk | Projeto Integrador III -<a href="dashboardAdm.php"> Home</a></p>
    </div>
</footer>
</html>

<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'ticketLista.php?search='+search.value;
    }
</script>

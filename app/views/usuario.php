<?php

if(!isset($_SESSION)){
	session_start();
}

include('../controller/verifica_login.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../webroot/css/ticket.css">

  <title>Meus Dados | Help Maxi</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid"><a class="navbar-brand" href="dashboardAdm.php">HELP-MAXI</a></div>
    <div class="d-flex md-2"><a href="dashboardAdm.php" class="btn btn-success me-2">Dashboard</a></div>
    <div class="d-flex"><a href="../controller/logout.php" class="btn btn-danger">Desconectar</a></div>
  </nav>

  <header>
    <h1>Informações de Cadastro</h1>
    <p>Use para atualizar sua informações.</p>
  </header>

    <div class="container">
      <form class="form" action="" method="POST">

        <div class="form-group">
          <label>Nome</label>
            <input type="text" id="assunto" name="nome" placeholder="Digite seu nome completo" required />
        </div>  

        <div class="form-group">
          <label>Email</label>
          <input  type="email" id="email"  name="email" placeholder="Digite um e-mail válido" required  />
        </div>

        <div class="form-group">
          <label>Telefone</label>
          <input  type="text" id="telefone"  name="telefone" placeholder="Digite seu telefone" required  />
        </div>

        <div class="form-group">
          <label>Endereço</label>
          <input  type="text" id="telefone"  name="telefone" placeholder="Rua / Nº / Bairro" required  />
        </div>

        <div class="form-group">
          <label>Cidade</label>
          <input  type="text" id="telefone"  name="telefone" placeholder="Digite sua cidade" required  />
        </div>

        <div class="form-group">
          <label>Estado</label>
          <input  type="text" id="telefone"  name="telefone" placeholder="Digite seu estado" required  />
        </div>

        <input type="hidden" id="usuario_id" name="usuario_id" value="<?php echo $_SESSION['usuario_id'];?>" />
        <input type="hidden" id="nivel" name="nivel" value="<?php echo $_SESSION['nivel'];?>" />
        <div class="form-group"><button type="submit" name="submit" id="submit">Enviar</button> </div>

      </form>

      <footer>
        <p>Projeto <strong> Integrador III - </strong><a href="dashboardCliente.php">Home</a></p>
      </footer>

    </div>
  </body>
</html>   

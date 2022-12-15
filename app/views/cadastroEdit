<?php
if(!isset($_SESSION)){
	session_start();
}

include('../controller/cadastroEdit.php');
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
  </header>
    <div class="container">
      <form class="form" action="../controller/cadastroSave.php" method="POST">
        <div class="form-group">
          <label>Nome</label>
            <input type="text" id="assunto" name="nome" value="<?php echo $nome;?>" placeholder="Digite seu nome completo" required autofocus=""/>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input  type="email" id="email"  name="email" value="<?php echo $email;?>" placeholder="Digite um e-mail válido" required  />
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input  type="text" id="telefone"  name="telefone" value="<?php echo $telefone;?>" placeholder="Digite seu telefone" required  />
        </div>
        <div class="form-group">
          <label>Endereço</label>
          <input  type="text" id="endereco"  name="endereco" value="<?php echo $endereco;?>" placeholder="Rua / Nº / Bairro" required  />
        </div>
        <div class="form-group">
          <label>Cidade</label>
          <input  type="text" id="cidade"  name="cidade" value="<?php echo $cidade;?>" placeholder="Digite sua cidade" required  />
        </div>
        <div class="form-group">
          <label>Estado</label>
          <input  type="text" id="estado"  name="estado" value="<?php echo $estado;?>" placeholder="Digite seu estado" required  />
        </div>
        <input type="hidden" name="usuario_id" value="<?php echo $usuario_id;?>">

        <input type="hidden" name="nivel" value="<?php echo $nivel;?>">
        <div class="form-group">
            <button type="submit" name="update" id="submit" class="btn btn-primary">Atualizar</button>
        </div>
        <a href="dashboardCliente.php"><button type="button" class="btn btn-success">Voltar</button></a>
      </form>
      <footer>
        <p>Help-Maxi - Sistema de HelpDesk | Projeto Integrador III -<a href="dashboardAdm.php"> Home</a></p>
      </footer>
    </div>
  </body>
</html>

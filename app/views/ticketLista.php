<?php
if(!isset($_SESSION)){
	session_start();
}

include('../controller/ticketEdit.php');
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
  <title>Editar Ticket | Help-Maxi</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid"><a class="navbar-brand" href="dashboardAdm.php">HELP-MAXI</a></div>
    <div class="d-flex"><a href="dashboardAdm.php" class="btn btn-success me-2">Dashboard</a></div>
    <div class="d-flex"><a href="../controller/logout.php" class="btn btn-danger me-5">Desconectar</a></div>
  </nav>
  <header>
    <h1>Editar Ticket</h1>
    <p>Como podemos ajudar?</p>
  </header>
    <div class="container">
      <form class="form" action="../controller/ticketSave.php" method="POST">
        <div class="form-group">
          <label>Título do assunto</label>
            <input type="text" id="assunto" name="assunto" value="<?php echo $assunto;?>" placeholder="Digite o título do assunto" required />
        </div>
        <div class="form-textarea">
          <label>Descrição</label>
            <textarea name="descricao" id="descricao" cols="60" rows="6" value="" placeholder="Digite aqui a sua mensagem" required> <?php echo $descricao;?> </textarea>
        </div>       
        <div class="form-radio-checkbox">
          <label>Setor</label>
          <label><input type="radio" name="setor" value="administrativo" class="input-radio" <?php echo ($setor == 'administrativo') ? 'checked' : '';?> required />Administrativo</label>
          <label><input type="radio" name="setor" value="atendimento" class="input-radio" <?php echo ($setor == 'atendimento') ? 'checked' : '';?> required/>Atendimento</label>
          <label><input type="radio" name="setor" value="comercial" class="input-radio" <?php echo ($setor == 'comercial') ? 'checked' : '';?> required/>Comercial</label>
          <label><input type="radio" name="setor" value="financeiro" class="input-radio" <?php echo ($setor == 'financeiro') ? 'checked' : '';?> required/>Financeiro</label>
        </div>
        <div class="form-radio-checkbox">
          <label></label>
          <label><input type="radio" name="prioridade" value="normal" class="input-radio" <?php echo ($prioridade == 'normal') ? 'checked' : '';?> required />Normal</label>
          <label><input type="radio" name="prioridade" value="media" class="input-radio" <?php echo ($prioridade == 'media') ? 'checked' : '';?> required />Média</label>
          <label><input type="radio" name="prioridade" value="alta" class="input-radio"<?php echo ($prioridade == 'alta') ? 'checked' : '';?> required />Alta</label>
        </div>       
        <div class="form-group">
          <label>Email</label>
          <input  type="email" id="email"  name="email" value="<?php echo $email;?>" placeholder="Digite seu e-mail" required  />
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input  type="text" id="telefone"  name="telefone" value="<?php echo $telefone;?>" placeholder="Digite seu telefone" required  />
        </div>
        <input type="hidden" name="ticket_id" value=<?php echo $ticket_id;?>>
        <input type="hidden" name="usuario_id" value=<?php echo $usuario_id;?>>
        <div class="form-group">
          <button type="submit" name="update" id="submit">Atualizar Ticket</button>
        </div>
      </form>
        <footer>
          <p>Projeto <strong> Integrador III - </strong><a href="dashboardAdm.php">Home</a></p>
        </footer>
    </div>
  </body>
</html>

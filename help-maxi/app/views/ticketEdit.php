<?php

if(!isset($_SESSION)){
	session_start();
}

include('../controller/verifica_login.php');

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
    <div class="d-flex"><a href="../controller/logout.php" class="btn btn-danger me-5">Sair</a></div>
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
            <textarea name="descricao" id="descricao" cols="60" rows="6" value="" placeholder="Digite aqui a sua mensagem"> <?php echo $descricao;?> </textarea>
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
          <label><input type="radio" name="prioridade" value="normal" class="input-radio" <?php echo ($prioridade == 'normal') ? 'checked' : '';?> />Normal</label>
          <label><input type="radio" name="prioridade" value="media" class="input-radio" <?php echo ($prioridade == 'media') ? 'checked' : '';?> />Média</label>
          <label><input type="radio" name="prioridade" value="alta" class="input-radio"<?php echo ($prioridade == 'alta') ? 'checked' : '';?> />Alta</label>
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

        <div class="form-group"><button type="submit" name="update" id="submit">Enviar</button> </div>

      </form>

      <footer>
        <p>Projeto <strong> Integrador III - </strong><a href="dashboardAdm.php">Home</a></p>
      </footer>

    </div>
  </body>
</html>


<!--

<div class="form-group">
          <label>Usuario</label>
          <input  type="text" id="usuario_id"  name="usuario_id" value="<?php echo $_SESSION['usuario_id'];?>", placeholder="Digite seu nome" required  />
        </div> 

<div class="form-group">
            <label>Setor</label>
              <select  id="setor" name="setor" value="" required>
                <option value="disable selected value"><?php echo $setor;?></option>
                <option value="0">Administrativo</option>
                <option value="1">Atendimento</option>
                <option value="2">Comercial</option>
                <option value="3">Financeiro</option>
              </select>
          </div>

        <div class="form-group">
          <label>Prioridade</label>
            <select id="prioridade" name="prioridade" value="" required>
              <option value="disable selected value"><?php echo $prioridade;?></option>
              <option value="0">Normal</option>
              <option value="1">Média</option>
              <option value="2">Alta</option>
            </select>
        </div>

<div class="form-radio-checkbox">
          <label>Estatus</label>
          <label><input type="radio" name="recommend" value="sim" class="input-radio"/>Normal</label>
          <label><input type="radio" name="recommend" value="sim" class="input-radio"/>Média</label>
          <label><input type="radio" name="recommend" value="sim" class="input-radio"/>Alta</label>
        </div>

        <div class="form-radio-checkbox">
          <label>Em que itens você gostaria de ver melhorias?</label>
          <label><input type="checkbox" name="melhorias" value="projetos-de-front-end" class="input-checkbox" />Projetos de Front-end</label>
          <label><input type="checkbox" name="melhorias" value="projetos-de-front-end" class="input-checkbox" />Projetos de Front-end</label>
          <label><input type="checkbox" name="melhorias" value="projetos-de-front-end" class="input-checkbox" />Projetos de Front-end</label>
          <label><input type="checkbox" name="melhorias" value="projetos-de-front-end" class="input-checkbox" />Projetos de Front-end</label>
        </div>

 <div class="form-group">
          <label for="servico">Qual seu serviço favorito?</label>
          <select id="dropdown" name="servico" required>
            <option value="disable selected value">Escolha sua opção</option>
            <option value="webdesign">Web Design</option>
            <option value="uxui">UX/UI</option>
            <option value="frontend">Front-end</option>
            <option value="backend">Back-end</option>
            <option value="preferNo">Prefiro não responder</option>
            <option value="other">Outro</option>
          </select>
        </div>
    <h1 class="title has-text-grey">Como podemos te ajudar?</h1>&nbsp;
     
      <form name="form" class="form-horizontal" method="post">
        <fieldset>
          <input type="hidden" name="id" value="<?php //echo (isset($ticket)) ? $ticket['id'] : ""?>" />
          <input type="hidden" name="id_user_creator" value="<?//php echo $id_user_creator;?>" />

          <div class="form-group">
            <label class="col-md-4 control-label" for="name">Assunto</label>
            <div class="col-md-4">
              <input type="text" name="name" class="form-control" value="<?//php echo (isset($ticket)) ? $ticket['name'] : ""?>" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="description">Descrição</label>
            <div class="col-md-4">
              <textarea class="form-control" id="description" name="description"><?//php echo (isset($ticket)) ? $ticket['description'] : ""?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="priority">Prioridade</label>
            <div class="col-md-4">
              <select id="reto" name="priority" class="form-control">
                <option value="0">Normal</option>
                <option value="1">Média</option>
                <option value="2">Urgente</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="id_user_resolve">Departamento</label>
            <div class="col-md-4">
              <select id="reto" name="id_user_resolve" class="form-control">
                <option value="0">Administrativo</option>
                <option value="1">Atendimento</option>
                <option value="2">Comercial</option>
                <option value="3">Financeiro</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="state">Status</label>
            <div class="col-md-4">
              <select id="reto" name="state" class="form-control">
                <option value="A">Abrir</option>
                <option value="F">Fechar</option>
              </select>
            </div>
          </div>&nbsp;

           Button 
          
          <div class="form-group">
            <label class="col-md-4 control-label" for="continuar"></label>
            <div class="col-md-4">
              <a href="dashboardCliente.php"><button type="submit" class="btn btn-primary">Voltar</button></a>
              <a href="dashboardCliente.php"><button type="button" class="btn btn-success">Enviar</button></a>
            </div>
          </div>
        </fieldset>
      </form>
</body>&nbsp;-->



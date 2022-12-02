<?php

  // A sessão precisa ser iniciada em cada página diferente
  if(!isset($_SESSION)){
	session_start();
	}

  // Verifica se não há a variável da sessão que identifica o usuário

  $nivel_necessario = 'admin';

  if ($_SESSION['nivel'] != $nivel_necessario) {
    header("Location: dashboardCliente.php");
    exit;
  }

  include('../controller/verifica_login.php');

  date_default_timezone_set('America/Sao_Paulo');
  $data = date("d/m/Y");
  $dia = date('d');
  $mes = date('m');
  $ano = date("Y");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../webroot/css/dashboard.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Dashboarb Adm - Help Maxi</title>
</head>

<body>
	
  <div id="mySidenav" class="sidenav">
    <p class="logo"><span>H</span>-Maxi</p>
    <a href="usuarioLista.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Usuários</a>
    <a href="ticket.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Novo Ticket</a>
    <a href="ticketLista.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Listar Tickets</a>
    <a href="ticketLista.php?search=aberto"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Abertos</a>
    <a href="ticketLista.php?search=fechado"class="icon-a"><i class="fa fa-check icons"></i> &nbsp;&nbsp;Resolvidos</a>
    <a href="../controller/logout.php"class="icon-a"><i class="fa fa-sign-out icons"></i> &nbsp;&nbsp;Desconectar</a>
  </div>
  <div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">
		<img src="../webroot/imagens/user.png" class="pro-img" />
		<p><?php echo $_SESSION['nome'];?><span>ADM-ID: <?php echo $_SESSION['usuario_id'];?></span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3">
		<div class="box">
			<p>167<br/><span>Usuários</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>53<br/><span>Tickets</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>4<br/><span>Abertos</span></p>
			<i class="fa fa-tasks box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>49<br/><span>Resolvidos</span></p>
			<i class="fa fa-check box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
			<p>Ranking <span>Ano: <?php echo $ano ?></span></p>
			<br/>
			<table>
  <tr>
    <th>Assunto</th>
    <th>Setor</th>
    <th>Índice(%)</th>
  </tr>
  <tr>
    <td>Revenda</td>
    <td>Comercial</td>
    <td>45%</td>
  </tr>
  <tr>
    <td>Tercerização</td>
    <td>Produçao</td>
    <td>35%</td>
  </tr>
  <tr>
    <td>Produtos</td>
    <td>Atendimento</td>
    <td>20%</td>
  </tr>
  <tr>
    <td>Financeiro</td>
    <td>Cobrança</td>
    <td>10%</td>
  </tr>
  
  
</table>
		</div>
	</div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
      <p>Índice <span>Data: <?php echo $dia . '/' . $mes ?></span></p>

			<div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> 92% </div>
    </div>
  </div>
		</div>
	</div>
	</div>
		
	<div class="clearfix"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>

</body>


</html>

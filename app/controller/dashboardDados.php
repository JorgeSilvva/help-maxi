<?php
include('../models/conexao.php');


#----------------------Dados comuns ao Administrador e aos Clientes---------------------------------#

# Informa dados referentes  data e horário
date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y");
$dia = date('d');
$mes = date('m');
$ano = date("Y");

# Conta o numero total de clientes cadastrados
$conta = "SELECT COUNT(setor) FROM ticket WHERE setor = 'administrativo'";
$result = mysqli_query($conexao, $conta);
$resultado = mysqli_fetch_assoc($result);
foreach ($resultado as $adm) {
    //echo $adm;
    //echo "<br>";
}



#----------------------Dados para o dashboard do Administrador--------------------------------------#

# Conta o numero total de clientes cadastrados
$conta = "SELECT COUNT(usuario_id) FROM usuario";
$result = mysqli_query($conexao, $conta);
$resultado = mysqli_fetch_assoc($result);
foreach ($resultado as $clientes) {
    //echo $clientes;
    //echo "<br>";
}

# Conta o numero total de tickets cadastrados
$conta = "SELECT COUNT(ticket_id) FROM ticket";
$result = mysqli_query($conexao, $conta);
$resultado = mysqli_fetch_assoc($result);
foreach ($resultado as $ticket) {
    //echo $ticket;
    //echo ' total';
    //echo "<br>";
}

# Conta o numero total de tickets abertos
$conta = "SELECT COUNT(situacao) FROM ticket WHERE situacao = 'aberto'";
$result = mysqli_query($conexao, $conta);
$resultado = mysqli_fetch_assoc($result);
foreach ($resultado as $aberto) {
    //echo $aberto;
    //echo ' abertos';
    //echo "<br>";
}

# Conta o numero total de tickets fechados
$conta = "SELECT COUNT(situacao) FROM ticket WHERE situacao = 'fechado'";
$result = mysqli_query($conexao, $conta);
$resultado = mysqli_fetch_assoc($result);
foreach ($resultado as $fechado) {
    //echo $fechado;
    //echo ' fechados';
    //echo "<br>";
}

# Calcula o indice dos chamados atendidos
$indice = ($fechado * 100)/ $ticket;
    //echo round($indice, 2);
    //echo '% resolução';
    //echo "<br>";


#----------------------Dados para o dashboard do Cliente--------------------------------------------#

# Conta meus tickets cadastrados
$user= $_SESSION['usuario_id'];
$conta = "SELECT COUNT(ticket_id) FROM ticket WHERE usuario_id=$user";
$result = mysqli_query($conexao, $conta);
$resultado = mysqli_fetch_assoc($result);
foreach ($resultado as $meustickets) {
    //echo $meustickets;
    //echo ' total';
    //echo "<br>";
}

# Conta meus tickets abertos
$user= $_SESSION['usuario_id'];
$conta = "SELECT COUNT(situacao) FROM ticket WHERE usuario_id=$user AND situacao = 'aberto'";
$result = mysqli_query($conexao, $conta);
$resultado = mysqli_fetch_assoc($result);
foreach ($resultado as $abertos) {
    //echo $aberto;
    //echo ' abertos';
    //echo "<br>";
}

# Conta meus tickets fechados
$user= $_SESSION['usuario_id'];
$conta = "SELECT COUNT(situacao) FROM ticket WHERE usuario_id=$user AND situacao = 'fechado'";
$result = mysqli_query($conexao, $conta);
$resultado = mysqli_fetch_assoc($result);
foreach ($resultado as $fechados) {
    //echo $aberto;
    //echo ' abertos';
    //echo "<br>";
}

# Calcula o indice dos meus chamados atendidos
if($meustickets == 0){
    $meuindice = '';
}else{
    $meuindice = ($fechados * 100)/ $meustickets;
}
    //echo round($indice, 2);
    //echo '% resolução';
    //echo "<br>";

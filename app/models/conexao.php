<?php
define('HOST', 'helpmaxi-servidor.mysql.database.azure.com');
define('USUARIO', 'hmuqkcfgrk');
define('SENHA', '33az481c-');
define('DB', 'helpmaxi');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


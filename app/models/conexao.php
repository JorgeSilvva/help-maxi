<?php
define('HOST', 'helpmaxi-servidor.mysql.database.azure.com');
define('USUARIO', 'hmuqkcfgrk');
define('SENHA', 'zcr@d2022');
define('DB', 'helpmaxi');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


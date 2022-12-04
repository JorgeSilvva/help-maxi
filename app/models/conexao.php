<?php
define('HOST', 'https://databases.000webhost.com/?_ga=2.172618979.1157770098.1670180700-341334833.1669919242');
define('USUARIO', 'id19945507_root');
define('SENHA', '/\!\W-%tgfI^9#8!');
define('DB', 'id19945507_root');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


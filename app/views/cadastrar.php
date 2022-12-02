<?php

if(!isset($_SESSION)){
	session_start();
}

?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro | Help Maxi</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../webroot/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../webroot/css/index.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title has-text-white">Formulário de Cadastro</h1>
                    <h2 class="title has-text-white">Sistema | Help-Maxi</a></h2>&nbsp;
                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                    ?>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu e-mail e senha <a href="../controller/login.php"><strong>aqui</strong></a></p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if(isset($_SESSION['email_existe'])):
                    ?>
                    <div class="notification is-info">
                        <p>E-mail inválido ou já cadastrado. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['email_existe']);
                    ?>
                    <div class="box">
                        <form action="../controller/cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Digite seu nome completo">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="text" class="input is-large" placeholder="Digite um e-mail válido">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Digite uma senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<footer class="footer">
    <div class="content has-text-centered">
        <p>Projeto Integrador III - <a href="../views/dashboardAdm.php">Home</a></p>
    </div>
</footer>

</html>
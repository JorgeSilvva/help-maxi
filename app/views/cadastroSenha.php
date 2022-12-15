<?php
if(!isset($_SESSION)){
	session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../webroot/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../webroot/css/index.css">
    <title>Recuperar senha | Help-Maxi</title>
</head>
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title has-text-white">Recuperar senha</h1>
                    <h2 class="title has-text-white">Help-Maxi</a></h2>&nbsp;
                    <!--<?php
                    if(isset($_SESSION['status_cadastro'])):
                    ?>
                        <div class="notification is-success">
                            <p>Cadastro efetuado!</p>
                            <p>Faça login informando o seu e-mail e senha <a href="../controller/resetSenha.php"><strong>aqui</strong></a></p>
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
                    ?>-->
                    <div class="box">
                        <form action="../controller/cadastroSenha.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="text" class="input is-large" placeholder="Informe o e-mail cadastrado" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Digite a nova senha">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Repita a nova senha">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-block is-link is-large is-fullwidth">Recuperar senha</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<footer class="footer">
    <div class="content has-text-centered">
        <p>Help-Maxi - Sistema de HelpDesk | Projeto Integrador III -<a href="dashboardAdm.php"> Home</a></p>
    </div>
</footer>
</html>

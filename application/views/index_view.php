<?php
//session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - Solides</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Solides Tecnologia</h3>
                    <h3 class="title has-text-grey" target="_blank">Ponto do Estagiário</h3>
                    ?>
                    <div class="box">
                        <form action="http://localhost/login-php-codeigniter/index/logar" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="" required="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha" required="">
                                </div>
                            </div>
                            <div style="display: flex; margin-top: 20px">
                                <a href="http://localhost/login-php-codeigniter/index/cadastro" class="button is-block is-link is-large is-fullwidth" style="font-weight: 500">Cadastrar</a>       
                                <div style="margin-right: 10px"></div>
                                <button type="submit" class="button is-block is-link is-large is-fullwidth display: flex" style="background-color: green">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
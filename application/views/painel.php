<?php
session_start();
//include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">	
</head>
<body>
	<section class="hero is-success is-fullheight is-fullwidth">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">

                    <div class="box">
                        <form action="entrada.php" method="POST">
                            
                            <div style="display: flex; margin-top: 20px">
                                <button type="submit" class="button is-block is-link is-large is-fullwidth display: flex" ">Entrada</button>
                                <div style="margin-right: 10px"></div>
                                <a href="cadastro.php" class="button is-block is-link is-large is-fullwidth" style="font-weight: 500">Saída</a>
                                <div div style="margin-right: 10px"></div>
                                <button type="submit" class="button is-block is-link is-large is-fullwidth display: flex">Entrada</button>
                                <div div style="margin-right: 10px"></div>
                                <button type="submit" class="button is-block is-link is-large is-fullwidth display: flex">Saída</button>


                            </div>
                        </form>
                        <h2><a href="logout.php" class="button is-block is-link is-large is-fullwidth" style="margin-top: 10px">Sair</a></h2>
                    </div>

</div>
</div>
</div>
</section>

</body>
</html>
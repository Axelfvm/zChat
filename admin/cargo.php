<?php
include('./../config/config.php');
include('./../includes/class/ver.class.php');
include('./../includes/class/cargo.class.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?> - Mudar cargo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../includes/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="../includes/css/general.main.css" rel="stylesheet" type="text/css"/>

    </head>
    <style>

    </style>
    <body style="background: <?= $cor_fundo ?>">
        <?php include('./../includes/pages/header.php'); ?>
        <div class="center" style="margin-top: 70px;">
            <form method="post">
                <h1>Editar cargo</h1>
                <h2>Usuário: <i><?= $user ?></i></h2>
                <br>
                <select name="cargo">
                    <option value="10">Administrador</option>
                    <option value="0">Usuário</option>
                </select>
                <br>
                <br>
                <input type="submit" value="Mudar" name="mudar" style="font-size: 16px;"/>

                <p>Cargo: <?= $perfilInfo['su'] ?></p>
                <br>
                <br>

                <a href='home.php'>Voltar</a>
            </form>
        </div>
    </body>
</html>
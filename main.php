<?php
include('./includes/class/ver.class.php');

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?= $title ?> - Painel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<script src="includes/js/main.js" type="text/javascript"></script>-->
        <link href="includes/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="includes/css/general.main.css" rel="stylesheet" type="text/css"/>

    </head>
    <style>

    </style>
    <body>
        <div class="center">
            <form>
                <h2>Bem vindo <?= $_SESSION['nome'] ?></h2>
                <br>
                <h3><a href="cadastro.php" target="_blank">Cadastrar Usuário</a></h3>
                <h3><a href="buscar.php" target="_blank">Buscar Usuário</a></h3>
                <h3><a href="buscar.php" target="_blank">Perfil</a></h3>
                <h3><a href="?sair">Sair</a></h2>
            </form>
        </div>
    </body>
</html>
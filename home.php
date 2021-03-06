<?php
include('./config/config.php');
include('./includes/class/ver.class.php');


?>

<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?> - Conversas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="includes/css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background: <?= $cor_fundo ?>">
        <?php include './includes/pages/header.php'; ?>

        <div class="center" style="margin-top: 70px; width: 80vw; height: 100%; display: flow-root; padding: 0;">   
            <form method="post" class="home-form">
                <input type="text" id="userIP" name="userIP" style="display: none;">
                <input type="text" name="menssagem" autofocus style="margin-top: 5px; font-size: 15px;margin-right: 5px;" maxlength="512">
                <input type="submit" name="enviar" value="Enviar" style="margin-top: 3px;height: 35px; width: 120px; font-size: 15px; font-family: monospace;">
            </form>
            <iframe id="iframe" src="./includes/pages/chat.box.php"></iframe>
        </div>
        <script src="includes/js/main.js" type="text/javascript"></script>
        <?php include './includes/pages/footer.php'; ?>
        <!-- UserIP -->
        <script type="text/javascript">
            var userip;
        </script>
        <script type="text/javascript" src="https://l2.io/ip.js?var=userip"></script>
        <script type="text/javascript">
            document.getElementById('userIP').value = userip;
        </script>
    </body>
</html>
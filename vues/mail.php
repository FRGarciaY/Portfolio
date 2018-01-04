<?php
    require '../Controleur/Gestion_contact.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css"/>
        <link rel="icon" href="../images/favicon.ico" />
        <meta charset="UTF-8">
        <title>Yann GARCIA | Portfolio</title>
    </head>
    <body>
        <div class="text-center messageReponse">
            <?php
            echo ($reponse);
            ?>
            <br><br><a class="" href="../"><button name="retour" type="button" id="mailRetour" value="Retour">Retour</button></a>
        </div>
    </body>
</html>

<!DOCTYPE html>
<?php
    include_once'Controleur/Gestion_visite.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="images/favicon.ico" />
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <title>Portfolio</title>
    </head>
    <body>
        <!-- Affichage du loader-->
        <div id="load" class="loaderOff"></div><!-- Fin #loader -->
        <div class="navbar-fixed-top">
            <div class="container" id="menu"><!-- #menu -->
                <div class="row">
                    <ul class="list-inline">
                        <a id="page1" href="#presentation"><li id="liPresentation" class="col-lg-2 hidden-md hidden-sm hidden-xs text-center ligne">Présentation</li></a>
                        <a id="page2" href="#cv"><li class="col-lg-2 hidden-md hidden-sm hidden-xs text-center ligne">Cv</li></a>
                        <a id="page3" href="#stage"><li class="col-lg-2 hidden-md hidden-sm hidden-xs text-center ligne">Stage</li></a>
                        <a id="page4" href="#realisation"><li class="col-lg-2 hidden-md hidden-sm hidden-xs text-center ligne">Réalisations</li></a>
                        <a id="page5" href="#veille"><li class="col-lg-2 hidden-md hidden-sm hidden-xs text-center ligne">Veille technologique</li></a>
                        <a id="page6" href="#contact"><li id="liContact" class="col-lg-2 hidden-md hidden-sm hidden-xs text-center ligne">Contact</li></a>
                        <li id="liMenu" class="col-xs-12 col-sm-offset-6 col-sm-6 col-md-offset-9 col-md-3 hidden-lg text-right"><span id="btMenu" class="glyphicon glyphicon-menu-hamburger"></span>
                            <ul class="list-unstyled">
                                <a id="Mpage1" href="#presentation"><li>Présentation</li></a>
                                <a id="Mpage2" href="#cv"><li>Cv</li></a>
                                <a id="Mpage3" href="#stage"><li>Stage</li></a>
                                <a id="Mpage4" href="#realisations"><li>Réalisations</li></a>
                                <a id="Mpage5" href="#veille"><li>Veille technologique</li></a>
                                <a id="Mpage6" href="#contact"><li>Contact</li></a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- Fin #menu -->
        </div>
        
        <div class="container" id="contenu"><!-- #contenu-->
            <?php 
                include'vues/ouverture.php';
                include'vues/presentation.php';
                include'vues/cv.php';
                include'vues/stage.php';
                include'vues/realisations.php';
                include'vues/veille.php';
                include'vues/contact.php';
            ?>
        </div><!-- Fin #contenu -->
    </body>
</html>
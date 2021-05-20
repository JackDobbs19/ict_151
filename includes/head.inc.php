<?php
session_start();
require (WAY . "includes/autoload.inc.php");
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Cidisi - Games</title>

        <link rel="stylesheet" href="<?= URL ?>css/global.css" type="text/css">

        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!--Jquery validate-->
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

        <!--Fonctions JS globales-->
        <script src="<?= URL ?>js/functions.js"></script>

    </head>
    <body>
        <div class="container">
            <!-- Zone de notification-->
            <div class="alert" id="alert">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong class="bold"></strong><span class="message"></span>
            </div>
            <div class="col-sm-12">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?= URL ?>inscription.php">Game Center</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Droits d'accès<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= URL ?>droits/fonctions.php">Fonctions</a></li>
                                        <li><a href="<?= URL ?>droits/autorisations.php">Autorisations</a></li>
                                        <li><a href="<?= URL ?>droits/attribution_fnc_per.php">Attribution de fonctions</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Déconnection</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>

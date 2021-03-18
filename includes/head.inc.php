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

        <link rel="stylesheet" href="./css/global.css">

        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!--Jquery validate-->
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    </head>
    <body>
        <div class="container">
            <!-- Zone de notification-->
            <div class="alert" id="alert">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong class="bold"></strong><span class="message"></span>
            </div>

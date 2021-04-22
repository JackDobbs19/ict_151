<?php

/** Informations de connexion à la base de données */

define("DISPLAY_ERROR", 1);

error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', DISPLAY_ERROR);

//echo getcwd();
define("WAY","C:/xampp/htdocs/ICT151/");
define("URL","http://localhost/ICT151/");

define("BASE_NAME", "ict151");
define("SQL_HOST", "localhost");
define("SQL_USER", "root");
define("SQL_PASSWORD", "");
?>
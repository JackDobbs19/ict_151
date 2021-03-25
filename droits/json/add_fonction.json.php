<?php
header('Content-Type: application/json');
session_start();
require ("./../../config/config.inc.php");
require_once (WAY . "/includes/autoload.inc.php");

$fnc = new Fonction();

$tab = array();

echo json_encode($tab)
?>
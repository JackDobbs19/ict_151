<?php
header('Content-Type: application/json');
session_start();
require ("./../../config/config.inc.php");
require_once (WAY . "/includes/autoload.inc.php");

print_r($_POST);

$per = new Personne($_POST['id_per']);

if($_POST['status']){
    $per->addFnc($_POST['id_fnc']);
}else{
    $per->delFnc($_POST['id_fnc']);
}
?>
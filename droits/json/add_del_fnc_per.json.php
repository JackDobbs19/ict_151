<?php
header('Content-Type: application/json');
session_start();
require ("./../../config/config.inc.php");
require_once (WAY . "/includes/autoload.inc.php");

//print_r($_POST);

$per = new Personne($_POST['id_per']);

if($_POST['status'] == "true"){
    $tab['reponse'] = $per->addFnc($_POST['id_fnc']);
    $tab['operation'] = "add";
}else{
    $tab['reponse'] = $per->delFnc($_POST['id_fnc']);
    $tab['operation'] = "del";
}

if($tab['reponse']){
    $tab['message']['type'] = "success";
    if($tab['operation'] === "add") {
        $tab['message']['text'] = "L'ajout de la fonction a bien été enregistrée";
    }else{
        $tab['message']['text'] = "Le retrait de la fonction a bien été enregistrée";
    }
}else{
    $tab['message']['type'] = "danger";
    if($tab['operation'] === "add") {
        $tab['message']['text'] = "L'ajout de la fonction n'a pas pu se faire";
    }else{
        $tab['message']['text'] = "Le retrait de la fonction n'a pas pu se faire";
    }
}

echo json_encode($tab);
?>
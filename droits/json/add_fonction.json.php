<?php
header('Content-Type: application/json');
session_start();
require ("./../../config/config.inc.php");
require_once (WAY . "/includes/autoload.inc.php");

$fnc = new Fonction();

$id = $fnc->add($_POST);

if(!$id){
    $tab['reponse'] = false;
    $tab['message']['texte'] = "Echec de l'ajout";
    $tab['message']['type'] = "danger";
}else {
    $fnc->setId($id);
    if ($fnc->init()) {
        $tab['reponse'] = true;
        $tab['message']['texte'] = "La fonction " . $fnc->getNom() . " (" . $fnc->getAbreviation() . ") a bien été ajoutée";
        $tab['message']['type'] = "success";
    }
}

echo json_encode($tab);
?>
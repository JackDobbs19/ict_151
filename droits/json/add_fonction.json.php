<?php
header('Content-Type: application/json');
session_start();
require ("./../../config/config.inc.php");
require_once (WAY . "/includes/autoload.inc.php");

$fnc = new Fonction();

$tab = array();
$tab['reponse'] = false;
$tab['message']['text'] = "Problème d'ajout, contactez votre administrateur";
$tab['message']['type'] = "danger";

if($fnc->checkUnique($_POST['abr_fnc'], $_POST['nom_fnc'])){
    $tab['reponse'] = false;
    $tab['message']['text'] = "Combinaison nom/abréviation existante";
    $tab['message']['type'] = "danger";
}else {
    $fnc->setId($fnc->add($_POST));
    if ($fnc->init()) {
        $tab['reponse'] = true;
        $tab['message']['text'] = "La fonction " . $fnc->getNom() . " (" . $fnc->getAbreviation() . ") a bien été ajoutée";
        $tab['message']['type'] = "success";
    }
}

echo json_encode($tab);
?>
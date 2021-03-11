<?php
header('Content-Type: application/json');
session_start();
require ("./../config/config.inc.php");
require_once (WAY . "/includes/autoload.inc.php");

$per = new Personne();

if($per->checkEmail($_POST['email_per'])){
    $tab['reponse'] = false;
    $tab['message']['texte'] = "Cet email est déjà utilisé !";
    $tab['message']['type'] = "danger";
}else{
    $id = $per->add($_POST);
    $per->setId($id);
    if($per->init()){
        $tab['reponse'] = true;
        $tab['message']['texte'] = "Bienvenue, utlisez les identifiants créés pour vous connecter !";
        $tab['message']['type'] = "succes";
    }
}

echo json_encode($tab);
?>
<?php
header('Content-Type: application/json');
session_start();
require ("./../../config/config.inc.php");
require_once (WAY . "/includes/autoload.inc.php");

$aut_adm = new Autorisation();
$aut_usr = new Autorisation();

$tab_adm = $_POST;
$tab_usr = $_POST;

$tab_adm['desc_aut'] = $_POST['desc_adm_aut'];
$tab_usr['desc_aut'] = $_POST['desc_usr_aut'];
$tab_adm['code_aut'] = "ADM_" . $tab_adm['code_aut'];
$tab_usr['code_aut'] = "USR_" . $tab_usr['code_aut'];

if($aut_adm->checkCode($tab_adm['code_aut']) || $aut_usr->checkCode($tab_usr['code_aut'])){
    $tab['reponse'] = false;
    $tab['message']['text'] = "Cette autorisation existe déjà dans la base";
    $tab['message']['type'] = "danger";
}else {
    $id_adm = $aut_adm->add($tab_adm);
    $id_usr = $aut_usr->add($tab_usr);
    $aut_adm->setId($id_adm);
    $aut_usr->setId($id_usr);
    if ($aut_adm->init() && $aut_usr->init()) {
        $tab['reponse'] = true;
        $tab['message']['text'] = "Les autorisations " . $aut_adm->getCode() . " et " . $aut_usr->getCode() . " ont bien été ajoutées";
        $tab['message']['type'] = "success";
    }
}

echo json_encode($tab);
?>
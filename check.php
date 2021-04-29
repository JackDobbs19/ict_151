<?php
session_start();
require("./config/config.inc.php");
require ("./includes/head.inc.php");

//$tab['nom_per'] = "Raoult";
//$tab['prenom_per'] = "Didier";
//$tab['email_per'] = "didier.raoult@gouv.fr";
//$tab['password_per'] = "M0t_de_passe";
//$tab['news_letter_per'] = 1;

$per = new Personne(1);
echo $per;

//echo $per->add($tab);

//echo $per->checkEmail("didier.raoult@gouv.fr");
//
//echo $per->checkEmail("didier.raoult@gouv.ch");
//
//echo $hash = password_hash($per->getPassword(), PASSWORD_DEFAULT);
//
//if(password_verify($per->getPassword(),$hash)){
//    echo "\nPassword valide";
//}

//$per = new Personne(8);
//echo $per;

echo $per->checkLogin("didier.raoult@gouv.fr", "M0t_de_passe") . "<br>";

if($per->checkConnect()){
    echo "Logué";
}else{
    echo "Pas logué";
}

?>
<br>
<a href="./controle_login.php">Logué ?</a>

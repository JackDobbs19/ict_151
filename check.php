<pre>
<?php

require("./config/config.inc.php");
require("./class/Personne.class.php");

$per = new Personne();

$per->setNom("Raoult");
$per->setPrenom("Didier");
$per->setEmail("didier.raoult@gouv.fr");
$per->setPassword("M0t_de_passe");
$per->setNewsLetter(1);

echo $per;

$tab['nom_per'] = "Raoult";
$tab['prenom_per'] = "Didier";
$tab['email_per'] = "didier.raoult@gouv.fr";
$tab['password'] = "M0t_de_passe";
$tab['news_letter_per'] = 1;

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

echo $per->checkLogin("didier.raoult@gouv.fr","M0t_de_passe");


?>
</pre>

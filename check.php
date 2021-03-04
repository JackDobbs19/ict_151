<pre>
<?php
session_start();
require("./config/config.inc.php");
require("./class/Personne.class.php");

$per = new Personne(4);
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

echo $per->checkLogin("didier.raoult@gouv.fr","M0t_de_passe");

print_r($_SESSION);


?>
</pre>

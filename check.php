<pre>
<?php

require("./class/Personne.class.php");

$per = new Personne();

$per->setNom("Didier");
$per->setPrenom("Raoult");
$per->setEmail("didier.raoult@gouv.fr");
$per->setPassword("M0t_de_passe");
$per->setNewsLetter(1);

echo $per;
?>
</pre>

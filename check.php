<pre>
<?php

require("./class/Personne.class.php");

$per = new Personne();

$per->setNom("Raoult");
$per->setPrenom("Didier");

echo $per->getPrenom() . " " . $per->getNom();
?>
</pre>

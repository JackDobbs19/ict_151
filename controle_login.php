<?php
session_start();

require("./config/config.inc.php");
require("./includes/head.inc.php");

$per = new Personne($_SESSION['id']);

if($per->checkConnect()){
    echo "Logué";
}else{
    echo "Pas logué";
}
?>
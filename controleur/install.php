<?php

$_SESSION['site'] = $_COOKIE["serveur"] ;
$racine = $_COOKIE["racine"] ;


require_once("$racine/fonction/bdd.php");
require_once("$racine/fonction/creationTable.php");


?>

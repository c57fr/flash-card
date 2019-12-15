<?php

require_once("$racine/fonction/bdd.php");
include_once("$racine/fonction/objets/affCard.php") ;

$card = new affCard($bdd) ;
$card -> reqSelct() ;

?>
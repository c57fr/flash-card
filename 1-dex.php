<?php

include_once('fonction/racine.php') ;

$ite = $_COOKIE["serveur"] ;
$racine = $_COOKIE["racine"] ;

echo '<h1>'.$ite.'</h1>' ;
//	include_once("$racine/Vue/head.html") ;
include_once("$racine/Vue/menu.html") ;
?>

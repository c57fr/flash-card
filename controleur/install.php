<?php

$_SESSION['site'] = $_COOKIE["serveur"] ;
$racine = $_COOKIE["racine"] ;


	include_once("$racine/Vue/head.html") ;
	include_once("$racine/Vue/menu.html") ;
	include_once("$racine/fonction/creationTable.php");
	include_once("$racine/Vue/Footer.html");



?>

<?php
include_once("../Vue/head.html") ;


$racine = $_SESSION['racine'] ;
$ite = $_COOKIE["serveur"] ;


print_r($racine)	;//EFFACE - MOI

	include_once("$racine/Vue/menu.html") ;
//	include_once("$racine/fonction/creationTable.php");
	include_once("$racine/Vue/footer.html");



?>

<?php
include_once("fonction/racine.php") ;

$_SESSION['site'] = $_COOKIE["serveur"] ;



include_once("Vue/head.html") ;
$_SESSION['site'] ;
$_SESSION['racine'] ;
include_once("Vue/menu.html") ;
include_once("Vue/footer.html") ;

?>
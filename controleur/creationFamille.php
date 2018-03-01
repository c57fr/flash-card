<?php

$ite = $_COOKIE["SERVEUR"] ;
$racine = $_COOKIE["racine"] ;

if( @$_GET['famille'] ) // si une famille est envoyer 
{
    $famille = $_GET['famille'] ;
    include_once("$racine/fonction/saveFamille.php") ;
    
    $save = new testeurFamille($famille) ;
    $save -> leTester() ;
}
else{
    include_once("$racine/fonction/saveFamille.php") ;
    
include_once("$racine/Vue/head.html") ;
include_once("$racine/Vue/menu.html") ;
include_once("$racine/Vue/creation/famille.html") ;
    afficheFamille() ;



}
?>
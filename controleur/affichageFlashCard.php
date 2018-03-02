<?php

include_once('../fonction/racine.php') ;

$ite = $_COOKIE["SERVEUR"] ;
$racine = $_COOKIE["racine"] ;
//
// Affiche la question + un textarea comme bloc note 
//
include_once("$racine/Vue/head.html") ;
include_once("$racine/Vue/menu.html") ;

include_once("$racine/fonction/afficheCards.php") ;
$question = new afficheCards ;

if(!isset($_GET['AfficheReponse'])) 
{
    $carte = $question -> aleatoireCards() ;
    include_once("$racine/Vue/affichageQuestion.HTML") ;
}
else{
    
}
?>
<?php

require_once("$racine/fonction/bdd.php");
include_once("$racine/fonction/objets/affCard.php") ;
require_once( $racine.'/fonction/listeAleatoire.php' )  ;// Classe pour rendre une liste aléatoire
?>
<?php
$card = new affCard($bdd) ;
$listeFlashCard = $card -> reqSelct() ; // EFFACE-MOI

require_once( $racine.'/Vue/listeFlashCard.php' )  ;



?>

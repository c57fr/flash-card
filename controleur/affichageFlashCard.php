<?php
//  session_start() ;

include_once('../fonction/racine.php') ;

$ite = $_COOKIE["SERVEUR"] ;
$racine = $_COOKIE["racine"] ;

include_once("$racine/Vue/head.html") ;
include_once("$racine/Vue/menu.html") ;

include_once("$racine/fonction/afficheCards.php") ;
$question = new afficheCards ;

// Si rien recue affiche la question + un textarea comme bloc note 
if(!isset($_GET['AfficheReponse']) && !isset($_GET['reponseJuste'])) 
{
    $carte = $question -> aleatoireCards() ;
    include_once("$racine/Vue/affichageQuestion.HTML") ;
}
// Si la reponse est demander l'afficher
elseif( isset($_GET['AfficheReponse']) && !isset($_GET['reponseJuste'])) 
{
    $carte = $question -> reponse($_GET['AfficheReponse']) ;
    
    include_once("$racine/Vue/affichageReponse.HTML") ;
    
}
//
// Si le resultat est recus , recalcule le prochain affichage
//
elseif( isset($_GET['reponseJuste']) ) 
{
    $reponse = $_GET['reponseJuste'] ;
    $ID = $_GET['AfficheReponse'] ;
    
    include_once("$racine/fonction/carteDuFuture.php") ;
        $recalculeCards = new carteDuFuture ;
    
    if( $reponse == 'oui')
    {
        $recalculeCards -> oui($ID) ;
    }
    elseif( $reponse == 'non')
    {
        $recalculeCards -> non($ID) ;
    }
    else{
        echo '<h1>Erreur imprevue :( </h1>' ;
        exit() ;
        
    }
}
// Sinon erreur fatal 
else{
    echo '<h1>Erreur imprevue :( </h1>' ;
    exit() ;
}
?>
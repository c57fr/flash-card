<?php
$ite = $_COOKIE["serveur"] ;
$racine = $_COOKIE["racine"] ;
 //   include_once("$racine/Teste/receptionPoste.php") ;
    //exit();


if( @$_POST['question'] ) // si une carte est envoyer 
{
//    include_once("$racine/fonction/saveCarte.php") ;
    $carte = $_POST['question'] ;
    
    $Famille =$_POST["Famille"] ;
    $question =$_POST["question"] ;
    $reponse = $_POST["reponse"] ;
    echo '<hr />carte'.$carte ;
    echo '<hr />Famille'.$Famille ;
    echo '<hr />question'.$question ;
    echo '<hr />reponse'.$reponse ;
    
    
include_once("$racine/Vue/head.html") ;
include_once("$racine/Vue/menu.html") ;
    $cards= new saveCarte($question , $reponse , $Famille ) ;
}
else{
    
    include_once("$racine/Vue/head.html") ;
    include_once("$racine/Vue/menu.html") ;
    
    include_once("$racine/fonction/afficheFamilleDeroulant.php") ;

    include_once("$racine/Vue/Formulaire/carte.html") ;
        echo "</div>" ;
}
?>

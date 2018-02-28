<?php
//
//  Met en memoire le nom du site pour les liens 
//


//  $aff= $_SERVER["SERVER_ADDR"]  ; // Addresse IP Serveur

//  $aff= $_SERVER["REMOTE_ADDR"]  ; // Addresse IP Client

$ite = $_SERVER["SERVER_NAME"] ;
$racine = $_SERVER["DOCUMENT_ROOT"] ;

setcookie('SERVEUR', "$ite" , time() + 365*24*3600) ; 
setcookie('racine', "$racine" , time() + 365*24*3600) ; 

?>
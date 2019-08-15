<?php
//
//  Met en memoire le nom du site + le chemin absolue depuis la racine du serveur pour les liens 
//


$ite  = 'http://'.$_SERVER["SERVER_NAME"].'/flash-card' ;
$racine  = $_SERVER["DOCUMENT_ROOT"].'/flash-card' ;

setcookie('serveur',$ite   , time() + 60*60, null, null, false, true);

//
//  Pour des raisons de sécurité ce cookie est temporairement cellé
//
//  setcookie('racine', $racine , time() + 60*60, null, null, false, true);



?>

<?php
//
//  Met en memoire le nom du site + le chemin absolue depuis la racine du serveur pour les liens 
//


$ite = $_SERVER["SERVER_NAME"].'/flash-card' ;
$racine = $_SERVER["DOCUMENT_ROOT"].'/flash-card' ;

setcookie('serveur', "$ite" , time() + 365*24*3600, null, null, false, true);
setcookie('racine', "$racine" , time() + 365*24*3600, null, null, false, true);



?>

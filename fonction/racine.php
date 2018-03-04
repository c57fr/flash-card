<?php
//
//  Met en memoire le nom du site pour les liens 
//

$ite = $_SERVER["SERVER_NAME"] ;
$ite = "$ite/flash-card" ;
$racine = $_SERVER["DOCUMENT_ROOT"] ;
$racine = "$racine/flash-card" ;

setcookie('SERVEUR', "$ite" , time() + 365*24*3600, null, null, false, true);
setcookie('racine', "$racine" , time() + 365*24*3600, null, null, false, true);


/*
$ite = $_SERVER["SERVER_NAME"] ;
$racine = $_SERVER["DOCUMENT_ROOT"] ;

echo '<h1>$ite => '.$ite.'</h1>' ;
$racine = "$racine/flash-card" ;
echo '<h1>$racine => '.$racine.'</h1>' ;

setcookie('SERVEUR', "$ite" , time() + 365*24*3600, null, null, false, true);
setcookie('racine', "$racine" , time() + 365*24*3600, null, null, false, true);
*/
?>
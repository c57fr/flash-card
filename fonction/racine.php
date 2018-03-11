<?php
//
//  Met en memoire le nom du site pour les liens 
//

$ite = $_SERVER["SERVER_NAME"] ;
$racine = $_SERVER["DOCUMENT_ROOT"] ;


setcookie('SERVEUR', "$ite" , time() + 365*24*3600, null, null, false, true);
setcookie('racine', "$racine" , time() + 365*24*3600, null, null, false, true);



?>
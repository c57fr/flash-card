<?php

include_once("$racine/fonction/bdd.php");

$creationBase=<<<CREATION
CREATE BASE flashCard  ;
CREATION ;
 
$creationFamille =<<<CREATION "CREATE TABLE IF NOT EXISTS famille (
famille SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name TEXT(550) NOT NULL
) " ;
CREATION ;
$creationCards = "CREATE TABLE IF NOT EXISTS cards (
ID SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
question TEXT(550) NOT NULL ,
reponse TEXT(550) NOT NULL ,
famille SMALLINT UNSIGNED NOT NULL ,
niveau TINYINT UNSIGNED NOT NULL DEFAULT 1,
dateDeVue DATE NOT NULL
) " ;


$count = $bdd->exec($creationBase);
$count = $bdd->exec($creationFamille);
$count = $bdd->exec($creationCards);

?>
<h1>création de la table</h1>

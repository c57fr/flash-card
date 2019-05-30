<?php

include_once("$racine/fonction/bdd.php");


$creationFamille = "CREATE TABLE IF NOT EXISTS famille (
famille SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name TEXT(550) NOT NULL
) " ;
 

$creationCards = "CREATE TABLE IF NOT EXISTS cards (
ID SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
question TEXT(550) NOT NULL ,
reponse TEXT(550) NOT NULL ,
famille SMALLINT UNSIGNED NOT NULL ,
niveau TINYINT UNSIGNED NOT NULL DEFAULT 1,
dateDeVue DATE NOT NULL
) " ;


$count = $bdd->exec($creationFamille);
$count = $bdd->exec($creationCards);

?>
<h1>création de la table</h1>

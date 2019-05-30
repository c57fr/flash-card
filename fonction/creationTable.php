<?php

include_once("$racine/fonction/bdd.php");


$creationFamille = "CREATE TABLE IF NOT EXISTS famille (
idFamille SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name TEXT(550) NOT NULL
) " ;
 
$creationCards = "CREATE TABLE IF NOT EXISTS cards (
idCards SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
Question TEXT(550) NOT NULL ,
nom TEXT(550) NOT NULL ,
Reponse TEXT(550) NOT NULL ,
IdFamille SMALLINT UNSIGNED NOT NULL ,
DateDeVue DATE NOT NULL
) " ;


$count = $bdd->exec($creationFamille);
$count = $bdd->exec($creationCards);

?>
<h1>création de la table</h1>

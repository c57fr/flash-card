<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$baseDeDonnee = 'flash-card';

//  $bdd = new PDO("mysql:host=$servername;dbname=$baseDeDonnee", $username, $password); // Version objet

$bdd = mysqli_connect($servername, $username, $password, $baseDeDonnee); // Version procédural

/* Vérification de la connexion */
if ($bdd->connect_errno) {
    $_SESSION['erreur'] = 4;
    include_once $_SESSION['racine'] . "/fonction/erreur.php";
    exit();
}

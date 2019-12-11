<?php

$servername = 'manudon';
$username = 'phpmyadmin';
$password = '123456';
$baseDeDonnee = 'flashCard';


$bdd = new PDO("mysql:host=$servername;dbname=$baseDeDonnee", $username, $password);
            

?>


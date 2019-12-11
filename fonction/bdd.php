<?php
//$bdd =new PDO('mysql:host=localhost;dbname=flashCard','phpmyadmin','123456') ; 
//  $bdd =new PDO('mysql:host=192.168.10.10;dbname=flashCard','phpmyadmin','123456') ; 
$servername = 'manudon';
$username = 'phpmyadmin';
$password = '123456';
$baseDeDonnee = 'flashCard';
$baseDeDonnee = 'bleurg';
    $bdd = new PDO("mysql:host=$servername;dbname=$baseDeDonnee", $username, $password);
            
    //On vérifie la connexion
   
    if($bdd->connect_error){
        die('Erreur : ' .$bdd->connect_error);
    }
    echo 'Connexion réussie'."<br>\n";
?>

<!--
< ?php
            $servername = 'manudon';
            $username = 'phpmyadmin';
            $password = '123456';
            $baseDeDonnee = 'flashCard';
            
            //On établit la connexion
            $bdd = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
           
            if($bdd->connect_error){
                die('Erreur : ' .$bdd->connect_error);
            }
            echo 'Connexion réussie';


//            $stmt = $bdd->prepare("INSERT INTO REGISTRY (name, value) VALUES (:name, :value)");
            $stmt = $bdd->prepare("CREATE DATABASE (name) VALUES (:name)");
            $stmt->bindParam(':name', $name);
// CREATE DATABASE `` ;
            $name = 'bleurg';
            $stmt->execute();
            
?>
-->


<?php
include_once("$racine/fonction/bdd.php")  ;

$req = $bdd->prepare('INSERT INTO cards(`question`, `reponse`, `famille`, `dateDeVue`) VALUES (:question,:reponse,:famille,NOW())');


    
    $Famille =$_POST["Famille"] ;
    $question =$_POST["question"] ;
    $reponse = $_POST["reponse"] ;

$req->execute(array(
	'question' => $question,
	'reponse' => $reponse ,
	'famille' => $Famille 
	));

echo '<hr />La Flash-Card à bien été ajoutée !';    
    
    
    
    
?>
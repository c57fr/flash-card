<?php
//
//  Determine le niveau de la carte , celon qu'elle est reussi ou non la date de vue est placer en concequance , insi que le nouveau nivea 
//
class carteDuFuture
{
    
    private $_ID ;
    private $_niveau ;
    private $_bdd ;
    
    public function __construct()
    {
        $ite = $_COOKIE["SERVEUR"] ;
        $racine = $_COOKIE["racine"] ;

        include_once("$racine/fonction/bdd.php") ;
            $this -> _bdd = $bdd ;
        
    }
    
    public function oui($var)
    {
//
// Le niveau gagne +1 et le temp corespondant au niveau
//
        $ite = $_COOKIE["SERVEUR"] ;
        $racine = $_COOKIE["racine"] ;

        include("$racine/fonction/bdd.php") ;
        
        include_once("$racine/fonction/ChoixDuNiveau.php") ;
        


        $req->execute(array(
            'ID' => $_SESSION['ID']
            )); 
/*
        $req->execute(array(
            'niveau' => $nv_niveau ,
            'ID' => $_SESSION['ID']
            ));  
*/
    }
    
    public function non($var)
    {
//
// dateDeVue = 1 JOUR dans le future niveau == 1 !
//
        $ite = $_COOKIE["SERVEUR"] ;
        $racine = $_COOKIE["racine"] ;

        include("$racine/fonction/bdd.php") ;

        $req = $bdd->prepare('UPDATE cards SET niveau = :niveau, dateDeVue = DATE_ADD(NOW() , INTERVAL 1 DAY)  WHERE ID = :ID');

        $req->execute(array(
            'niveau' => 1 ,
            'ID' => $_SESSION['ID']
            ));   
    }
}











?>
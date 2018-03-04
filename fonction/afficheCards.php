
<?php

class afficheCards
{
    private $_idCard ;
    
    public function aleatoireCards()
    {
//
// Selectionne et affiche UNE flash-cards au hasard Mais dons la date de vue est <= aujourd'huis
//        le niveau != 0
//      
        $ite = $_COOKIE["SERVEUR"] ;
        $racine = $_COOKIE["racine"] ;

        include_once("$racine/fonction/bdd.php") ;

        $reponse = $bdd->query('
        SELECT * FROM cards WHERE niveau != 0 AND dateDeVue < NOW() ORDER BY RAND() LIMIT 1;
        ');
        $donnees = $reponse->fetch() ;
        $_SESSION['ID'] = $donnees['ID'] ;
        $_SESSION['niveau'] = $donnees['niveau'] ;
        
        
        return $donnees ;
    }
    
    public function reponse($ID)
    {
//
//
//
        $ite = $_COOKIE["SERVEUR"] ;
        $racine = $_COOKIE["racine"] ;

        include_once("$racine/fonction/bdd.php") ;
/*
        $reponse = $bdd->query('
        SELECT * FROM cards WHERE ID= ?');
        $donnees = $reponse->fetch() ;
        
*/
$req = $bdd->prepare('SELECT * FROM cards WHERE ID = ?');
$req->execute(array($ID));
        
        $donnees = $req->fetch() ;
        return $donnees ;
    }
    
    
}
?>
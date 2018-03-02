
<?php

class afficheCards
{
    private $_idCard ;
    
    public function aleatoireCards()
    {
//
// Selectionne est affiche une flash-cards au hasard Mais dons la date de vue est <= aujourd'huit
//        + le niveau != 0
//      
        $ite = $_COOKIE["SERVEUR"] ;
        $racine = $_COOKIE["racine"] ;

        include_once("$racine/fonction/bdd.php") ;

        $reponse = $bdd->query('
        SELECT * FROM cards WHERE niveau != 0 AND dateDeVue < NOW() ORDER BY RAND() LIMIT 1;
        ');
        $donnees = $reponse->fetch() ;
        
        return $donnees ;
    }
    
    
}










?>
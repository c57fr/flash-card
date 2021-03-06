<?php

class affCard
{
    private $bdd ;
    private $resultat ;
//**********************************************************************************************************
//          constructteur
//*********************************************************************************************************

public function __construct( $bdd )
{
    $this->bdd = $bdd ;
}

//**********************************************************************************************************
//          requette sql qui affiche une flash-card
//*********************************************************************************************************

public function reqSelct()
{
    $bdd = $this->bdd  ;
// GROUP BY cards.ID
    $old_requete = "SELECT * FROM cards WHERE dateDeVue <= NOW() AND  niveau != 0 ORDER BY RAND() LIMIT  15 " ;//Construction de la requête     
    $requete = <<<'req'
    SELECT DISTINCT 
cards.id , cards.question , cards.reponse , cards.niveau ,cards.famille , famille.name FROM cards , famille
WHERE cards.famille = famille.famille 
AND
dateDeVue <= NOW()
AND
niveau != 0 
ORDER BY
RAND()
LIMIT 15


req ;    
//    SELECT DISTINCT * FROM cards , famille WHERE dateDeVue <= NOW() AND  niveau != 0 ORDER BY RAND() LIMIT  15 ; // fFonctionne avec doublon
    $reussi = mysqli_query (  $bdd ,  $requete ) ;// Execution de la requête 
    
    foreach ($reussi as $key => $table) {
        $flashcard[] = $table ;
    }
    $this->flashcard = $reussi  ;
    
//    print_r( $flashcard ) ; //EFFACE-MOI

    //  mysqli_free_result ( $requete ) ;//Libération de la memoire ( ne marche plus )

    foreach ($reussi as $value) {
//        $resultat[]= $value ;
//        echo '<pre>' ; //Efface-moi
//        print_r( $resultat ) ; //Efface-moi
    }

    //Si aucune carte a affiché alors toute les cartes disponibles on été vue
    if ( @!$value ) {
        $_SESSION['erreur']=6;
        include_once( $_SESSION['racine']."/fonction/erreur.php");
        exit();
    }    

//    print_r( $value ) ; //Efface-moi
    return $reussi ;

//    echo '<pre>' ; //Efface-moi
//    print_r( $resultat ) ; //Efface-moi
    return $reussi ;


}



}


?>
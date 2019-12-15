<?php

class affCard
{
    private $bdd ;
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

    $requete = "SELECT * FROM cards WHERE dateDeVue <= NOW() AND  niveau != 0 LIMIT 1" ;//Construction de la requête     
    $reussi = mysqli_query (  $bdd ,  $requete ) ;// Execution de la requête 

    mysqli_free_result ( $requete ) ;//Libération de la memoire 

    foreach ($reussi as $value) {
//        $resultat[]= $value ;
//        echo '<pre>' ; //Efface-moi
//        print_r( $resultat ) ; //Efface-moi
    }

    //Si aucune carte a affiché alors toute les cartes disponibles on été vue
    if ( !$value ) {
        $_SESSION['erreur']=6;
        include_once( $_SESSION['racine']."/fonction/erreur.php");
        exit();
    }    

    print_r( $value ) ; //Efface-moi
    return $reussi ;

    echo '<pre>' ; //Efface-moi
    print_r( $resultat ) ; //Efface-moi
    return $reussi ;


}



}


?>
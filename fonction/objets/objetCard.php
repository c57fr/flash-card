<?php

class card
{
    private $famille ;
    private $question ;
    private $reponse ;
    private $bdd ;
//**********************************************************************************************************
//          constructteur
//*********************************************************************************************************

    public function __construct( $bdd , $question , $reponse  , $famille )
    {
        $this->bdd = $bdd ;
        $this->securiter( $question , $reponse , $famille);
    }
//**********************************************************************************************************
//          htmlspecialchars
//*********************************************************************************************************

private function securiter( $question , $reponse , $famille ): void
{
    $question = htmlentities( $question ) ;
    $reponse = htmlentities( $reponse ) ;
    $famille = (int)$famille ;
    $this-> question = $question ;
    $this-> reponse = $reponse ;
    $this-> famille = $famille ;
}
//**********************************************************************************************************
//          affiche les familles dans le menu déroulant
//*********************************************************************************************************

public static function affMenuDeroulant( $bdd )
{
    $requete = "SELECT * FROM famille " ;//Construction de la requête     
    $reussi = mysqli_query (  $bdd ,  $requete ) ;// Execution de la requête 
    mysqli_free_result ( $requete ) ;//Libération de la memoire 
    
    foreach ($reussi as $key => $value) {
        $resultat[]= $value ;
    }
    return $reussi ;
//        echo $key.'<h1>value = '.$value['name'].'</h1> <pre> '."\n"; //Efface-moi
}
//**********************************************************************************************************
    //          enregistrecards
//*********************************************************************************************************

public function enregistrecards(): bool
{
    $requete = <<<INSERT_INTO
    INSERT INTO `flashCard`.`cards` (`question` , `reponse` , `famille`  , `dateDeVue` ) VALUES ('$this->question' , '$this->reponse' , '$this->famille' , NOW() );
INSERT_INTO ;//Construction de la requête 

    $reussi = mysqli_query (  $this->bdd ,  $requete ) ;// Execution de la requête 
    
    if( !$reussi )//Si il y a une erreur de communication avec la bdd
    {
        $_SESSION['erreur']= 5 ;
        include_once( $_SESSION['racine']."/fonction/erreur.php");
        exit();
    }
    $requete=$reussi ;
    mysqli_free_result ( $reussi ) ;//Libération de la memoire 
    return $requete ;
//  $bdd , $question , $reponse, $famille
}


}

?>
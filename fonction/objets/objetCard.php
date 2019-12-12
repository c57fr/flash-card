<?php

class card
{
    private $question ;
    private $reponse ;
    private $bdd ;
//**********************************************************************************************************
//          constructteur
//*********************************************************************************************************

    public function __construct( $bdd , $question , $reponse )
    {
        $this->bdd = $bdd ;
        $this->securiter( $question , $reponse );
    }
//**********************************************************************************************************
//          htmlspecialchars
//*********************************************************************************************************

private function securiter( $question , $reponse ): void
{
    $question = htmlentities( $question ) ;
    $reponse = htmlentities( $reponse ) ;
    $this-> question = $question ;
    $this-> reponse = $reponse ;
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
//        echo $key.'<h1>value = '.$value['name'].'</h1> <pre> '."\n"; //Efface-moi
        $resultat[]= $value ;
    }
    return $reussi ;

    
}
//**********************************************************************************************************
    //          enregistrecards
//*********************************************************************************************************

public function enregistrecards(  ): bool
{
    $requete = <<<INSERT_INTO
    INSERT INTO `flashCard`.`cards` (`question` , `reponse`) VALUES ('$this->question' , '$this->reponse');
INSERT_INTO ;//Construction de la requête 

//        echo '<h1>requete = '.$requete.'</h1> '; //Efface-moi

    $reussi = mysqli_query (  $this->bdd ,  $requete ) ;// Execution de la requête 
    
    if( !$reussi )//Si il y a une erreur de communication avec la bdd
    {
        $_SESSION['erreur']= 5 ;
        include_once( $_SESSION['racine']."/fonction/erreur.php");
        exit();
    }
    return $reussi ;
}


}

?>
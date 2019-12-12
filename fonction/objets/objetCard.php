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
        $this->securiter( $question , $reponse );
    }
//**********************************************************************************************************
//          htmlspecialchars
//*********************************************************************************************************

    private function securiter( $question , $reponse )
    {
        $question = htmlentities( $question ) ;
        $reponse = htmlentities( $reponse ) ;
        $this-> question = $question ;
        $this-> reponse = $reponse ;
    }
//**********************************************************************************************************
    //          enregistreFamille
//*********************************************************************************************************

public function enregistrecards_old(  )
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
}
//**********************************************************************************************************
    //          enregistrecards
//*********************************************************************************************************

public function enregistrecards(  )
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
}


}

?>
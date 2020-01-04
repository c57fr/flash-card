<?php

class famille
{
    private $nom ;

//**********************************************************************************************************
//          constructteur
//*********************************************************************************************************

    public function __construct( $var )
    {
        $this->securiter( $var );
    }
//**********************************************************************************************************
//          htmlspecialchars
//*********************************************************************************************************

    private function securiter( $var )
    {
        $var = htmlspecialchars( $var ) ;
        $this-> nom = $var ;
    }
//**********************************************************************************************************
//          tropPetit
//*********************************************************************************************************

    public function tropPetit()
    {
        if( strlen( $this-> nom ) < 3)
        {
            $_SESSION['erreur']=1;
            include_once( $_SESSION['racine']."/fonction/erreur.php");
            exit();
        }
    }
//**********************************************************************************************************
//          tropGrand
//*********************************************************************************************************

    public function tropGrand()
    {
        if( strlen( $this-> nom ) > 15 )
        {
            $_SESSION['erreur']=2;
            include_once($_SESSION['racine']."/fonction/erreur.php");
            exit();
        }
    }
//**********************************************************************************************************
//      #todo    caracterSpeciaux
//*********************************************************************************************************

    public function caracterSpeciaux()
    {
        #todo
        //a mettre a jour
        if( false )
        {
            $_SESSION['erreur']= 3 ;
            include_once( $_SESSION['racine']."/fonction/erreur.php");
            exit();
        }
    }
//**********************************************************************************************************
//          existeDeja
//*********************************************************************************************************

    public function existeDeja( $bdd )
    {
        $requete = "SELECT * FROM famille WHERE name = '$this->nom' " ;//Construction de la requête 
        
        $reussi = mysqli_query (  $bdd ,  $requete ) ;// Execution de la requête 
        
        $trouver = mysqli_num_rows($reussi)   ;// Affiche le nombre de ligne trouver 
//        mysqli_free_result ( $requete ) ;//Libération de la memoire NE MARCHE PAS !

        if( !$reussi )//Si il y a une erreur de communication avec la bdd
        {
            $_SESSION['erreur']= 5 ;
            include_once( $_SESSION['racine']."/fonction/erreur.php");
            exit();
        }
        if( $trouver >= 1 )//Si il a trouver au moin un résultat erreur , la famille existe déjà !
        {
            $_SESSION['erreur']= 3 ;
            include_once( $_SESSION['racine']."/fonction/erreur.php");
            exit();
        }
        else {
            $_SESSION['erreur']= 0 ;
        }
    }
//**********************************************************************************************************
//          enregistreFamille
//*********************************************************************************************************

    public function enregistreFamille( $bdd )
    {
        $requete = <<<INSERT_INTO
          INSERT INTO `flashCard`.`famille` (`name`) VALUES ('$this->nom');
INSERT_INTO ;//Construction de la requête 

//        echo '<h1>requete = '.$requete.'</h1> '; //Efface-moi

        $reussi = mysqli_query (  $bdd ,  $requete ) ;// Execution de la requête 
        
        if( !$reussi )//Si il y a une erreur de communication avec la bdd
        {
            $_SESSION['erreur']= 5 ;
            include_once( $_SESSION['racine']."/fonction/erreur.php");
            exit();
        }
    }
}


?>
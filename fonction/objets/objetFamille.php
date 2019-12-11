<?php

class famille
{
    private $nom ;


    public function __construct( $var )
    {
        $this->securiter( $var );
    }

    private function securiter( $var )
    {
        $var = htmlspecialchars( $var ) ;
        $this-> nom = $var ;
    }
    
    public function tropPetit()
    {
        if( strlen( $this-> nom ) < 3)
        {
            $_SESSION['erreur']=1;
            include_once( $_SESSION['racine']."/fonction/erreur.php");
            exit();
        }
    }

    public function tropGrand()
    {
        if( strlen( $this-> nom ) > 15 )
        {
            $_SESSION['erreur']=2;
            include_once($_SESSION['racine']."/fonction/erreur.php");
            exit();
        }
    }

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

    public function existeDeja()
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
}


?>
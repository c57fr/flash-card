<?php
//
//  Teste :
//  1.Si chiffres = Erreur
//  2.Si moin de 5 Lettres = ERREUR
//  3.Si Plus de 25 Lettres = ERREUR
//  4.Si Existe deja = ERREUR
//  5.Efface caractére speciaux
//  
//  Enregistre Famille 
//
class testeurFamille
{
    private $famille ;
    
    public function __construct($var)
    {
        $this->famille =  $var ;
        $this->famille = strip_tags($this->famille);
        $f = $this->famille ;
        echo '<h1>'.$f.'</h1>';
    }
    
    public function suiteDuScript()
    {   

        $ite = $_COOKIE["SERVEUR"] ;
        $racine = $_COOKIE["racine"] ;

        include_once("$racine/Vue/head.html") ;
        include_once("$racine/Vue/menu.html") ;
        include_once("$racine/Vue/creation/famille.html") ;
        exit();
    }
    
    private function queChiffre()
    {
        $f = $this->famille ;
        if(is_numeric($f))
        {
            echo '<h1 id="erreur">Interdis d\'utiliser des Chiffres <br /> Merci :-)</h1>' ;
            $this -> suiteDuScript() ;
        }
    }
    
    private function taille()
    {
        $f = $this->famille ;
        if(strlen($f) < 5 || strlen($f) > 25)
        {
            echo '<h1 id="erreur">Entre 5 et 25 lettre STP  :-)</h1>' ;
            $this -> suiteDuScript() ;
        }
    }
    
    private function effaceCaractereSpeciaux()
    {
        $f = $this->famille ;
        $pattern = '#[^a-z\'A-Z0-9_]#';
        preg_match($pattern, $f , $matches);
        if( $matches )
        {
            echo '<h1 id="erreur">Pas de Caractére speciaux <br /> Merci :)</h1>' ;
            $this -> suiteDuScript() ;
        }
    }
    
    public function leTester()
    {
        $this -> taille() ;
        $this -> effaceCaractereSpeciaux() ;
        $this -> queChiffre() ;
    }
    
}
class CompareFamille
{
    
    
    
}
class enregistreFamille
{
    
    
    
}



?>

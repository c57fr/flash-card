<?php
class saveCarte
{
    private $_famille ;
    private $_question ;
    private $_reponse ;
    
    public function __construct( $question , $reponse , $famille )
    {
        $famille = htmlspecialchars($famille);
        $question = htmlspecialchars($question);
        $reponse = htmlspecialchars($reponse);
        
        $this -> _famille = $famille ;
        $this -> _question = $question ;
        $this -> _reponse = $reponse ;
        
        if($famille == '')
        {
            $famille = 'rien' ;
        }
        
        $this -> taille() ;        
        $this -> enregistrementCarte() ;
    }
    
    
    private function enregistrementCarte()
    {
        
    $ite = $_COOKIE["SERVEUR"] ;
    $racine = $_COOKIE["racine"] ;
    include_once("$racine/fonction/enregistrementCarte.php") ;
        
    }
    
    private function taille()
    {
        $question = $this -> _question ;
        $reponse = $this -> _reponse ;
        
        if(strlen($question) < 5 || strlen($question) > 255)
        {
            echo '<h1 id="erreur">Entre 5 et 255 lettres STP  :-)</h1>' ;
            exit('<hr />$question') ;
        }
        
        if(strlen($reponse) < 5 || strlen($reponse) > 255)
        {
            echo '<h1 id="erreur">Entre 5 et 255 lettres STP  :-)</h1>' ;
            exit('<hr />$reponse') ;
        }
    }
    
    
    
    
    
    
    
    
}
?>

<?php


class listeAleatoire {
	public $maListe = 'Public' ;
	public $maNouvelleListe = 'Public' ;
	
    public function __construct($var) 
    {
		$this->maListe = $var ;
		if ( $this->detectionPattern() )
		{
			$maNouvelleListe = $this->creeListeAleatoire();
			$this->maNouvelleListe = $maNouvelleListe ;
			return $this->maNouvelleListe ;
		}
    }
    
    private function detectionPattern()
    {
		$var = $this->maListe;
		$this->maListe = $var = trim ( $var ) ;#Supprime l'espace au début et a la fin
		 
		$subject = $var ;# Où le cherche-t-on
		$pattern = "#^%#i"  ;# Ce que l'on cherche (i donc sans la case)
		preg_match($pattern, $var , $matches);#Recherche la lettre % si oui $matches == 1
		return @$matches[0] ;
	}
	
	private function creeTableau()
	{
//		$keywords = preg_split("#\n#", $this->maListe );
		$keywords = preg_split("#<br><br>#", $this->maListe );	
		return $keywords ;
	}
	
	private function creeListeAleatoire()
	{
		
		$var = $this->creeTableau();
		$output = array_slice($var, 0, 1);   
		$var[0] = Null ;
		
		shuffle($var);
		
		$temp =  $output[0]."<ul><li>" . implode("</li><li>", $var) . "</li></ul>";
		
		return $temp ;
	}
	
	public function getListe()
	{
		if ($this->maNouvelleListe == 'Public')
		{
			return $this->maListe ;
echo '<h1>sfdgsqhkjlgfrdfhkjlkmlhgtf</h1>' ;
		} ;
		return $this->maNouvelleListe ;
	}
}


?>

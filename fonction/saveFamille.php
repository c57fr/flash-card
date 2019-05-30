<?php
//
//  Teste :
//  1.Si que chiffres = Erreur
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
        $this->famille = ucwords($this->famille);//1er lettre majuscule
        $f = $this->famille ;
        echo '<h1>'.$f.'</h1>';
    }
    
    public function suiteDuScript()
    {   

        $ite = $_COOKIE["serveur"] ;
        $racine = $_COOKIE["racine"] ;

        include_once("$racine/Vue/head.html") ;
        include_once("$racine/Vue/menu.html") ;
        include_once("$racine/Vue/Formulaire/famille.html") ; 
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
    
    private function CompareAvecBdd()
    {
        $f = $this->famille ;
        $ite = $_COOKIE["serveur"] ;
        $racine = $_COOKIE["racine"] ;
        include_once("$racine/fonction/bdd.php") ;
    //
    // Debut du comparatif
    //
        $req = $bdd->prepare('SELECT * FROM famille WHERE name = ?');
        $req->execute(array($f));
        $donnees = $req->fetch() ;
        if($donnees)
        {
            echo '<h1 id="erreur">Cette famille existe déjà <br /> Merci :)</h1>' ;
            $this -> suiteDuScript() ;
        }
    }
    
    private function saveFamille()
    {
        $f = $this->famille ;
        $ite = $_COOKIE["serveur"] ;
        $racine = $_COOKIE["racine"] ;
        $bdd =new PDO('mysql:host=localhost;dbname=flashCard','phpmyadmin','123456') ; 
    //
    // Debut de la sauvegarde
    //
//        include("$racine/fonction/bdd.php") ;
        
        $req = $bdd->prepare('INSERT INTO famille(name) VALUES(:name)');
        $req->execute(array(
            'name' => $f
            ));
        
       ?>
        <h1>La Famille a bien été ajouté !</h1>
        <h2>retour dans 3 segonde</h2>
        <?php
        echo '$f = '.$f  ;
        echo '<hr />$ite = '.$_COOKIE["serveur"] ;
        echo '<hr />$racine = '.$_COOKIE["racine"] ;
        ?>
        <META http-equiv="refresh" content="3; URL=<?php echo 'http://'.$_COOKIE["serveur"] ;;  ?>">

       
       <?php
    }
    
    public function leTester()
    {
        $this -> taille() ;
        $this -> effaceCaractereSpeciaux() ;
        $this -> queChiffre() ;
        $this -> CompareAvecBdd() ;
        $this -> saveFamille() ;
    }
    
}

    function afficheFamille()
    {
        
$ite = $_COOKIE["serveur"] ;
$racine = $_COOKIE["racine"] ;
        
        include_once("$racine/fonction/bdd.php") ;
        
        $reponse = $bdd->query('SELECT name FROM famille ');
        
        $donnees = $reponse->fetch() ;
        $i=0;
        while($donnees = $reponse->fetch() )
        {
            echo '<pre><p>'.$donnees[$i].'</p></pre>';
            $i+1;
        }
    }
?>

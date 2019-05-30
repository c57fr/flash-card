< > <?php

        $ite = $_COOKIE["serveur"] ;
        $racine = $_COOKIE["racine"] ;

        include_once("$racine/fonction/bdd.php") ;

        $reponse = $bdd->query('
        SELECT * FROM cards WHERE niveau != 0 AND dateDeVue < NOW() ORDER BY RAND() LIMIT 1;
        ');
        $donnees = $reponse->fetch() ;
        $_SESSION['ID'] = $donnees['ID'] ;
        $_SESSION['niveau'] = $donnees['niveau'] ;
        




$sth = $bdd->prepare("SELECT * FROM cards WHERE niveau != 0 AND dateDeVue < NOW() ");
$req = $sth->execute();
$bleurg = $sth->fetch() ;

/* styles PDOStatement::fetch */
print("PDO::FETCH_ASSOC: ");
print("Retourne la ligne suivante en tant qu'un tableau indexé par le nom des colonnes\n<hr />");
$result = $sth->fetch(PDO::FETCH_ASSOC);
        
do{
	print_r($bleurg);
	}while( $sth->fetch() )
?>

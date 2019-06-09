<pre>
<h1>serveur</h1> 
    <?php
$id =12;
            include_once("/var/www/html/flash-card/fonction/bdd.php") ;
        
            $req = $bdd->prepare('SELECT * FROM famille WHERE famille=?') ;
		$req -> execute(array($id));
            
         
 while ( $donnees = $req->fetch()  ) {
        print_r( $donnees ) ;

            }






?>

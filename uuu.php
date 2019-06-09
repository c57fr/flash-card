<pre> 
    <?php

            include_once("/var/www/html/flash-card/fonction/bdd.php") ;
        
            $req = $bdd->query('SELECT * FROM famille ') ;
            
         
 while ( $donnees = $req->fetch()  ) {
        print_r( $donnees ) ;

            }















?>

< ?php
        function rechercheFamille($id)
        {

            include_once("/var/www/html/flash-card/fonction/bdd.php") ;
        
            $req = $bdd->prepare('SELECT * FROM famille WHERE  famille= ? ) VALUES ( :famille ) ';
            
            $req->execute(array(
            'famille' => $id 
            ));
            
            $donnees = $reponse->fetch() ;
            return $donnees ;

        };

//              $aaa = rechercheFmille(13);
        echo '<hr />ok<hr />' ;
//        print_r($aaa) ;
?>

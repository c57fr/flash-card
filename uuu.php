< > <?php
        function rechercheFmille($id)
        {

            include_once("/var/www/html/flash-card/fonction/bdd.php") ;
        
            $req = $bdd->prepare('SELECT * FROM famille WHERE  famille= famille ) VALUES ( :famille ) ';
            
            $req->execute(array(
            'famille' => $id 
            ));
            
            $donnees = $req->fetch() ;
            return $donnees ;

        }

//              $aaa = rechercheFmille(13);
        echo '<hr />ok<hr />' ;
//        print_r($aaa) ;
?>

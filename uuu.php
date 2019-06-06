< > <?php
        function rechercheFmille($id)
        {
/*
            include_once("/var/www/html/flash-card/fonction/bdd.php") ;
        
            $req = $bdd->prepare('SELECT * FROM famille WHERE  famille= famille ) VALUES ( :famille ) ';
            
            $req->execute(array(
            'famille' => $id 
            ));
            
            $donnees = $req->fetch() ;
            return $donnees ;
*/

$stmt = $dbh->prepare("SELECT * FROM famille where famille = ?");
$stmt->execute(array( $id ))

$row = $stmt->fetch()
    print_r($row);



        }

//              $aaa = rechercheFmille(13);
        echo '<hr />ok<hr />' ;
//        print_r($aaa) ;
?>

< > <?php
        function rechercheFmille($id)
        {

            include_once("/var/www/html/flash-card/fonction/bdd.php") ;
 


$stmt = $dbh->prepare("SELECT * FROM famille where famille = ?");

$stmt->execute(array( $id )) ;

$row = $stmt->fetch() ;
    print_r($row);

        }

//              $aaa = rechercheFmille(13);
        echo '<hr />oki doki <hr />' ;
//        print_r($aaa) ;
?>

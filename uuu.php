< > <?php

        function rechercheFmille($id)
        {
            include_once("$racine/fonction/bdd.php") ;
        
            $req = $bdd->prepare('SELECT * FROM famille WHERE  famille= ? ) VALUES ( :famille ) ';
            
            $req->execute(array(
            'famille' => $id 
            ));
            
            $donnees = $reponse->fetch() ;

        }
?>

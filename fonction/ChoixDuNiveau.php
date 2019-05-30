<?php
//
// dateDeVue = 1 JOUR dans le future niveau == 1 !
//
        $ite = $_COOKIE["serveur"] ;
        $racine = $_COOKIE["racine"] ;

        include("$racine/fonction/bdd.php") ;
  

switch ( $_SESSION['niveau'] )
{ 
    case 1:
            $req = $bdd->prepare('UPDATE cards SET niveau = 2, dateDeVue = DATE_ADD(NOW() , INTERVAL 2 DAY)  WHERE ID = :ID');
    break;
        
    case 2:
            $req = $bdd->prepare('UPDATE cards SET niveau = 3, dateDeVue = DATE_ADD(NOW() , INTERVAL 4 DAY)  WHERE ID = :ID');
    break;
        
    case 3:
            $req = $bdd->prepare('UPDATE cards SET niveau = 4, dateDeVue = DATE_ADD(NOW() , INTERVAL 1 WEEK )  WHERE ID = :ID');
    break;
        
    case 4:
            $req = $bdd->prepare('UPDATE cards SET niveau = 5, dateDeVue = DATE_ADD(NOW() , INTERVAL 2 WEEK )  WHERE ID = :ID');
    break;
        
    case 5:
            $req = $bdd->prepare('UPDATE cards SET niveau = 6, dateDeVue = DATE_ADD(NOW() , INTERVAL 1 MONTH)  WHERE ID = :ID');
    break;
        
    case 6:
            $req = $bdd->prepare('UPDATE cards SET niveau = 7, dateDeVue = DATE_ADD(NOW() , INTERVAL 2 MONTH)  WHERE ID = :ID');
    break;
        
    case 7:
            $req = $bdd->prepare('UPDATE cards SET niveau = 8, dateDeVue = DATE_ADD(NOW() , INTERVAL 4 MONTH)  WHERE ID = :ID');
    break;
        
    case 8:
            $req = $bdd->prepare('UPDATE cards SET niveau = 9, dateDeVue = DATE_ADD(NOW() , INTERVAL 6 MONTH)  WHERE ID = :ID');
    break;
        
    case 9:
            $req = $bdd->prepare('UPDATE cards SET niveau = 0, dateDeVue = NOW() WHERE ID = :ID');
    break;
        
    
    default:
        echo "<h1 id='erreur'>Désolé, je n'ai pas de message à afficher pour cette note ERREUR DU NIVEAU</h1>";
}
?>

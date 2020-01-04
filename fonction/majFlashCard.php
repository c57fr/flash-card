<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                   RECEPTION DES DONNÉES +  CONNECTION A  LA BDD
//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

session_start();
$racine =  $_SESSION['racine'] ;
require_once( $racine.'/fonction/bdd.php' ) ;
$id = $_GET[ 'id' ] ;
$id = intval( $id ) ;// conversion en numérique
$niveau = $_GET[ 'niveau' ] ;
$niveau = intval( $niveau ) ;// conversion en numérique
$uuu = $_GET[ 'uuu' ] ; //EFFACE-MOI
$validation = $_GET[ 'validation' ] ;
if( @$_SESSION['id'] == $id  )
{
    $_SESSION['erreur']=7;
    include_once( $_SESSION['racine']."/fonction/erreur.php");
    exit() ;
}
else {
    $_SESSION['id'] = $id  ;
}

/*
echo '<h1>'.$_GET[ "niveau" ].'</h1>' ; //EFFACE-MOI
echo '<h1>uuu ='.$uuu.'</h1>' ; //EFFACE-MOI
echo '<h1>'.$_GET[ "niveau" ].'</h1>' ; //EFFACE-MOI
echo '<h1>niveau'.$niveau.'</h1>' ; //EFFACE-MOI
echo '<h1>id'.$id.'</h1>' ; //EFFACE-MOI
*/
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                   SI LE BOUTON ENVOYER EST FAUX     
//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ( $validation == 'faux' ) {
    echo '<h1>La réponse est fause </h1>' ; //EFFACE-MOI

    $iFaux = <<<SiFaux
    UPDATE `cards` SET `niveau`= 1 ,`dateDeVue`= NOW() + INTERVAL 1 DAY WHERE `ID` = $id ;
SiFaux ;
 
    $requete = $iFaux ;//Construction de la requête     
    $reussi = mysqli_query (  $bdd ,  $iFaux ) ;// Execution de la requête 
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                  SI LE BOUTON ENVOYER EST  JUSTE 
//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


elseif ( $validation == 'juste' ) {
    echo '<h1>La réponse est juste </h1>' ; //EFFACE-MOI

    switch ( $niveau ) {
        case 1 :
            $niveau++ ;
            $addJour = 1 ;
            break;
            
        case 2 :
            $niveau++ ;
            $addJour = 2 ;
            break;
            
        case 3 :
            $niveau++ ;
            $addJour = 7 ;
            break;
            
        case 4 :
            $niveau++ ;
            $addJour = 14 ;
            break;
            
        case 5 :
            $niveau++ ;
            $addJour = 21 ;
            break;
            
        case 6 :
            $niveau++ ;
            $addJour = 30 ;
            break;
            
        case 7 :
            $niveau++ ;
            $addJour = 60 ;
            break;
            
        case 8 :
            $niveau++ ;
            $addJour = 90 ;
            break;
            
        case 9 :
            $niveau= 0 ;
            $addJour = 1 ;
            break;
        default:
            # code...
            break;
    }
echo '<h1>addJour = '.$addJour.'</h1>' ; //EFFACE-MOI
echo '<h1>niveau = '.$niveau.'</h1>' ; //EFFACE-MOI

echo '<h1>niveau++ = '.$niveau.'</h1>' ; //EFFACE-MOI
    $ijuste = <<<Sijuste
    UPDATE `cards` SET `niveau`= $niveau ,`dateDeVue`= NOW() + INTERVAL $addJour DAY WHERE `ID` = $id ;
Sijuste ;

    $reussi = mysqli_query (  $bdd ,  $ijuste ) ;// Execution de la requête 
}

?>
<script>
    window.close();
</script>

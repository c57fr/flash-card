<?php
include_once("fonction/racine.php") ;
include_once("$racine/Vue/head.html") ;
require_once("$racine/fonction/bdd.php");
include_once("$racine/Vue/menu.html") ;
// $_SESSION['erreur'] = 0 ; // Défini quel message d'erreur doit etre afficher
// Affichage d'une légende pour l'estetique
function legende($var)
{
    $affichage= <<<aff
<fieldset>
    <legend>$var</legend>
aff ;
    echo $affichage ;
}
@$ection = htmlspecialchars(  $_GET['section'] ) ;
switch( $ection )
{
//**********************************************************************************************************
//          Affichage de la FlashCard
//*********************************************************************************************************    
    case 'affichageFlashCard':
        legende('Affiché une Flash-Card') ;
//        echo '<h1>section = '.$ection.'</h1>'; //Efface-moi
        include_once("$racine/controleur/affichageFlashCard.php") ;
    break ;

//**********************************************************************************************************
//          Creation de la FlashCard
//*********************************************************************************************************
    case 'creationFlashCards':
//        echo '<hr>'.$ection.'<hr>' ; //Efface-moi
        legende('Creation d\'une Flash-Card') ;
        require_once('controleur/creationFlashCards.php');
    break ;

//**********************************************************************************************************
//          Creation d'une Famille
//*********************************************************************************************************
    case 'creationFamille':
        legende('Creation d\'une Famille') ;
        require_once('controleur/creationFamille.php');
    break ;

//**********************************************************************************************************
//          Installation des tables
//*********************************************************************************************************
    case 'installation':
        legende( 'Installation des tables' ) ;// Affichage estetique
//            echo $ref ; //Efface-moi
            echo '<h1>ection = '.$ection.'</h1> '; //Efface-moi
            require_once('controleur/install.php');
        
    break ;
    
//**********************************************************************************************************
//          Action par défaut
//*********************************************************************************************************
    default :
    break ;

//**********************************************************************************************************
//          Fin
//*********************************************************************************************************
}
echo '</fieldset>'."\n<br>" ;// Affichage estetique

@$_SESSION['site'] = $_COOKIE["serveur"] ; //Efface-moi
@$racine = $_COOKIE["racine"] ; //Efface-moi


?>
<!--
$_SESSION['site'] ; //Efface-moi
$_SESSION['racine'] ; //Efface-moi

echo  $_SESSION['site'].'<br>' ; //Efface-moi
echo  $_COOKIE["serveur"] ; //Efface-moi
-->
<?php
include_once("Vue/footer.html") ;
?>
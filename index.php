<?php
include_once("fonction/racine.php") ;
include_once("$racine/Vue/head.html") ;
require_once("$racine/fonction/bdd.php");
include_once("$racine/Vue/menu.html") ;

//
//
//
switch( @$ection = $_GET['section'] )
{
    case 'affichageFlashCard':
        echo '<hr>'.$ection.'<hr>' ; //Efface-moi
    break ;

    case 'creationFlashCards':
        echo '<hr>'.$ection.'<hr>' ; //Efface-moi
    break ;

    case 'installation':
$affichage= <<<aff
<fieldset>
    <legend>ection d'installation des tables'</legend>
aff ;
        echo $affichage ; //Efface-moi
        echo '<hr>'.$ection.'<hr>' ; //Efface-moi
            require_once('controleur/install.php');
        echo '</fieldset>'."\n<br>" ; //Efface-moi
    break ;

    case 'creationFamille':
        if( $_GET['famille'] )
        {
            require_once('fonction/traitementFamille.php');
        }
        else{
            require_once('controleur/creationFamille.php');
        }
        echo '<hr>' ;
//        require_once('controleur/uuu.js');
//        echo '< script type="text/javascript" src="controleur/uuu.js"></>	' ;
    break ;

    default :
    break ;
}

$_SESSION['site'] = $_COOKIE["serveur"] ; //Efface-moi
$racine = $_COOKIE["racine"] ; //Efface-moi



$_SESSION['site'] ; //Efface-moi
$_SESSION['racine'] ; //Efface-moi

echo  $_SESSION['site'].'<br>' ; //Efface-moi
echo  $_COOKIE["serveur"] ; //Efface-moi

include_once("Vue/footer.html") ;
?>
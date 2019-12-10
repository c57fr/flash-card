<?php
include_once("fonction/racine.php") ;
include_once("Vue/head.html") ;
include_once("Vue/menu.html") ;

//
//
//
switch( @$section = $_GET['section'] )
{
    case 'affichageFlashCard':
        echo '<hr>'.$section.'<hr>' ; //Efface-moi
    break ;

    case 'creationFlashCards':
        echo '<hr>'.$section.'<hr>' ; //Efface-moi
    break ;

    case 'creationFamille':
        echo '<hr>'.$section.'<hr>' ; //Efface-moi
        require_once('controleur/creationFamille.php');
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
<?php
session_start();
include_once("../fonction/racine.php") ;
include_once("$racine/Vue/head.html") ;
require_once("$racine/fonction/bdd.php");
require_once("$racine/fonction/objets/objetFamille.php");
//  include_once("$racine/fonction/erreur.php");// Efface-moi

$famille = new famille( $_GET[ 'famille' ] ) ;
$famille -> tropPetit() ;
$famille -> tropGrand() ;
$famille -> existeDeja() ;
//  $famille -> Enregistrement() ;
$_SESSION['erreur']= 0 ;

?>

<div >
<fieldset onclick=javascript:window.close(); >
    <legend>Section de traitement de famille</legend>
    <h1>Cliquer pour férmer l'onglet</h1>


</fieldset>


<?php



include_once("Vue/footer.html") ;

?>
</div>
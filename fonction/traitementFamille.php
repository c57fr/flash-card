<?php
//  session_start(); //efface-moi
include_once("../fonction/racine.php") ;
include_once("$racine/Vue/head.html") ;
require_once("$racine/fonction/bdd.php");
require_once("$racine/fonction/objets/objetFamille.php");
//  include_once("$racine/fonction/erreur.php");// Efface-moi

$famille = new famille( $_GET[ 'famille' ] ) ;
$famille -> tropPetit() ;
$famille -> tropGrand() ;
$famille -> existeDeja( $bdd ) ;
$famille -> enregistreFamille( $bdd ) ;
$_SESSION['erreur']= 0 ;

?>

<div >
<fieldset onclick=javascript:window.close(); >
    <legend>Section de traitement de famille</legend>
    <h1>félicitation la nouvelle famille est enregistrer</h1>
    <h2>Cliquer pour férmer l'onglet</h2>


</fieldset>


<?php



include_once("Vue/footer.html") ;

?>
</div>
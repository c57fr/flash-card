<?php
session_start();
include_once("../fonction/racine.php") ;
include_once("$racine/Vue/head.html") ;
require_once("$racine/fonction/bdd.php");
echo '<h1>racine p1 = '.$racine.'</h1> '; //Efface-moi
require_once("$racine/fonction/objets/objetCard.php");


$_SESSION['familleDefaut'] = $famille = $_POST[ 'famille' ] ;
$question= $_POST[ 'question' ] ;
$reponse= $_POST[ 'reponse' ] ;
$famille = new card( $bdd , $question , $reponse, $famille ) ;
$famille -> enregistrecards() ;
echo '<h1>question = '.$question.'</h1> <pre> '."\n"; //Efface-moi
//  print_r($bdd) ;
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
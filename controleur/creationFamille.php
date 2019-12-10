<fieldset>
    <legend>Section de création de famille</legend>

<?php
//  echo '<hr>'.$section.'<hr>' ; //Efface-moi
@$message= $_GET['famille'] ;


// echo $message ;
// echo $_SESSION['site'] ;
?>
        <p onclick="fermerPopup()">Ferme moi !</p>
< form method="get" action='<?= $_SESSION['site'];?>' target="_blank" >
<form method="get" action='javascript:onclick(controleur/uuu.js)' target="_blank" >
    <input type="hidden" name='section' value="creationFamille">

    <input type="text" name='famille' value="texte quelquonque" minlength=3 maxlength=15 required autofocus>

    <input type="submit" value="Envoyer">
</form>

</fieldset>
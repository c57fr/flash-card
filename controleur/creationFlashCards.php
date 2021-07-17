<?php
require_once("$racine/fonction/objets/constructCard.php");
$famille = card::affMenuDeroulant( $bdd ) ;
//echo  '<h1>racine = '.$racine.'</h1> <pre> '."\n"; //Efface-moi
?>
<form method="post" action='<?= $_SESSION['site'];?>/fonction/traitementFlashCard.php' target="_blank" >


<select id="famille" name="famille" required>
    <option value="">--Veuillez sélectionner une famille--</option>
    
<?php
    foreach ($famille as $key => $value) {
        if( $_SESSION['familleDefaut']-1 == $key )//Se souvient du dernier selectionner et le nome selected
        {
            $selected= 'selected';
        }
        else {
            $selected = '' ;
        }

        $var= <<<menueDeroulant
          <option value='$value[famille]' $selected >$value[name]</option>
menueDeroulant ;
        echo $var."\n" ;
    }
?>
</select>
    <input type="reset" id='Reset' value="Reset">


    <br>
    <textarea name='question'placeholder="Placer votre question ici" spellcheck='false'  minlength=3 maxlength=250 required autofocus rows="5" cols="53"></textarea>
    <br>
    <textarea name='reponse' placeholder="Placer votre réponse ici"  spellcheck='false'   minlength=3 maxlength=250 required  rows="5" cols="53"></textarea>

    <input type="submit" value="Envoyer" class='boutonCreation'>
    
    <input type="reset" id='Reset' value="Reset" class='boutonCreation'>

</form>
<p>% Au début de la réponse , transforme TOUTES les phrases suivantes en listes aléatoire , sauf la 1er ligne</p>

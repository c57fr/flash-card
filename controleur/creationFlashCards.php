<?php
require_once("$racine/fonction/objets/objetCard.php");
$famille = card::affMenuDeroulant( $bdd ) ;
//echo  '<h1>racine = '.$racine.'</h1> <pre> '."\n"; //Efface-moi
?>
<form method="post" action='<?= $_SESSION['site'];?>/fonction/traitementFlashCard.php' target="_blank" >


<select id="famille" name="famille" required>
    <option value="">--Veuillez sélectionner une famille--</option>
    <?php
    if( $_SESSION['familleDefau'] )
    {
        
    }
    ?>
<?php
    foreach ($famille as $key => $value) {
        $var= <<<EOT
          <option value='$value[famille]'>$value[name]</option>
EOT ;
        echo $var."\n" ;
    }
?>
</select>


    <input type="reset" id='Reset' value="Reset">
    <br>
    <textarea name='question'placeholder="Placer votre question ici" spellcheck='false'  minlength=3 maxlength=250 required autofocus>bleurg</textarea>
    <textarea name='reponse' placeholder="Placer votre réponse ici"  spellcheck='false'   minlength=3 maxlength=250 required >bleurg</textarea>

    <input type="submit" value="Envoyer">

</form>
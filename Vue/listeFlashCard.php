
<script type="text/javascript" src="affMasqueFlashCard.js"></script><!-- Encienne version en javascript gardé car on ne sait jamais :-) -->

<?php

$i=0 ;

foreach ($listeFlashCard as $key => $table) {
//    print_r( $table ) ;
?>

<style>

#reponse_<?= $i ?>
{
    display:none;
}

#bouton_<?= $i ?>:checked +  #reponse_<?= $i ?>
{
    display:block;
}
#radio<?= $i ?>:checked +  .masquer
{
    display: block ;
}

</style>

<input type="radio" id="radio<?= $i ?>" name="lesRadios"  class="lesRadios" <?php if($i ==0 ): ?> checked <?php endif ; // si c'est la 1er carte elle s'affiche sinon elle reste caché ?> >
<form method='get' action='http://<?= $ite ?>/fonction/majFlashCard.php' target='_blank'   class='masquer' id='carte_<?= $i ?>'>

    <input type='hidden' name='id' value=' <?= $table['ID'] ?> ' >
    <input type='hidden' name='niveau' value=' <?= $table['niveau'] ?> ' >
<!--    <input type="checkbox" id="bouton_<?= $i ?>" />    EFFACE-MOI -->
                <legend>Question</legend>
                <?= $table['question'] ?>
            </fieldset>  
        </article>
            <label for="bouton_<?= $i ?>"  class="boutonAffReponse" >    
                bouton sur CSS pour Affiché la Réponse 
            </label>
        
        <input type="checkbox" id="bouton_<?= $i ?>" />   
        <article id='reponse_<?= $i ?>' >
            <fieldset>   
                <legend>Réponse</legend>   
                <?= $table['reponse'] ?>
            </fieldset>  

            <input type="submit" name='validation' value='juste' >
            <input type="submit" name='validation' value='faux' >
            <label for="radio<?= ++$i ?>"  class="" >    
                Passer a la flash-card suivante
            </label>
        </article>
        
    </section>
</form>

<?php
}
?>
<!-- <h3 onclick="affMasqueFlashCard( );">Passer a la flash-card suivante</h3> -->
<style>
    #radio<?= $i ?>:checked +  .masquer
    {
        display: block ;
    }
</style>
<input type="radio" id="radio<?= $i ?>" name="lesRadios"  class="lesRadios" >
<div    class='masquer' >
    <h3>Recherché de nouvelles cartes</h3>
    <form action="<?= $_SESSION['site'] ?>" >
        <input type="submit"  >
    </form>
</div>
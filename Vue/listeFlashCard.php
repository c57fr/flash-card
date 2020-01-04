<style>
.masquer
{
    display : none ;
}
#carte_0
{
    display : block ;
}
</style>

<script>
    var i = 0 ;
    function affMasqueFlashCard()
    {

            if ( document.getElementById(  'carte_'+i  ) )
            {
    //        alert( 'flashCard_'+i );
            document.getElementById( 'carte_'+i ).style.display = "none" ;
            i++ ;
            document.getElementById( 'carte_'+i ).style.display = "block" ;
        }
        else{
            window.location.reload() ;
//            alert('Félicitation ! vous avez terminer de testé toutes les flash-cardes du jour !');
        }
    }
</script>


<?php
//  session_start() ; //EFFACE-MOI
//  $reussi = $_SESSION['flashcard'] ; //EFFACE-MOI
$i=0 ;

foreach ($listeFlashCard as $key => $table) {
//    print_r( $table ) ;
?>

<form method='get' action='http://<?= $ite ?>/fonction/majFlashCard.php' target='_blank'   class='masquer' id='carte_<?= $i ?>'>

    <input type='text' name='id' value=' <?= $table['ID'] ?> ' >
    <input type='hidden' name='id' value=' <?= $table['ID'] ?> ' >
    <input type='hidden' name='niveau' value=' <?= $table['niveau'] ?> ' >
    <input type='texte' name='uuu' value=' bleurg' >

    <section >
        <h2>ID = <?= $table['ID'] ?> </h2>
        <h2>famille = <?= $table['famille'] ?> </h2>
        <article class='question'>
            <fieldset>
                <legend>Question</legend>
                <?= $table['question'] ?>
            </fieldset>  
        </article>

        <div class='affReponse' >
            <p>Affiché la réponse</p>
        </div>

        <article class='reponse_<?= $i ?>' >
            <fieldset>   
                <legend>Réponse</legend>   
                <?= $table['reponse'] ?>
            </fieldset>  

            <input type="submit" name='validation' value='juste' >
            <input type="submit" name='validation' value='faux' >
        </article>
        
    </section>
</form>

<?php
$i++ ;
}
?>
<h3 onclick="affMasqueFlashCard( );">Passer a la flash-card suivante</h3>
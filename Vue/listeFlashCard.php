<?php
//  session_start() ; //EFFACE-MOI
//  $reussi = $_SESSION['flashcard'] ; //EFFACE-MOI
$i=0 ;

foreach ($listeFlashCard as $key => $table) {
//    print_r( $table ) ;
?>

<form method='POST' action target='_blank' >

<input type='hidden' name='id' value=' <?= $table['ID'] ?> ' >
<input type='hidden' name='niveau' value=' <?= $table['niveau'] ?> ' >

<section  id='carte_<?= $i ?>' >
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

        <input type="submit" name='reponse' value='juste' >
        <input type="submit" name='reponse' value='faux' >
    </article>
    
</section>
</form>
<?php
$i++ ;
}
?>
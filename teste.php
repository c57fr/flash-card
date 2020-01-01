<?php
function FlashCard()
{
    for ($i=0; $i < 25 ; $i++) { 
//        $ii = $i+= 1 ;
        $texte = <<<texte
            <style>
            #flashCard_$i
            {
                display: none ;
            }
            </style>
            <section id='flashCard_$i'>
                <article>
                    <p>id =  $i </p>
                    <p>question =  la question </p>
                    <p id='reponse_$i' >reponse =  la reponse </p>
                    <form mehod='POST' action >
                    <!--<   <input type='submit' name='vrai' value='Raiponse Juste'> -->
                    <!-- <input type='submit' name='faux' value='Raiponse Fausse'> -->
                    </form>
                </article>
                <button onclick="affMasqueFlashCard( );">Passer a la flash-card suivante</button>
            </section>
        
        texte ;
        echo $texte;
    }
}
?>

<html>
<head>
    <title>getElementById example</title>
</head>
<body>
    <script>
        
        var i = 0 ;
        function affMasqueFlashCard()
        {
            alert( 'flashCard_'+i );
            document.getElementById( 'flashCard_'+i ).style.display = "none" ;
            i++ ;
            document.getElementById( 'flashCard_'+i ).style.display = "block" ;
        }
    </script>
<?php FlashCard() ?>

<style>
        #flashCard_0
        {
            display: block ;
        }
    </style>
<!-- button onclick="affMasqueFlashCard('flashCard_1');"> affMasqueFlashCard </button -->

</body>
</html>

<form method="post" action='<?= $_SESSION['site'];?>/fonction/traitementFlashCard.php' target="_blank" >

    <textarea name='question' minlength=3 maxlength=250 required autofocus>bleurg</textarea>
    <textarea name='reponse'  minlength=3 maxlength=250 required >bleurg</textarea>

    <input type="submit" value="Envoyer">
    <br>
    <input type="reset" id='Reset' value="Reset">

</form>
<form method="get" action='<?= $_SESSION['site'];?>/fonction/traitementFamille.php' target="_blank" >

    <input type="text" name='famille' placeholder="Le nom du nouveau sujet" minlength=3 maxlength=15 required autofocus>

    <input type="submit" value="Envoyer">
    <br>
    <input type="reset" id='Reset' value="Reset">

</form>
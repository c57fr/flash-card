<hr />
<?php
    function afficheFamilleDeroulant()
    {
        
$ite = $_COOKIE["SERVEUR"] ;
$racine = $_COOKIE["racine"] ;
        
        include_once("$racine/fonction/bdd.php") ;
        
        $reponse = $bdd->query('SELECT name FROM famille ');
        
        $donnees = $reponse->fetch() ;
        $i=0;
?>

<select name="Famille" >



<option value="">Aucun</option>
    
<?php
while($donnees = $reponse->fetch() )
        {?> 
<option value="<?php echo $donnees[$i] ; ?>"><?php echo $donnees[$i] ; ?></option>
    <?php
            echo '<div class="famille">'.$donnees[$i].'</div>'; 
            $i+1;
        }

?>
    
    
</select>
<hr />

<?php
    }

?>
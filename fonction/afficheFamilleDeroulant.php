<?php
    function afficheFamilleDeroulant()
    {
        
$ite = $_COOKIE["serveur"] ;
$racine = $_COOKIE["racine"] ;
        
        include_once("$racine/fonction/bdd.php") ;
        
        $reponse = $bdd->query('SELECT * FROM famille ');
        
        $donnees = $reponse->fetch() ;
        $i=0;
?>

<select name="Famille" >



<option value="">Aucun</option>
    
<?php
while($donnees = $reponse->fetch() )
        {
//
//  Ce souvient de la famille utiliser dernierement
//    
    if( @$_SESSION['famille']==$donnees[$i] )
    {?>
        <option value="<?php echo $donnees['famille'] ; ?>" selected><?php echo $donnees['name'] ; ?></option>
    <?php }
// FIN    
    ?> 
<option value="<?php echo $donnees['famille'] ; ?>"><?php echo $donnees['name'] ; ?></option>
    <?php
            $i+1;
        }

?>
    
    
</select>
<?php
    }

?>

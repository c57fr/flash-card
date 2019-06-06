<?php
    function afficheFamilleDeroulant()
    {
        
$ite = $_COOKIE["serveur"] ;
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
        {
//
//  Ce souvient de la famille utiliser dernierement
//    
    if( @$_SESSION['famille']==$donnees[$i] )
    {?>
        <option value="<?php echo $donnees['famille'] ; ?>" selected><?php echo $donnees[$i] ; ?></option>
    <?php }
// FIN    
    ?> 
<option value="<?php echo $donnees[5] ; ?>"><?php echo $donnees[5] ; ?></option>
    <?php
            $i+1;
        }

?>
    
    
</select>
<?php
    }

?>

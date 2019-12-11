<?php

$_SESSION['erreur'];// Efface-moi
echo '<h1>erreur= '.$_SESSION['erreur'].'</h1>' ; // Efface-moi

switch ( $_SESSION['erreur'] ) {
    case '0':
        $messageErreur =<<<'Erreur'
         Aucune erreur détécter ! <br>
         Code d'Erreur[ 0 ]
Erreur."\n" ;
        break;

    case ' 1 ':
        $messageErreur =<<<'Erreur'
        La taille du nom de la famille est trop court <br>
        Code d'Erreur[ 1 ]
Erreur."\n" ;
        break;

    case ' 2 ':
        $messageErreur =<<<'Erreur'
        La taille du nom de la famille est trop longue <br>
        Code d'Erreur[ 2 ]
Erreur."\n" ;
        break;

    case ' 3 ':
        $messageErreur =<<<'Erreur'
        Cette famille existe déjà<br>
        Code d'Erreur[ 3 ]
Erreur."\n" ;
        break;

    case ' 4 ':
        $messageErreur =<<<'Erreur'
        Échec de la connexion<br>
        Code d'Erreur[ 4 ]
Erreur."\n" ;
        break;

    case ' _________ ':
        $messageErreur =<<<'Erreur'
        ____________________________________<br>
        Code d'Erreur[ _________ ]
Erreur."\n" ;
        break;

    case ' _________ ':
        $messageErreur =<<<'Erreur'
        ____________________________________<br>
        Code d'Erreur[ _________ ]
Erreur."\n" ;
        break;

    case ' _________ ':
        $messageErreur =<<<'Erreur'
        ____________________________________<br>
        Code d'Erreur[ _________ ]
Erreur."\n" ;
        break;

    case ' _________ ':
        $messageErreur =<<<'Erreur'
        ____________________________________<br>
        Code d'Erreur[ _________ ]
Erreur."\n" ;
        break;

    case ' _________ ':
        $messageErreur =<<<'Erreur'
        ____________________________________<br>
        Code d'Erreur[ _________ ]
Erreur."\n" ;
        break;

    case ' _________ ':
        $messageErreur =<<<'Erreur'
        ____________________________________<br>
        Code d'Erreur[ _________ ]
Erreur."\n" ;
        break;
    
    default:
        $messageErreur = 'Une erreur inconue a ête détécter !' ;
        break;
}


?>

<fieldset onclick=javascript:window.close(); >
    <legend>Message d'Erreur</legend>
    <h1><?= $messageErreur ?></h1>
    <h2>Cliquer pour férmer l'onglet</h2>
</fieldset>

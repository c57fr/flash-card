#              A L'ARRIVER SUR LE SITE
    1. Recherche du chemin absolu du site
    2.Mise en memoire cookie , session
    3.affichage de TOUT les liens dans le menu
    4.affichage d'une jolie image de font
    5.a chaque chargement sur l'acceuil actualiser les cookies + actualiser la session

#               CRÉATION D'UNE FLASH-CARD
##      I-Affichage    
    1.Affichage d'un menu déroulant de toute les familles
    2.Affichage de deux textarea 
    3.Chaque textarea a une etiquette : Question , Réponse
    4.Un boutton d'envoie est visible 
    5.les textarea ne peuvent exeder 255 caractéres
    6.les textarea doivent etre remplie pour validé le formulaire
    7.une famille doit etre selectionner pour envoyer le formulaire
##      II-Envoie du formulaire
    1.Le code est en javascript
    2.Si le formulaire est enregistrer ou pas , une boite de dialogue souvre pour notifier l'utilisateur
    3.Les testes de sécurité :
        *.Qu'il n'y a bien pas moin de 3 caractéres ou pas plus de 255 caractéres 
        *.Désactive les balises spéciale
        *.Qu'il n'existe pas déja
    4.affichage des textarea vides
##      II-Entegistrement de la flash-card
    1.l'ID est automatique
    2.c'est l'ID de la famille et non le nom de la famille enregistrer
    3.La date de vue est du jour
    4.

#       CRÉATION D'UNE FAMILLE
    1.affichage D'un formulaire
    2.affichage d'un boutton
    3.envoie en javascript
    4.Si le formulaire est enregistrer ou pas , une boite de dialogue souvre pour notifier l'utilisateur
    5.si réussi basculement sur la page de création de flash-card
    6.Les testes de sécurité :
        *.Qu'il n'y a bien pas moin de 3 caractéres ou pas plus de 35 caractéres 
        *.Désactive les balises spéciale
        *.Qu'il n'existe pas déja

#       UTILISER UNE CARTE
    1.recherche toutes les cartes qui :
        *.non pas le niveau 0
        *.on une date de vue inférieur a la date du jour
        *.
        *.
        *.
    2.l'affichage et en javascript et html
    3.Sélectionne 15 Id aleatoirement
    4.place dans une bibliotheque
    5.a chaque utilisation efface une des entree de la bibliotheque
    6.Envoie au site l'id + si juste ou si faux

#       INSTALLER LA TABLE
    1.utiliser un fichier install.php
    2.
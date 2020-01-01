###            A L'ARRIVER SUR LE SITE
    1.  Recherche du chemin absolu du site --OK
    2.  Mise en memoire cookie , session --OK
    3.  affichage de TOUT les liens dans le menu --OK
    4.  affichage d'une jolie image de font --OK

###             CRÉATION D'UNE F.C
##      I-Affichage    
    1.Affichage d'un menu déroulant de toute les familles --OK
    2.Affichage de deux textarea    --OK
    3.Chaque textarea a une etiquette : Question , Réponse  --OK
    4.Un boutton d'envoie est visible   --OK
    5.les textarea ne peuvent exeder 255 caractéres --OK
    6.les textarea doivent etre remplie pour validé le formulaire   --OK
    7.une famille doit etre selectionner pour envoyer le formulaire --OK
##      II-Envoie du formulaire
    1.Le code est en javascript --nope
    2.Si le formulaire est enregistrer ou pas , une boite de dialogue souvre pour notifier l'utilisateur    --OK
    3.Les testes de sécurité :
        *.Qu'il n'y a bien pas moin de 3 caractéres ou pas plus de 255 caractéres   --OK
        *.Désactive les balises spéciale    --OK
        *.Qu'il n'existe pas déja   --OK
    4.affichage des textarea vides  --Un bouton fais office

##      III.CRÉATION D'UNE FAMILLE
    1.affichage D'un formulaire --OK
    2.affichage d'un boutton    --OK
    3.envoie en javascript  --nope
    4.Si le formulaire est enregistrer ou pas , une boite de dialogue souvre pour notifier l'utilisateur    --OK
    5.si réussi basculement sur la page de création de F.C   --nope
    6.Les testes de sécurité :
        *.Qu'il n'y a bien pas moin de 3 caractéres ou pas plus de 35 caractéres --OK
        *.Désactive les balises spéciale    --OK

##       IV.AFFICHAGE D'UNE F.C ( methode temporaire )
###     Affiche la totalité sur la page + n'affiche QUE celui testé
    1.mysql envoie 15 F.C + leurs familles
    2.toutes ces F.C sont masqué
    3.chaque F.C a un 'code' unique
    4.css les masques tous et js affiche la  F.C en cour
    5.js n'affiche QUE la question + le bouton pour affiché la réponse
    6.une fois le bouton cliquer , affiche la réponse + la touche 'vrai' et 'faux'
    7.la touche 'faux' envoie l'ID de la F.C + remet le niveau a 1
    8.La touche 'vrais' envoie l'ID de la F.C + ajout 1 au niveau + la 'date de vue ' = la date correspondante du niveau
    9.passe a la question suivante , efface la f.c précédante


##       IV.AFFICHAGE D'UNE F.C ( methode final )
###     sauvegarde dans un cookie
    1.
    2.
    3.
    4.
    5.


    
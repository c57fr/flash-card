var i = 0 ;
    function affMasqueFlashCard()
    {

            if ( document.getElementById(  'carte_'+i  ) )
            {
    //        alert( 'flashCard_'+i );
            document.getElementById( 'carte_'+i ).style.display = "none" ;
            i++ ;
            document.getElementById( 'carte_'+i ).style.display = "block" ;
        }
        else{
            window.location.reload() ;
//            alert('Félicitation ! vous avez terminer de testé toutes les flash-cardes du jour !');
        }
    }
    function old_affReponse()
    {

            if ( document.getElementById(  'carte_'+i  ) )
            {
    //        alert( 'flashCard_'+i );
            document.getElementById( 'carte_'+i ).style.display = "none" ;
            i++ ;
            document.getElementById( 'carte_'+i ).style.display = "block" ;
        }
        else{
            window.location.reload() ;
//            alert('Félicitation ! vous avez terminer de testé toutes les flash-cardes du jour !');
        }
    }
    
    function affReponse()
    {
        document.getElementById( 'reponse_'+i ).style.display = "block" ;
    }

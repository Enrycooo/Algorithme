<?php

    function ajoute_un_vote{
        //prendre un bulletin
        //en ressortir l'information
        //ajouter l'information dans le tableau "résultats"
    }

    while($votes > 0){
        ajoute_un_vote();
    }

    if($mentions_exists){
        while($votes > 0){
            ajoute_un_vote();
            enleve_un_vote_de_la_liste();
        }
    }
    else{
        ajouter_un_vote_blanc();
    }


?>
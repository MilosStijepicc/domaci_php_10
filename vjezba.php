<?php

    function pomnozi($prviBroj, $drugiBroj){
        $proizvod = $prviBroj * $drugiBroj;
        return $proizvod;
    }

    $pomnozeniBrojevi = pomnozi(55,22);
    echo $pomnozeniBrojevi;

    $pomnozeniBrojevi = $pomnozeniBrojevi / 2;
    echo $pomnozeniBrojevi;

?>
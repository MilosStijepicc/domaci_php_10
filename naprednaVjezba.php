<?php

    function racunanjePopusta($cijena){
        $popust = 0.10;
        return $cijena * $popust;
    }

    $brojevi = [250, 330, 1000, 2000, 5000];
    $popusti = [];
    $ukupanPopust = 0;
    foreach($brojevi as $broj){
        $saPopustom = racunanjePopusta($broj);
        array_push($popusti, $saPopustom);
        $ukupanPopust =$ukupanPopust + $saPopustom;
    }

    var_dump($popusti);
    echo "Ukupan popust iznosi: $ukupanPopust";

?>
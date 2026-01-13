<?php

    function izracunajPopust($cijena, $popust){
        $popust = $popust / 100;
        $rezultat = $cijena * $popust;
        return $rezultat;
    }

    $obracunatiPopust = izracunajPopust(1500,22);
    $obracunatiPopust2 = izracunajPopust(2000,10);
    $obracunatiPopust3 = izracunajPopust(3000,15);

    $totalniPopust = $obracunatiPopust + $obracunatiPopust2 + $obracunatiPopust3;
    echo "Ukupno popusta danas bilo je $totalniPopust";

?>
<?php

    function izracunajKamatu($iznosKredita, $godina){
        $kamata=0;
        if($godina < 2000){
            $kamata = 0.05;
        }
        elseif($godina >= 2000 and $godina <= 2010){
            $kamata = 0.05;
        }
        elseif($godina >= 2011 and $godina <= 2020){
            $kamata = 0.1;
        }
        else{
            $kamata = 0.14;
        }

        return $iznosKredita * $kamata;
    }

    $kredit2000 = izracunajKamatu(10000,1999);
    echo $kredit2000;

    $noviKredit = izracunajKamatu(10000, 2023);
    echo $noviKredit;

?>
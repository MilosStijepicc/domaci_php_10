<?php

    

    function izracunajDostavu($cijena, $grad){

        $cijenaDostave = 0;
        $dostava = [
        "Subotica" => 220,
        "Pancevo" => 10,
        "Sarajevo" => 292,
        "Split" => 799,
        "Bijeljina" => 194
        ];

        $gradPostoji = array_key_exists($grad, $dostava);
        if($gradPostoji){
            $rastojanje = $dostava[$grad];
            if($rastojanje <= 100){
                $cijenaDostave = 200;
            }
            elseif($rastojanje > 100 and $rastojanje < 200){
                $cijenaDostave = 350;
            }
            elseif($rastojanje > 200) {
                $cijenaDostave = 500;
            }
        }
        else{
            $cijenaDostave = null;
        }

        return $cijenaDostave;
    }

    $bijeljina = izracunajDostavu(2000,"Bijeljina");
    echo $bijeljina;
    $sarajevo = izracunajDostavu(2000,"Sarajevo");
    echo $sarajevo;
    $cuprija = izracunajDostavu(3000,"Cuprija");
    echo $cuprija;


    //Pokusao sam sam, na pocetku sam odmah zapeo sa array_key_exists, a ovo kasnije logiku mogu da rijesim.
    //Zbunio me prvi unos u funkciju - $cijena - jer se uopste ne iskoristi kao unos, sto znaci da sam mogao
    //da napravim samo function izracunajDostavu($grad){}, i to bi radilom, ali ajde pretvaramo se da je i
    //cijena potrebna za unos :)
    //Bijeljinu sam dodao samo da testiram rastojanje izmedju 100 i 200 :)

?>
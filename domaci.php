<?php

    

    function izracunajDostavu($rastojanje, $grad){

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
    var_dump($cuprija);

?>
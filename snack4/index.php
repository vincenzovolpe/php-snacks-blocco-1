<?php

    $array_numeri_random = [];
    creaArrayRandom($array_numeri_random);
    echo '<pre>'; print_r($array_numeri_random); echo '</pre>';

    function creaArrayRandom(&$array_numeri_random) {
        $a = 0;
        while ($a < 15) {
            $numero = rand(1, 100);
            echo '<br>';
            echo $numero;
            if (!in_array($numero, $array_numeri_random)) {
                array_push($array_numeri_random, $numero);
                $a++;
            } else {
                echo "Numero ".$numero." già presente";
            }
        }
    }

?>

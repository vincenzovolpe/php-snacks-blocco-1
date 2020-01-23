<?php

    $punto = ".";
    $chiocciola = "@";

    $check_nome = strlen($_GET['nome']) > 3;
    $check_email = strpos($_GET['email'], $punto) !== false && strpos($_GET['email'], $chiocciola) !== false;
    $check_numero = (ctype_digit($_GET['eta']) && (int) $_GET['eta'] > 0);


    if ($check_nome && $check_email && $check_numero) {
        echo "Accesso Riuscito";
    } else {
        echo 'Accesso negato';
    }

?>

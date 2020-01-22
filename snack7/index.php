<?php
$classe = [
        [
            'name' => 'Fabio',
            'cognome' => 'Forghieri',
            'voto' => [5,7,8]
        ],

        [
            'name' => 'Roberto',
            'cognome' => 'Marazzini',
            'voto' => [8,7,8]
        ],

        [
            'name' => 'Vincenzo',
            'cognome' => 'Volpe',
            'voto' => [9,9,10]
        ]

];

foreach ($classe as $alunno) {
    echo "Alunno: ".$alunno['name']." ".$alunno['cognome']. " - ";
    $sum = 0;
    foreach ($alunno['voto'] as $value) {
        $sum += $value;
    }
    $media = $sum/3;
    echo "Votazione media: ".$media;
    echo "<br>";
}


?>

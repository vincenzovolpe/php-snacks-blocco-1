<?php
    $post = [
        "10/01/2019" => [
            [
                'titolo' => 'Post 1',
                'autore' => 'Vincenzo Volpe',
                'testo' => 'Testo post 1'
            ],
            [
                'titolo' => 'Post 2',
                'autore' => 'Marco Rossi',
                'testo' => 'Testo post 2'
            ]
        ],
        "10/02/2019" => [
            [
                'titolo' => 'Post 3',
                'autore' => 'Luigi Neri',
                'testo' => 'Testo post 3'
            ]
        ],
        "10/03/2019" => [
            [
                'titolo' => 'Post 4',
                'autore' => 'Paolo Verdi',
                'testo' => 'Testo post 4'
            ],
            [
                'titolo' => 'Post 5',
                'autore' => 'Antonio Bianchi',
                'testo' => 'Testo post 5'
            ],
            [
                'titolo' => 'Post 6',
                'autore' => 'Michele Marrone',
                'testo' => 'Testo post 6'
            ]
        ],
    ];

    foreach ($post as $data => $value) {
        echo $data;
        echo "<br>";
        foreach ($value as $key) {
            echo "<br>";
            foreach ($key as $elemento => $valore) {
                echo $elemento. ": ".$valore;
                echo "<br>";
            }
            /*echo "Titolo: ".$key['titolo']. " "."<br>";
            echo "Autore: ".$key['autore']. " "."<br>";
            echo "Testo: ".$key['testo']. " "."<br>";
            echo "<br>";*/
        }
        echo "<br>";
    }
?>

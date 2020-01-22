<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'

            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snack 6</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <div class="grigio">
                <h1>Teachers</h1>
                <?php
                foreach ($db as $teachers => $value) {
                    if ($teachers == "teachers") {
                        echo "<br>";
                        foreach ($value as $key) {
                            echo "<br>".$key['name']." ".$key['lastname'];
                        }
                        echo "<br>";
                    }
                }?>
            </div>
            <div class="verde">
                <h1>PM</h1>
                <?php
                foreach ($db as $teachers => $value) {
                    if ($teachers == "pm") {
                        echo "<br>";
                        foreach ($value as $key) {
                            echo "<br>".$key['name']." ".$key['lastname'];
                        }
                        echo "<br>";
                    }
                }?>
            </div>
        </div>
    </body>
</html>

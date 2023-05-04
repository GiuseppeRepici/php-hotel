<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div>
        <?php
        echo "<table class='table table-dark table-hover'>";
        echo "<thead>";
        echo "<tr><th>nome</th><th>descrizione</th><th>parcheggi</th><th>voto</th><th>distanza</th></tr>";
        echo "</thead>";
        foreach ($hotels as $hotel) {
            if ($hotel['parking']) {
                $parking = 'disponibile';
            } else {
                $parking = 'Non disponibile';
            }
            echo "<tbody>";
            echo "<td>" . $hotel['name'] . "</td>";
            echo "<td>" . $hotel['description'] . "</td>";
            echo "<td>" . 'parcheggio : ' . $parking . "</td>";
            echo "<td>" . $hotel['vote'] . "</td>";
            echo "<td>" . $hotel['distance_to_center'] . "</td>";
            echo "</tbody>";
        }
        echo "</table>";
        ?>
    </div>
</body>

</html>
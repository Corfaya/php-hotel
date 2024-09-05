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

    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>
    <h1>Hotel</h1>
    <?php foreach($hotels as $hotel) { ?>
        <ul>
            <li>Nome: <?php echo $hotel["name"] ?> </li>
            <li>Descrizione: <?php echo $hotel["description"] ?> </li>
            <li>Parcheggio? <?php echo $hotel["parking"] ? "Parcheggio incluso" : "Parcheggio escluso" ?> </li>
            <li>Voto: <?php echo $hotel["vote"] ?> </li>
            <li>Distanza dal centro: <?php echo $hotel["distance_to_center"] ?> km </li>
        </ul>
        <?php } ?>
</body>
</html>
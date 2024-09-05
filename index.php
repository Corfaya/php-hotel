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
    // creo un array copia degli hotel
    $filtered = $hotels;
    // Se esiste variabile e non è una stringa vuota
    if (isset($_GET["park"]) && $_GET["park"] != "") {
        // creo un array di appoggio
        $new_array = [];
        // Ciclo l'array copia
        foreach($filtered as $element) {
            // verifico che valore di $element["parking"] sia uguale a quello di $_GET["park"]
            if($element["parking"] == $_GET["park"]) {
                // pusho a ogni iterazione nell'array di appoggio i valori richiesti
                $new_array [] = $element;
            }
        }

        // a questo punto, riassegnazione di $filtered: elementi filtrati che si trovano in $new_array
        $filtered = $new_array;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h1 class="text-center fw-bold">Hotels</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5">
                <form action="./index.php" method="GET">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mb-3">Opzioni di filtraggio</h4>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <select name="park" id="park" class="form-control form-control-sm">
                                    <option value="">Opzioni parcheggio</option>
                                    <option value="1" <?php echo $_GET["park"] == 1 ? "selected" : ""; ?>>Parcheggio disponibile</option>
                                    <option value="0" <?php echo $_GET["park"] == 0 ? "selected" : ""; ?>>Parcheggio non disponibile</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-md-4">

                        </div>
                        <div class="col-12 col-md-4">

                        </div> -->
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-success">Applica i filtri</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 mt-5">
            <table class="table table-hover">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Parcheggio</th>
                        <th scope="col">Voto</th>
                        <th scope="col">Distanza dal centro (in km)</th>
                    </tr>
                </thead>
                <?php foreach($hotels as $hotel) { ?>
              <tbody>
            <tr>
              <td><?php echo $hotel["name"] ?></td>
              <td><?php echo $hotel["description"] ?></td>
              <td><?php echo $hotel["parking"] ? "Sì" : "No" ?></td>
              <td><?php echo $hotel["vote"] ?></td>
              <td><?php echo $hotel["distance_to_center"] ?></td>
            </tr>
              </tbody>
              <?php } ?>
            </table>
        </div>
    </div>

</body>
</html>
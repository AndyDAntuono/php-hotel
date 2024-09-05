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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="m-auto">HOTELS</h1>
            <?php foreach($hotels as $hotel) { ?>
                <div class="hotel">
                    <h2><?php echo $hotel['name']; ?></h2>
                    <p><?php echo $hotel['description']; ?></p>
                    <p>Parking: <?php echo $hotel['parking'] ? 'Available' : 'Not Available'; ?></p>
                    <p>Vote: <?php echo $hotel['vote']; ?></p>
                    <p>Distance to center: <?php echo $hotel['distance_to_center']; ?> km</p>
                </div>
            <?php } ?>
        </div> 
    </div>
    <div class="row">
            <!--dal momento che non ho capito come commentare la sezone php di sopra, continuo l'esercizio in una row sottostante, così procedere senza rovinare il lavor fatto fin ora. Quando avrò concluso come si deve la tabella, allora eliminerò la row soprastante e questo commento-->
        <div class="text-center">
            <h1>HOTELS</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $hotel) {?>
                    <tr>
                        <td><?php echo $hotel['name']; ?></td>
                        <td><?php echo $hotel['description']; ?></td>
                        <td><?php echo $hotel['parking'] ? 'Available' : 'Not Available'; ?></td>
                        <td><?php echo $hotel['vote']; ?></td>
                        <td><?php echo $hotel['distance_to_center']; ?> km</td>
                    </tr>
                <?php } ?>
                <tr>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
</body>
</html>
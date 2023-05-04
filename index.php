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

/*   foreach ($hotels as $hotel) {
        foreach ($hotel as $key => $value) {
            var_dump($value);
        }
    } */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container w-50">
        <div class="row py-5 g-4">
            <?php foreach ($hotels as $hotel) : ?>
                <div class="col-4">
                    <div class="card p-4 bg-dark text-light h-100">

                        <?php foreach ($hotel as $key => $value) : ?>

                            <? if ($key == 'name') : ?>

                                <h3><? echo $value ?></h3>

                            <?php else : ?>
                                <p>
                                    <strong> <?php echo $key ?>:</strong>
                                    <?php echo $value; ?>
                                </p>
                            <?php endif ?>

                        <?php endforeach ?>

                    </div>

                </div>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>
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

<?php
    $vote_hotel = $_GET["vote"];
    $parking_hotel = $_GET["parking"] ?? NULL; 
    
    if ($parking_hotel == 'on') {
    $parking_hotel = true;
} else {
    $parking_hotel = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

     <style>
        .card {
            margin: 2em auto 0 !important;

        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center" >Hotel filter</h1>
    <div class="card m-5" style="width: 18rem;";>
<?php

foreach ($hotels as $hotel)
    if($hotel['vote'] >= $vote_hotel && $hotel['parking'] == $parking_hotel ) 
       echo "
    
    <div class='card-body'>
    <h5 class='card-title'>" . $hotel["name"] . "</h5>
    <h6 class= 'card-subtitle mb-2 text-body-secondary'>" . $hotel['vote'] . "</h6>
    <p class= 'card-text'>" . $hotel["description"] . ".</p>
    </div>
    <br>
    ";
?>
</div>
<!-- <pre>
</pre> -->
</div>
</body>
</html>
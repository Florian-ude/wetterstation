<?php
$title = "Wetterstation";

require_once 'location.class.php';

$essen = new Location('Essen', '51.4556432', '7.0115552');
$bochum = new Location('Bochum', '51.4556432', '7.0115552');

$locations = array($essen, $bochum);

//echo '<pre>';
//var_dump($essen);
//var_dump($bochum);
//echo '</pre>';


?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="fontawesome/js/all.js"></script>
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        <div class="card-deck">
            <?php
            foreach ($locations as $location)
            {
                echo '
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-map-marker"></i> ' . $location->getName() . '</h5>
                            <p class="card-text"><?php ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Temperatur:  ' . $location->getTemperature() . ' °C</li>
                            <li class="list-group-item">Wind: ' . $location->getWindSpeed() . ' km/h</li>
                        </ul>
                    </div>
                ';
            }
            ?>
        </div>
    </div>

    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
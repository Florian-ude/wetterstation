<?php

$title = "Wetterstation";
$weather = array();

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.darksky.net/forecast/ddbbda839547d119eeeff74ca6fccedf/51.4556432,7.0115552?lang=de");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$weather = curl_exec($ch);
$weather = json_decode($weather,true);
curl_close($ch);
$temperature = ($weather["currently"]["temperature"]-32)*5/9;
$temperature = round($temperature,2)
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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-map-marker"></i> Essen</h5>
                    <p class="card-text"><?php echo $weather["currently"]["summary"]?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Temperatur: <?php echo $temperature . "°C" ?></li>
                    <li class="list-group-item">Wind: <?php echo $temperature . "°C" ?></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
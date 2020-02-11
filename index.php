<?php
$title = "Wetterstation";
$weather = array();

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.darksky.net/forecast/ddbbda839547d119eeeff74ca6fccedf/51.4556432,7.0115552");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$output = curl_exec($ch);

curl_close($ch);
var_dump($output);
?>
<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

  <title><?php echo $title; ?></title>
  </head>
  <body>
  <h1><?php echo $title; ?></h1>
  <div class="card">
      <div class="card-body">
          <h5 class="card-title">Essen</h5>
          <p class="card-text">Bewölkt</p>
      </div>
  </div>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
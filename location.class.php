<?php

class Location
{
    protected $name;
    protected $latitude;
    protected $longitude;
    protected $weather;

    public function __construct($name, $latitude,$longitude)
    {
        $this->name = $name;
        $this->latitude = $latitude;
        $this->longitude = $longitude;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.darksky.net/forecast/ddbbda839547d119eeeff74ca6fccedf/" . $latitude . "," . $longitude . "?lang=de&units=si");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $weather = curl_exec($ch);
        $this->weather = json_decode($weather,true);
        curl_close($ch);
    }

    public function getName() {
        return $this->name;
    }

    public function getTemperature() {
        $temperature = round($this->weather["currently"]["temperature"], 2);
        return $temperature;
    }

    public function getWindSpeed() {
        $windSpeed = round($this->weather["currently"]["windSpeed"], 2);
        return $windSpeed;
    }
}

?>
<?php

$name = gethostname();

echo $_SERVER['REMOTE_ADDR'];
$lat = $_GET["lat"];
$long = $_GET["long"];
$plat = $_GET["platform"];
$ipaddr = $_GET["ipaddr"];
echo "\nlat is {$lat} and long is {$long} my name is {$name} platform is{$plat}";

$myfile = fopen("locations.json", "w");
$txt = "{" . "\n\"lat\"" . ": {$lat}\n, " . "\"long\"" . ": {$long}, \"machineName\":\"{$name}\",\"platform\":\"{$plat}\",\"ipaddres\":\"{$ipaddr}\"}";
fwrite($myfile, $txt);

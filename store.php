<<?php
$arr = array
(
	array("Call of Duty", "Shooter", 59.95),
	array("Rocket League", "Sport", 19.95),
	array("Assassins Creed", "RP", 49.95),
);
var_dump($arr);
echo "_________________________________________\n";
$avprice = (59.95 + 19.95 + 49.95) / 3;
echo "Gemiddelde prijs: €" . number_format($avprice, 2) . "\n";
$avchar = (strlen("Call of Duty") + strlen("Rocket League") + strlen("Assassins Creed")) / 3;
echo "Gemiddelde lengte van titel: " . number_format($avchar) . " karakters";
?>
<?php

function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'Mi') {
    $theta = $longitude1 - $longitude2;
    $distance = sin(deg2rad($latitude1)) * sin(deg2rad($latitude2)) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta));
    $distance = acos($distance); 
    $distance = rad2deg($distance); 
    $distance = $distance * 60 * 1.1515;
    switch($unit) {
        case 'Mi': break;
        case 'Km' : $distance = $distance * 1.609344;
    }
    return (round($distance,2));
}


function getDistance($latitude1, $longitude1, $latitude2, $longitude2) {
	$earth_radius = 6371;
  	$dLat = deg2rad($latitude2 - $latitude1);
  	$dLon = deg2rad($longitude2 - $longitude1);
  	$a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);
  	$c = 2 * asin(sqrt($a));
  	$d = $earth_radius * $c;
  	return $d;
}
?>

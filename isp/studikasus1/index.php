<?php

require_once 'kubus.php';
require_once 'persegi.php';

$kubus = new Kubus();
$persegi = new Persegi();

// Use Kubus
echo "Kubus Actions:\n";
$kubus->calculateVolume();
$kubus->calculateArea();

echo '<br/>';

// Use Persegi
echo "\nPersegi Actions:\n";
$persegi->calculateArea();

?>
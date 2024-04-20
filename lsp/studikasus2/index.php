<?php

require_once 'mobil.php';
require_once 'mobilListrik.php';

// Create instances of Mobil and MobilListrik
$mobil = new Mobil();
$mobilListrik = new MobilListrik();

// Use Mobil
echo "Mobil Actions:\n";
$mobil->menggunakanBBM();

echo '<br/>';

// Use MobilListrik
echo "\nMobil Listrik Actions:\n";
$mobilListrik->menggunakanBaterai();

?>
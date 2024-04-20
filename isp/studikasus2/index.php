<?php

require_once 'printerFlagship.php';
require_once 'printerEntryLevel.php';
require_once 'printerMidrange.php';

// Create instances of different printers
$printerFlagship = new PrinterFlagship();
$printerEntryLevel = new PrinterEntryLevel();
$printerMidRange = new PrinterMidRange();

// Use PrinterFlagship
echo "Printer Flagship Actions:\n";
$printerFlagship->terimaFax();
$printerFlagship->cetakKertas();
$printerFlagship->scanKertas();

echo '<br/>';

// Use PrinterEntryLevel
echo "\nPrinter Entry Level Actions:\n";
$printerEntryLevel->cetakKertas();

echo '<br/>';

// Use PrinterMidRange
echo "\nPrinter Mid-Range Actions:\n";
$printerMidRange->cetakKertas();
$printerMidRange->scanKertas();

?>
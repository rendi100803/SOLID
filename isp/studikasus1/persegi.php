<?php

require_once 'shape2Dimension.php';

class Persegi implements Shape2Dimension {
    public function calculateArea(): void {
        echo "Calculating area of a square...\n";
    }
}

?>
<?php

require_once 'fiturFax.php';
require_once 'fiturCetak.php';
require_once 'fiturScan.php';

class PrinterFlagship implements FiturFax, FiturCetak, FiturScan {
    public function terimaFax(): void {
        echo "Printer Flagship: Menerima fax...\n";
    }

    public function cetakKertas(): void {
        echo "Printer Flagship: Mencetak kertas...\n";
    }

    public function scanKertas(): void {
        echo "Printer Flagship: Memindai kertas...\n";
    }
}

?>
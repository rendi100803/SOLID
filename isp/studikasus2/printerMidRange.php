<?php

require_once 'fiturCetak.php';
require_once 'fiturScan.php';

class PrinterMidRange implements FiturCetak, FiturScan {
    public function cetakKertas(): void {
        echo "Printer Mid-Range: Mencetak kertas...\n";
    }

    public function scanKertas(): void {
        echo "Printer Mid-Range: Memindai kertas...\n";
    }
}

?>
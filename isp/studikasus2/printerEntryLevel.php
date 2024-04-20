<?php

require_once 'fiturCetak.php';

class PrinterEntryLevel implements FiturCetak {
    public function cetakKertas(): void {
        echo "Printer Entry Level: Mencetak kertas...\n";
    }
}

?>
<?php

require_once '../../lsp/studikasus2/kendaraanBbm.php';

class Mobil implements KendaraanBBM {
    public function menggunakanBBM(): void {
        echo "Mobil menggunakan bahan bakar bensin atau solar.\n";
    }
}

?>
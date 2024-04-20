<?php

require_once 'barangElektronik.php';

class Saklar {
    private $item;
    private $keaktifan = false;

    public function __construct(BarangElektronik $item) {
        $this->item = $item;
    }

    public function berubah(): void {
        if ($this->keaktifan) {
            $this->item->berhenti();
            $this->keaktifan = false;
        } else {
            $this->item->beroperasi();
            $this->keaktifan = true;
        }
    }
}

?>
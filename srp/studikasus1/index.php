<?php

include_once "penghitungPersegi.php";
include_once "persegi.php";

$persegi = new Persegi(10);
$penghitungPersegi = new PenghitungPersegi();

$luas = $penghitungPersegi->hitungLuas($persegi);

echo "Luas Persegi : $luas"; 
<?php

include_once "mahasiswa.php";
include_once "mahasiswaView.php";

$mahasiswa = new Mahasiswa('2205041', 'Fitriyani');
$mahasiswaView = new MahasiswaView();

$mahasiswaView->showMahasiswa($mahasiswa);
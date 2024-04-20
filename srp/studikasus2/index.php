<?php

include_once "mahasiswa.php";
include_once "mahasiswaView.php";

$mahasiswa = new Mahasiswa('2205054', 'Rendi Hidayat');
$mahasiswaView = new MahasiswaView();

$mahasiswaView->showMahasiswa($mahasiswa);

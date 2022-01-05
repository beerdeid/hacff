<?php
require 'versi.php';
require 'functions.php';

// Link Config
$fileff = 'Config Antena Tangan + suplay FF v'.$versiff.' by (BeerdeMods).zip';
$fileffmax = 'Config Antena Tangan + suplay FFMAX v'.$versiffmax.' by (BeerdeMods).zip';

// Ukuran File
$ukurancff = filesize($fileff);
$ukurancffmax = filesize($fileffmax);

// Output File Size
$outputcff = convert_filesize($ukurancff);
$outputcffmax = convert_filesize($ukurancffmax);

// Databases
$bases = [
    [
      "gambar" => "assets/img/screenshot/1.jpg",
      "apk" => "FreeFire",
      "versi" => $versiff,
      "status" => "https://shields.io/badge/update-success-success?style=flat",
      "developer" => "(BeerdeMods)",
      "kategori" => "Config - antena tangan - FF",
      "item" => "Data Config + Data Original",
      "ukuran" => $outputcff,
      "jalur" => "storage/emulated/0/Android/data",
      "href" => $fileff,
      "button" => "pencet1"
    ],
    [
      "gambar" => "assets/img/screenshot/2.jpg",
      "apk" => "FreeFire MAX",
      "versi" => $versiffmax,
      "status" => "https://shields.io/badge/update-success-success?style=flat",
      "developer" => "(BeerdeMods)",
      "kategori" => "Config - antena tangan - FF MAX",
      "item" => "Data Config + Data Original",
      "ukuran" => $outputcffmax,
      "jalur" => "storage/emulated/0/Android/data",
      "href" => $fileffmax,
      "button" => "pencet2"
    ]
  ];
?>
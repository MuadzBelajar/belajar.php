<?php
$arrayMultidimensi = [ // menyimpan array di dalam array
["judul" => "Laskar Pelangi", "penulis" => "Andrea Hirata", "tahun" => 2020],
["judul" => "Bumi Manusia", "penulis" => "Azzam Fulan", "tahun" => 2020]
];

$string = "String";
$integer = 1;

foreach($arrayMultidimensi as $buku) {
    echo "judul: " . $buku['judul'] . "\n";
    echo "tahun: " . $buku['tahun'] . "\n";
    echo "penulis " . $buku['penulis'] . "\n";
}

// echo "$arrayMultidimensi";

// UI
// BUKU = "judul" => "Laskar Pelangi"
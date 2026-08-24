<?php

// Switch Case

$buku = "Novel";

switch ($buku) {
    case "Mapel":
        echo "\n Ini adalah Buku mapel";
        break; // menandakan fungsi sebelum ini agar berakhir
    case "Komik":
        echo "\n Ini adalah Buku Komik";
        break;
    case "Novel":
        echo "\n Ini adalah buku novel";
        break;
    default:
        echo "\<nav></nav>Buku tidak ditemukan";
}


$nilaiEl = 80;
$kkm = 75;
$hasil = "true";

switch ($nilaiEl >= $kkm) {
    case true:
        echo "\n El dinyatakan Lulus";
        break;
    case false:
        echo "\n El Tetap semangat";
        break;
    default:
        echo "\n Hasil tidak ditemukan";
        break;
}
// lebih ringan di memori php, lebih mudah dibaca developer`


//match

$class = 'lg';

$result = match ($class) {
    'sm' => "Small",
    'lg' => "Large/Besar",
    'xl' => "Extra Large/Besar",
    'xxl' => "Super Extra Large",
    default => "Mismatch Ukuran"
};

$status = 404;
$webResult = match ($status) {
    200 => "Sukses",
    404 => "Halaman Tidak Ditemukan",
    500 => "Internal Server Error",
    default => "System Eror"
};

echo $result;
echo $webResult;
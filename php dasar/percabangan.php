<?php

$nilaiAhmad = 85;
$kkm = 85;

// Operator Perbandingan dan Logika
// >= -> lebih be sar sama dengan, 85 seterusnya
// > -> lebih besar dari, 86 seterusnya
// <= -> lebih kecil sama dengan, 85 84 ke bawah
// < -> lebih kecil dari, 84 83 ke bawah

if ($nilaiAhmad > $kkm) {
    echo "Selamat Ahmad, Anda Lulus";
} else if ($nilaiAhmad == $kkm) {
    echo "Selamat Ahmad, Anda Lulus dengan nilai pas-pasan";
} else {
    echo "Maaf Ahmad, Anda Tidak Lulus";
}


// == -> operator sama, hanya membandingkan nilai/value nya saja
// === -> operator identik, membandingkan nilai dan tipe data    

$nilaiFadli = "85"; // string
$kkm = 85; // integer

if ($nilaiFadli === $kkm) {
    echo "\n Selamat Fadli, Anda Lulus";
} else {
    echo "\n Maaf Fadli, Anda Tidak Lulus";
}


// Tidak Sama dengan (!=) -> membandingkan nilai/value nya saja
// Tidak Identik dengan (!==) -> membandingkan nilai dan tipe data
$nilaiFadli = "85"; // string
$kkm = 85; // integer

$isFadliLulus = $nilaiFadli !== $kkm; // true : 1
$isAhmadLulus = $nilaiAhmad != $kkm; // false : 0 

echo "\n Apakah Fadli Lulus? $isFadliLulus";
echo "\n Apakah Ahmad Lulus? $isAhmadLulus";

// Percabangan
if ($isFadliLulus) {
    echo "\n Maaf Fadli, Anda Tidak Lulus";
} else {
    echo "\n Selamat Fadli, Anda Lulus";
}

// Ternary Operator
$usia = 20;

if ($usia >= 17) {
    echo "\n Bisa buat KPU";
} else {
    echo "\n Kartu Biasa";
}

$isLulus = ($usia >= 17) ? "Bisa Buat KPU" : "Kartu Biasa"; //lebih ringkas
echo "\n ".$isLulus;
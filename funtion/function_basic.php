<?php


// nama fungsi dideklarasikan dengan function kemudian nama fungsinya apa
// () parameter/argumen 
// {} Aksi yang akan dijalankan dari function tersebut
function hitungDenda(int $hariTerlambat)
{
    $dendaPerHari = 500;
    return $hariTerlambat * $dendaPerHari;

    }
// tanda ? didepan parameter itu fungsinya untuk menandakan variabel tersebut bisa null, 
// artinya ?nama sama saja dengan nama = null
function namaLengkap(?string $namaPertama, ?string $namaKedua, ?string $namaKetiga) {
    // return $namaPertama . $namaKedua; // cara lama
    return "$namaPertama $namaKedua $namaKetiga"; // string interpolation
}

echo hitungDenda(3) . "\n";
echo hitungDenda("3") . "\n"; // secara bawaan menkonversi menjadi integer

// echo namaLengkap(namaKedua: "KunSya", namaKetiga: "Fi'i");

// cara pertaman disebut dengan named parameter
echo namaLengkap(namaPertama: "Nu'man", namaKedua: "Nasyar", namaKetiga: null) . "\n";
echo namaLengkap(namaPertama: "Fulan", namaKetiga: "Irsyad", namaKedua: "Ahmad") . "\n";
echo namaLengkap(namaKetiga: "MZ", namaKedua: "Nasyar", namaPertama: "Nu'man") . "\n";


echo namaLengkap("Ahmad", "Dahlan", "Irsyad");
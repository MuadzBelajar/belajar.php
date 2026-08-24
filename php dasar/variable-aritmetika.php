<?php 

// // variabel
// $angka1 = 10;
// $angka2 = 5;

// // Operator Tambah (+)
// $hasilTambah = $angka1 + $angka2;
// echo "Hasil Penjumlahan $angka1 dan $angka2 adalah: $hasilTambah";

// // Operator Kurang (-)
// $hasilKurang = $angka1 - $angka2;
// echo "\n Hasil Pengurangan $angka1 dan $angka2 adalah: $hasilKurang";
// $angka1 = 15;
// echo "\n Hasil Pengurangan $angka1 dan $angka2 adalah: $hasilKurang";

// // Operator Kali (*)
// $angka2 = 10;
// $hasilKali = $angka1 * $angka2;
// echo "\n Hasil Perkalian $angka1 dan $angka2 adalah: $hasilKali";

// // Operator Bagi (/)
// $angka1 = 2;
// $hasilBagi = $angka2 / $angka1; // 10 / 2 = 5
// echo "\n Hasil Pembagian $angka1 dan $angka2 adalah: $hasilBagi";

// // Operator Modulus - Sisa hasil bagi (%)
// $a = 3;
// $b = 17;
// $hasilModulus = $b % $a; // 17 % 3 = 2
// echo "\n Hasil Modulus $b dan $a adalah: $hasilModulus";


// // Operator Pangkat (**)
// $a = 2;
// $b = 3;
// $hasilPangkat = $a ** $b; // 2 pangkat 3 = 8
// echo "\n Hasil Pangkat $a dan $b adalah: $hasilPangkat";

// Operator .= Menambahkan teks di belakang
$string = "Hello World";
$string .= " and Dream";
$message = "Tagihan anak anda adalah Rp. 100.000";
$final = "$message dan harus dibayar sebelum tanggal 10 Juni 2024"; // cara yang boros
$message .= " dan harus dibayar sebelum tanggal 10 Juni 2024"; // cara terbaik 

// echo "\n $string";
echo "\n $final";
echo "\n $message";
// echo "\n $string2";

// operator += Menjumlahkna angka di belakang
$angka = 20;
// algoritma apapun
$angka = $angka + 10; // sama dengan $angka += 10 : cara yang boros
$angka += 10; // sama dengan $angka = $angka + 10 : cara yang baik

echo "\n $angka \n";
var_dump($angka);

// Operator -= Mengurangi angka di belakang
$angka = 20;
$angka -= 5; // sama dengan $angka = $angka - 5
echo "\n $angka";

// Operator *= Mengalikan angka di belakang
$angka = 20;
$angka *= 5; // sama dengan $angka = $angka * 5
echo "\n $angka";

// Operator /= Membagi angka di belakang
$angka = 20;
$angka /= 5; // sama dengan $angka = $angka / 5
echo "\n $angka";

// Operator Kurung () => memprioritaskan operasi matematika
$hasil = 2 + 3 + 5 + 6 - 8 * 2 / 2 - 5; //3 

$contoh = 3 + 2 * 10 - 6 / 2 + 15;

$contohBaru = (3 + 4) * 10 - (6 / 2) + 15; 
// 82, 29
echo "\n $contohBaru";


// Operasi aritmatika memiliki prioritasnya tersndiri:
// Operasi tetap dihitung dari kiri ke kanan, setelah prioritas.
// Prioritas operasi aritmatika:
// 1. Kurung () => memprioritaskan operasi matematika
// 2. Pangkat (**)
// 3. Perkalian (*) dan Pembagian (/) dan Modulus (%)
// 4. Penjumlahan (+) dan Pengurangan (-)


echo "\n $contoh";


?>
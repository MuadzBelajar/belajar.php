<?php

// harus menggunakan camel case untuk nama class
class Buku
{
    // Property
    public string $judul;
    public string $penulis;
    public int $stok;


    public function __construct(string $judul, string $penulis, int $stok)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->stok = $stok;
    }


    // Methods
    public function info()
    {
        // $this -> memanggil property atau method yang ada di dalam sebuah class
        return "$this->judul karya $this->penulis. sisa stok: $this->stok \n";
    }

    public function pinjam()
    {
        if ($this->stok > 0) {
            $this->stok--; // sama aja seperti $this->stok--;
            return "Berhasil dipinjam. Sisa Stok: $this->stok \n";
        }
        return "Stok Habis, Tidak bisa dipinjam \n";
    }

    public function balikin()
    {
        return $this->stok++; // $stok + 1
    }
}


// cetakan buku1 dari class Buku()
// $buku1 = new Buku(); // buat objek dari class buku
// $buku1->judul = "Laskar Pelangi"; // perbarui properti judul
// $buku1->penulis = "Andrea Hirata"; // perbarui properti penulis
// $buku1->stok = 12; // perbarui properti stok
// CARA LAMA KALO TIDAK PAKE CONSTRUCT

// SETELAH PAKAI CONSTRUCT
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 4);
echo $buku1->info();
echo $buku1->pinjam();
echo $buku1->pinjam();
echo $buku1->pinjam();
echo $buku1->pinjam();
echo $buku1->pinjam(); // stok habis
echo $buku1->balikin(); // 1
echo $buku1->info();


$buku2 = new Buku("Bumi Manusia", "Pramoedea Ananta Noer", 9);
// $buku2->judul = "Bumi Manusia";
// $buku2->penulis = "Pramodea Ananta Noer";
// $buku2->stok = 9;


echo "\n"; // terminal
echo "<br>"; // client side (HTML)
echo $buku2->info();

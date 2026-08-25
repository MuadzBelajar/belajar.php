<?php

class Koleksi
{
    protected string $judul;
    protected int $stok;
    protected bool $isTersedia;

    public function __construct(string $judul, int $stok, bool $isTersedia)
    {
        $this->judul = $judul;
        $this->stok = $stok;
        $this->isTersedia = $isTersedia;
    }

    public function status()
    {
        return $this->stok > 0 ? $this->isTersedia = true : $this->isTersedia = false;
    }

    // INHERITANCE: KELAS WARISAN yang mewarisi sifat induk classnya
}

class Majalah extends Koleksi
{
    public string $edisi;

    public function __construct(string $judul, int $stok, bool $isTersedia, string $edisi)
    {
        parent::__construct($judul, $stok, $isTersedia);
        $this->edisi = $edisi;
    }

    public function info()
    {
        $isTersedia = $this->isTersedia ? "Majalah Tersedia" : "Majalah Tidak Tersedia";
        return "$this->judul Edisi $this->edisi $isTersedia \n";
    }
}

$majalah = new Majalah("Tempoe", 3, true, "Agustus 2026");
$majalah2 = new Majalah("El-Fatha", 0, false, "Maret 2020");

echo $majalah->info();
echo $majalah2->info();


// VISIBILIY PROPERTY
// 1. public -> bisa diakses darimana saja
// 2. protected -> hanya bisa diakses dari class nya saja dan class pewarisannya
// 3. private -> hanya bisa diakses oleh class nya saja

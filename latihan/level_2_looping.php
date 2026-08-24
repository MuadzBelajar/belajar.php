<?php
$perpustakaan = [
    ["judul" => "Laskar Pelangi", "penulis" => "Andrea Hirata", "stok" => 12],
    ["judul" => "Bumi Manusia", "penulis" => "Pramoedya A.T.", "stok" => 5],
    ["judul" => "Negeri 5 Menara", "penulis" => "A. Fuadi", "stok" => 0],
];

$total_stok = 0;

echo "<ul>";
foreach ($perpustakaan as $buku) {
    $total_stok += $buku['stok'];
    
    if ($buku['stok'] > 0) {
        echo "<li>" . $buku['judul'] . " — Penulis: " . $buku['penulis'] . " (Stok: " . $buku['stok'] . ")</li>";
    }
}
echo "</ul>";

echo "<p>Total stok seluruh buku: " . $total_stok . "</p>";
?>

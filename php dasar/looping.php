<?php

for ($i = 5; $i <= 10; $i++) {
    echo "Baris ke-$i\n";
}
// $i = 1; Nilai Awal
// $i <= 10; Syarat dari kondisi nilai, jika terpenuhi (true) maka akan selalu berjalan
// $i++ perubahannya apa

for ($z = 5; $z > 1; $z-- ) {
    echo "Looping ke $z\n";
}


// While

$stok = 5;

while ($stok > 0 ) {
    echo "Buku dipinjam. sisa stok: $stok \n"; // 5 //4 //3 //2 //1
    $stok--; // $stok - 1; $stok++ = $stok + 1
}

?>
<?php

$arrayBooks = [
    0 => "Laskar Pelangi", 
    1 => "Bumi Manusia", 
    2 => "Negeri 5 Menara", 
    3 => "Durusul Lughoh", 
    4 => "Sang Pemimpi", 
    5 => "Tutor MBG"];

// Index nya selalu dimulai dari 0
echo $arrayBooks[0] . "\n";
echo $arrayBooks[5] . "\n";
echo count($arrayBooks) . "\n"; // 6

for ($i = 0; $i < count($arrayBooks); $i++) {
    echo $arrayBooks[$i] . "\n";
}
// $i = 0 → mulai dari index 0
// $i < count($arrayBooks) → selama index masih kurang dari jumlah buku
// $i++ → setiap perulangan, $i bertambah 1

$i = 0;

while ($i < count($arrayBooks)) {
    echo $arrayBooks[$i] . "\n";

    $i++;
}
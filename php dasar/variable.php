<?php

$a = 10;
$b = 5;
$c = $a + $b;

echo $c;
echo "\n";
// echo hasil dari variabel a + b adalah: $c; tidak punya tanda petik
echo "Hasil dari variabel a + b adalah: $c"; // cara terbaik untuk menggabungkan variabel dengan string

echo "\n";

echo "Hasil dari variabel a + b adalah: " . $c; // cara lain untuk menggabungkan variabel dengan string

?>
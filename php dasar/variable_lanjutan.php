<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $buku = "Belajar PHP";
    $halaman = 20;
    $penerbit = "PT. Gramedia"; //string
    $tahun = 2023; //integer
    $is_published = true; //boolean
    $url_gambar = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2wDXfk9-zgVxSk-z-MqjgIA7jwx3fHBZ91J-JWUaPIg&s=10";

    echo "Buku ini berjudul $buku, memiliki halaman sebanyak $halaman, diterbitkan oleh $penerbit pada tahun $tahun";
    echo "<br>";
    echo "Buku " . $buku; // Buku Belajar PHP
    echo "<br>";
    var_dump($buku);
    echo "<br>";
    echo "\n"; //khusus string di terminal
    var_dump($is_published);
    echo "<img src='$url_gambar' alt='Gambar Buku' />";

    echo "<br>";

    //menampilkan kode php di dalam tag html
    echo "<h1 style='color: blue;'>$buku</h1>";

    echo "<br><p>$tahun</p>"
    ?>
</body>

</html>
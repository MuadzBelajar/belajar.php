<?php
$perpustakaan = [
    ["judul" => "Laskar Pelangi", "penulis" => "Andrea Hirata", "tahun" => 2005, "stok" => 12],
    ["judul" => "Bumi Manusia", "penulis" => "Pramoedya A.T.", "tahun" => 1980, "stok" => 5],
    ["judul" => "Negeri 5 Menara", "penulis" => "A. Fuadi", "tahun" => 2009, "stok" => 0],
];

$total_stok = 0;
$jumlah_judul = count($perpustakaan);
$buku_terbanyak = $perpustakaan[0];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Latihan Level 3</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Stok</th>
        </tr>
        <?php 
        $no = 1;
        foreach ($perpustakaan as $buku) {
            $total_stok += $buku['stok'];

            if ($buku['stok'] > $buku_terbanyak['stok']) {
                $buku_terbanyak = $buku;
            }

            $bg_color = ($buku['stok'] == 0) ? 'style="background:#fdd;"' : '';

            echo "<tr $bg_color>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $buku['judul'] . "</td>";
            echo "<td>" . $buku['penulis'] . "</td>";
            echo "<td>" . $buku['tahun'] . "</td>";
            echo "<td>" . $buku['stok'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <ul>
        <li>Jumlah judul: <?php echo $jumlah_judul; ?></li>
        <li>Total stok: <?php echo $total_stok; ?></li>
        <li>Buku dengan stok terbanyak: <?php echo $buku_terbanyak['judul']; ?></li>
    </ul>

</body>
</html>

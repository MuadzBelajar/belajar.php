<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Cari Buku</h4>
    <form action="./cari.php">
        <input type="text" name="kata" placeholder="Masukkan Nama Buku ...">
        <button type="submit">Cari</button>
    </form>

    <?php
    if (isset($_GET['kata'])) { // apakah ada properti kata, atau apakah properti kata punya value?
        $kata = htmlspecialchars($_GET['kata']);
        echo "Kamu mencari $kata";
    }
    ?>
</body>
</html>
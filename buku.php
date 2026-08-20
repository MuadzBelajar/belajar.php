<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e0f2fe 0%, #bae6fd 100%);
            margin: 0;
            padding: 20px;
            color: #1e3a8a;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        .book-card {
            background-color: #ffffff;
            border-radius: 24px;
            box-shadow: 0 15px 30px rgba(56, 189, 248, 0.2);
            padding: 28px;
            max-width: 680px;
            width: 100%;
            border: 4px solid #f0f9ff;
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .book-cover {
            width: 160px;
            height: auto;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
            border: 3px solid #e0f2fe;
            flex-shrink: 0;
        }

        .book-details {
            text-align: left;
            flex-grow: 1;
        }

        .book-title {
            font-size: 20px;
            font-weight: 700;
            color: #0369a1;
            margin: 0 0 4px 0;
            line-height: 1.4;
        }

        .book-author {
            color: #0ea5e9;
            font-weight: 600;
            margin: 0 0 16px 0;
            font-size: 14px;
        }

        .book-info {
            font-size: 14px;
            line-height: 1.6;
            color: #334155;
            background-color: #f8fafc;
            padding: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            border: #bae6fd 2px dashed;
        }

        .book-info strong {
            color: #0284c7;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 18px;
            font-size: 12px;
            font-weight: 700;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-published {
            color: #ffffff;
            background-color: #38bdf8;
            box-shadow: 0 4px 10px rgba(56, 189, 248, 0.4);
        }

        .status-unpublished {
            color: #ffffff;
            background-color: #94a3b8;
        }

        @media (max-width: 550px) {
            .book-card {
                flex-direction: column;
                text-align: center;
            }
            .book-details {
                text-align: center;
            }
            .book-cover {
                width: 150px;
            }
        }
    </style>
</head>
<body>

    <div class="book-card">
        <?php
        $buku = "Langkah Mudah Belajar Pemrograman PHP Menggunakan CodeIgniter 4 Untuk Pemula";
        $halaman = 196;
        $author = "Randi Adrika Putra";
        $penerbit = "Jasakom";
        $tahun = 2020;
        $is_published = 1;
        $gambar_sampul = "https://cdn.gramedia.com/uploads/products/gamp4h-ol-.jpg";

        echo "<img src='$gambar_sampul' alt='Buku $buku' class='book-cover'>";
        
        echo "<div class='book-details'>";
            echo "<h1 class='book-title'>$buku</h1>";
            echo "<p class='book-author'>Oleh: $author</p>";
            echo "<div class='book-info'>";
                echo "Buku <strong>$buku</strong> yang ditulis oleh <strong>$author</strong> diterbitkan oleh <strong>$penerbit</strong> pada tahun <strong>$tahun</strong> dengan ketebalan <strong>$halaman halaman</strong>.";
            echo "</div>";

            if ($is_published) {
                echo "<span class='status-badge status-published'>Sudah Diterbitkan</span>";
            } else {
                echo "<span class='status-badge status-unpublished'>Belum Diterbitkan</span>";
            }
        echo "</div>";
        ?>
    </div>

</body>
</html>

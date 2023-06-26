<!DOCTYPE html>
<html lang="en">
<head>
    <title>Psikes</title>
    <link rel="stylesheet" href="style-home.css">
</head>
<body>

    <div class="main">
        <div class="navbar">

            <div class="menu">
                <ul>
                    <li><a href="home.php">Artikel</a></li>
                    <li><a href="caripsikolog.php">Cari Psikolog</a></li>
                    <li><a href="#">Buku</a></li>
                    <li><a href="tentang-kami.php">Tentang Kami</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            </div>

            <div class="sumbang">
                <a href="#"> <button class="btn">Sumbang Konten</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Psikologi & <span>Kesehatan</span></h1>
            <h4>Sepi</h4>
            <p class="par">Kesepian adalah pengalaman yang amat personal dan sekaligus sebuah fenomena global. <br>
                Sering kita merasa sendiri dan paling menderita dalam kesepian, 
                tapi ternyata kita bersama-sama <br> dalam penderitaan dan kesepian itu. Kesepian sering dipandang 
                sebagai hal memalukan, karena <br> mengakui bahwa kita merasa sepi seolah kita telah gagal sebagai 
                manusia yang kodratnya adalah <br> sebagai makhluk sosial.

            </p>
<button class="cn"><a href="#">Baca Sekarang</a></button>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <br><br>
</body>
</html>
<?php
  // Ambil daftar berita terbaru dari database atau file
  $beritaTerbaru = [
    [
      'judul' => 'Judul Berita 1',
      'isi' => 'Isi Berita 1',
      'tanggal' => '2023-06-06'
    ],
    [
      'judul' => 'Judul Berita 2',
      'isi' => 'Isi Berita 2',
      'tanggal' => '2023-06-05'
    ],
    [
      'judul' => 'Judul Berita 3',
      'isi' => 'Isi Berita 3',
      'tanggal' => '2023-06-04'
    ]
  ];

  // Tampilkan daftar berita terbaru
  foreach ($beritaTerbaru as $berita) {
    echo "<h3>" . $berita['judul'] . "</h3>";
    echo "<p>" . $berita['isi'] . "</p>";
    echo "<p>Tanggal: " . $berita['tanggal'] . "</p>";
    echo "<hr>";
  }
  ?>
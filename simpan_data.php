<!DOCTYPE html>
<html>
<head>
  <title>Tabel Pemesanan</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
    <center>
  <h1>Tabel Pemesanan</h1>
</center>

  <?php
    // Konfigurasi koneksi ke database
    $servername = "localhost";
    $username = "admin";
    $password = "0809";
    $dbname = "akhirpemweb2";

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Memeriksa koneksi
    if ($conn->connect_error) {
      die("Koneksi gagal: " . $conn->connect_error);
    }

    // Menjalankan query untuk mendapatkan data metode pemesanan
    $sql = "SELECT * FROM data_konseling";
    $result = $conn->query($sql);

    // Memeriksa apakah ada data yang ditemukan
    if ($result->num_rows > 0) {
      echo "<table>
              <tr>
                <th>Nomor Telefon</th>
                <th>Nama Lengkap</th>
                <th>Topik Konseling</th>
                <th>Jenis Fasilitas</th>
                <th>Nama Fasilitas</th>
                <th>Jam Konseling</th>
                <th>Tanggal Konseling</th>
                <th>Tarif</th>
              </tr>";

      // Menampilkan data dalam tabel
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["nomor_telefon"] . "</td>
                <td>" . $row["nama_lengkap"] . "</td>
                <td>" . $row["topik_konseling"] . "</td>
                <td>" . $row["jenis_fasilitas"] . "</td>
                <td>" . $row["nama_fasilitas"] . "</td>
                <td>" . $row["jam_konseling"] . "</td>
                <td>" . $row["tanggal_konseling"] . "</td>
                <td>" . $row["tarif"] . "</td>
              </tr>";
      }

      echo "</table>";
    } else {
      echo "Tidak ada data metode pemesanan.";
    }

    // Menutup koneksi
    $conn->close();
  ?>
</body>
</html>

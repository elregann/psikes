<?php
// Konfigurasi koneksi ke database
$host = 'localhost';
$database = 'akhirpemweb2';
$username = 'admin';
$password = '0809';

// Menghubungkan ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi database
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Memeriksa apakah ada permintaan POST dari formulir
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil nilai dari formulir
    $nomorTelefon = $_POST['nomor-telefon'];
    $namaLengkap = $_POST['nama-lengkap'];
    $topikKonseling = $_POST['topik-konseling'];
    $jenisFasilitas = $_POST['jenis-fasilitas'];
    $namaFasilitas = $_POST['nama-fasilitas'];
    $jamKonseling = $_POST['jam-konseling'];
    $tanggalKonseling = $_POST['tanggal-konseling'];
    $tarif = $_POST['tarif'];

    // Menyimpan data ke database
    $sql = "INSERT INTO data_konseling (nomor_telefon, nama_lengkap, topik_konseling, jenis_fasilitas, nama_fasilitas, jam_konseling, tanggal_konseling, tarif)
            VALUES ('$nomorTelefon', '$namaLengkap', '$topikKonseling', '$jenisFasilitas', '$namaFasilitas', '$jamKonseling', '$tanggalKonseling', '$tarif')";

    if (mysqli_query($conn, $sql)) {
        // echo "Data berhasil disimpan ke database.";
        echo "<script>alert('Data berhasil disimpan ke database'); 
                window.location='caripsikolog.php';</script>";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }

    // Menutup koneksi database
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Konseling</title>
  <style>
    body {
      background-color: #1e3555;
      font-family: Arial, sans-serif;
      margin: 0;
      /* padding: 20px; */
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    select {
      width: 97%;
      padding: 10px;
      font-size: 16px;
      border: 2px solid #ccc;
      border-radius: 4px;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #c483e2;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .header {
    background-color: grey;
    color: #ffffff;
    padding: 20px;
    text-align: center;
  }
  /* footer */
  img {
      background-color: grey;
      width: 200px;
      height: 320px;
      margin-top: 40px;
  }

  .bg {
      background-color: grey;
      width: auto;
      height: 300px;
  }

  .menu {
      text-align: auto;
      margin-left: 1200px;
      margin-top: -200px;
  }

  .icon {
      color: #fff;
      text-align: auto;
      margin-left: 1220px;
      margin-top: -170px;
      font-size: 30px;
  }

  .icon a{
    color: #fff;
  }
  
  .tek {
      color: #fff;
      padding-left: 50px;
  }

  .container {
    background-color: #fff;
    border-radius: 10px;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }

  .costom-combobox {
    width: 800px;
  }

  input[type="date"] {
    font-size: 16px;
    font-family: Arial, sans-serif;
  }
  
  </style>
</head>
<body>
  <div class="header">
    <h1>Form Konseling</h1>
  </div>
  <br><br>
  <form class="container" id="konseling-form" action="" method="POST">
    <div class="form-group">
      <label for="nomor-telefon">Nomor Telefon:</label>
      <input type="text" id="nomor-telefon" name="nomor-telefon" required>
    </div>
    <div class="form-group">
      <label for="nama-lengkap">Nama Lengkap:</label>
      <input type="text" id="nama-lengkap" name="nama-lengkap" required>
    </div>
    <div class="form-group">
      <label for="topik-konseling">Topik Konseling:</label>
      <select class="costom-combobox" id="topik-konseling" name="topik-konseling" required>
        <option value="">Pilih topik konseling</option>
        <option value="masalah-karir">Masalah Karir</option>
        <option value="masalah-sosial">Masalah Sosial</option>
        <option value="masalah-keluarga">Masalah Keluarga</option>
        <option value="masalah-pribadi">Masalah Pribadi</option>
      </select>
    </div>
    <div class="form-group">
      <label for="jenis-fasilitas">Jenis Fasilitas:</label>
      <select class="costom-combobox" id="jenis-fasilitas" name="jenis-fasilitas" required>
        <option value="">Pilih jenis fasilitas</option>
        <option value="puskesmas">Puskesmas</option>
        <option value="biro-klinik">Biro/Klinik</option>
        <option value="rumah-sakit">Rumah Sakit</option>
      </select>
    </div>
    <div class="form-group">
      <label for="nama-fasilitas">Nama Fasilitas:</label>
      <select class="costom-combobox" id="nama-fasilitas" name="nama-fasilitas" required>
        <option value="">Pilih nama fasilitas</option>
      </select>
    </div>
    <div class="form-group">
      <label for="jam-konseling">Jam Konseling:</label>
      <input type="text" id="jam-konseling" name="jam-konseling" required>
    </div>
    <div class="form-group">
      <label for="tanggal-konseling">Tanggal Konseling:</label>
      <input type="date" id="tanggal-konseling" name="tanggal-konseling" required>
    </div>
    <div class="form-group">
      <label for="tarif">Tarif:</label>
      <input type="text" id="tarif" name="tarif" readonly>
    </div>
    <button type="submit">Kirim Data</button>
    <!-- <button type="submit">Cetak Form Konseling ke PDF</button> -->

    <!-- form elements here -->   
    <button type="button" onclick="generatePDF()">Cetak Form Konseling ke PDF</button><br><br>
    *Cetak Sebagai Bukti Pemesanan.
  </form>

  <script>
    var jenisFasilitasDropdown = document.getElementById("jenis-fasilitas");
    var namaFasilitasDropdown = document.getElementById("nama-fasilitas");
    var tarifInput = document.getElementById("tarif");

    jenisFasilitasDropdown.addEventListener("change", function() {
      namaFasilitasDropdown.innerHTML = ""; // Reset dropdown options

      var selectedValue = jenisFasilitasDropdown.value;

      if (selectedValue === "puskesmas") {
        var puskesmasOptions = ["Puskesmas 1", "Puskesmas 2", "Puskesmas 3"];
        tarifInput.value = "400000";

        puskesmasOptions.forEach(function(option) {
          var newOption = document.createElement("option");
          newOption.value = option.toLowerCase().replace(/\s/g, "-");
          newOption.text = option;
          namaFasilitasDropdown.add(newOption);
        });
      } else if (selectedValue === "biro-klinik") {
        var biroKlinikOptions = ["Biro/Klinik 1", "Biro/Klinik 2", "Biro/Klinik 3"];
        tarifInput.value = "350000";

        biroKlinikOptions.forEach(function(option) {
          var newOption = document.createElement("option");
          newOption.value = option.toLowerCase().replace(/\s/g, "-");
          newOption.text = option;
          namaFasilitasDropdown.add(newOption);
        });
      } else if (selectedValue === "rumah-sakit") {
        var rumahSakitOptions = ["Rumah Sakit 1", "Rumah Sakit 2", "Rumah Sakit 3"];
        tarifInput.value = "500000";

        rumahSakitOptions.forEach(function(option) {
          var newOption = document.createElement("option");
          newOption.value = option.toLowerCase().replace(/\s/g, "-");
          newOption.text = option;
          namaFasilitasDropdown.add(newOption);
        });
      }
    });
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>
  <script>
    function generatePDF() {
      const nomorTelefon = document.getElementById("nomor-telefon").value;
      const namaLengkap = document.getElementById("nama-lengkap").value;
      const topikKonseling = document.getElementById("topik-konseling").value;
      const jenisFasilitas = document.getElementById("jenis-fasilitas").value;
      const namaFasilitas = document.getElementById("nama-fasilitas").value;
      const jamKonseling = document.getElementById("jam-konseling").value;
      const currentDate = new Date().toLocaleDateString();
      // const currentDate = new Date().toLocaleDateString();
      const tarif = document.getElementById("tarif").value;

      const docDefinition = {
        content: [
          { text: 'Form Konseling', style: 'header' },
          {
            style: 'tableExample',
            table: {
              widths: ['auto', '*'],
              body: [
                ['Nomor Telefon', nomorTelefon],
                ['Nama Lengkap', namaLengkap],
                ['Topik Konseling', topikKonseling],
                ['Jenis Fasilitas', jenisFasilitas],
                ['Nama Fasilitas', namaFasilitas],
                ['Jam Konseling', jamKonseling],
                ['Tanggal', currentDate],
                ['tarif', tarif]
              ]
            },
            margin: [0, 20, 0, 0]
          }
        ],
        styles: {
          header: {
            fontSize: 18,
            bold: true,
            margin: [0, 0, 0, 10]
          },
          tableExample: {
            margin: [0, 5, 0, 15]
          }
        }
      };

      pdfMake.createPdf(docDefinition).download('Form_Konseling.pdf');
    }
  </script>

  <br><br>
  <center class="bg">
  <!-- <img src="saya.jpg" atl="sendiri"> -->
  </center>
            <div>
                <ul class="menu">
                    <li><a href="home.php">Artikel</a></li>
                    <li><a href="caripsikolog.php">Cari Psikolog</a></li>
                    <li><a href="#">Buku</a></li>
                    <li><a href="tentang-kami.php">Tentang Kami</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            </div>
    <div class="icon">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <p class="tek">Psikes adalah organisasi non-profit <br>
    yang ingin mencerahkan pemahaman <br>
    masyarakat Indonesia tentang kesehatan <br>
    mental. Kami percaya bahwa perbuatan <br> 
    kecil mampu hadirkan perubahan besar.
    </p>
    <h1 class="tek">#UnderstandingHuman</h1>
</body>
</html>

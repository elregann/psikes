<!DOCTYPE html>
<html>
<head>
  <title>Data Konseling</title>
</head>
<body>
  <h2>Form Konseling</h2>
  <form method="POST" action="cari.php">
    <input type="text" name="keyword" placeholder="Masukkan kata kunci">
    <input type="submit" value="Cari">
</form><br>
  <table width="1200" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor="grey">
      <th>Nomor Telfon</th>
      <th>Nama Lengkap</th>
      <th>Topik Konseling</th>
      <th>Jenis Fasilitas</th>
      <th>Nama Fasilitas</th>
      <th>Jam Konseling</th>
      <th>Tanggal Konseling</th>
      <th>Tarif</th>
      <th colspan="2">Aksi</th>
    </tr>
    <?php 
                        include 'koneksi.php';
                        
                        $data = mysqli_query($cek,"select * from data_konseling ORDER BY nomor_telefon ASC");
                        while($row = mysqli_fetch_array($data)){
                    ?>
      <tr>
        <td><?php echo $row['nomor_telefon']; ?></td>
        <td><?php echo $row['nama_lengkap']; ?></td>
        <td><?php echo $row['topik_konseling']; ?></td>
        <td><?php echo $row['jenis_fasilitas']; ?></td>
        <td><?php echo $row['nama_fasilitas']; ?></td>
        <td><?php echo $row['jam_konseling']; ?></td>
        <td><?php echo $row['tanggal_konseling']; ?></td>
        <td><?php echo $row['tarif']; ?></td>
        <td><a href='form_edit.php?nomor_telefon=<?php echo $row['nomor_telefon']; ?>'>Edit</a></td>
        <td><a href='delete.php?nomor_telefon=<?php echo $row['nomor_telefon']; ?>' onclick="return confirm('Apakah anda yakin hapus data ini?')">Hapus</a></td>
      </tr>
      <?php 
                    }
                    ?>
  </table>
  <br><br>
  <a href="tampil_data.php">Kembali</a>
  </body>
</html>
<?php
include "koneksi.php";

if(isset($_POST['submit'])) {
    $nomor_telefon = $_POST['nomor_telefon'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $topik_konseling = $_POST['topik_konseling'];
    $jenis_fasilitas = $_POST['jenis_fasilitas'];
    $nama_fasilitas = $_POST['nama_fasilitas'];
    $jam_konseling = $_POST['jam_konseling'];
    $tanggal_konseling = $_POST['tanggal_konseling'];
    $tarif = $_POST['tarif'];

  $sql = "UPDATE data_konseling SET nomor_telefon='$nomor_telefon',nomor_telefon='$nomor_telefon', 
  nama_lengkap='$nama_lengkap', topik_konseling='$topik_konseling', jenis_fasilitas='$jenis_fasilitas', 
  nama_fasilitas='$nama_fasilitas', jam_konseling='$jam_konseling', tanggal_konseling='$tanggal_konseling', tarif='$tarif'
  WHERE nomor_telefon='$nomor_telefon'";
  if(mysqli_query($cek, $sql)){
    header("location:tampil_data.php");
  } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
}

$nomor_telefon = $_GET['nomor_telefon'];
$sql = "SELECT * FROM data_konseling WHERE nomor_telefon='$nomor_telefon'";
$result = mysqli_query($cek, $sql);
$data = mysqli_fetch_assoc($result);

mysqli_close($cek);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <table border="0" width="1200">
            <tr>
                <td width="100" colspan="3"><h1>FORM EDIT DATA KONSELING</h1></td>
            </tr>
            <tr>
                <td width="100" colspan="3"><hr size="2" color="red"></td>
            </tr>
            <tr>
                <td width="100">Nomor Telefon</td>
                <td width="5">:</td>
                <td width="295"><input type="text" value="<?php echo $data['nomor_telefon']; ?>" name="nomor_telefon" readonly></td>
            </tr>
            <tr>
                <td width="100">Nama Lengkap</td>
                <td width="5">:</td>
                <td width="295"><input type="text" value="<?php echo $data['nama_lengkap']; ?>" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td width="100">Topik Konseling</td>
                <td width="5">:</td>
                <td width="295"><input type="text" value="<?php echo $data['topik_konseling']; ?>" name="topik_konseling"></td>
            </tr>
            <tr>
                <td width="100">Jenis Fasilitas</td>
                <td width="5">:</td>
                <td width="295"><input type="text" value="<?php echo $data['jenis_fasilitas']; ?>" name="jenis_fasilitas"></td>
            </tr>
            <tr>
                <td width="100">Nama Fasilitas</td>
                <td width="5">:</td>
                <td width="295"><input type="text" value="<?php echo $data['nama_fasilitas']; ?>" name="nama_fasilitas"></td>
            </tr>
            <tr>
                <td width="100">Jam Konseling</td>
                <td width="5">:</td>
                <td width="295"><input type="text" value="<?php echo $data['jam_konseling']; ?>" name="jam_konseling"></td>
            </tr>
            <tr>
                <td width="100">Tanggal Konseling</td>
                <td width="5">:</td>
                <td width="295"><input type="date" value="<?php echo $data['tanggal_konseling']; ?>" name="tanggal_konseling"></td>
            </tr>
            <tr>
                <td width="100">Tarif</td>
                <td width="5">:</td>
                <td width="295"><input type="text" value="<?php echo $data['tarif']; ?>" name="tarif"></td>
            </tr>
            <tr>
                <td width="100" colspan="3"><hr size="2" color="red"></td>
            </tr>
            <tr>
                <td width="100">&nbsp;</td>
                <td width="5">&nbsp;</td>
                <td width="295"><input type="submit" name="submit" value="EDIT" onclick="return confirm('Apakah anda yakin ingin mengedit data ini?')"></td>
            </tr>
        </table>
    </form>
</body>
</html>
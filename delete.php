<?php
include 'koneksi.php';
extract($_POST);
$nomor_telefon = $_GET['nomor_telefon'];

$query = mysqli_query($cek, "DELETE FROM data_konseling WHERE nomor_telefon='$nomor_telefon'");

header("location:tampil_data.php");

?>
<?php
include "koneksi.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    // cek username
        $query = "SELECT * FROM login WHERE username = '$username'";
        $result = mysqli_query($cek, $query);
        $row = mysqli_fetch_array($result);

    //pilihan akun
        if ($username === $row['username'] && $password === $row['password']) {
            echo "<script>alert('Login Berhasil! Selamat Datang $username :D'); 
                window.location='home.php';</script>";
            exit();
        } else if ($username === 'admin' && $password === 'admin') {
            echo "<script>alert('Login Berhasil! Selamat Datang Admin :D'); 
                window.location='admin.php';</script>";
            exit();
        } else if ($username === $row['username'] && $password != $row['password'] || $username != $row['username'] && $password === $row['password']) {
            echo "<script>alert('Username atau Password Salah, Silahkan Masukkan Ulang Password!');</script>";
        } else if ($username === 'admin' && $password != 'admin' || $username != 'admin' && $password === 'admin') {
            echo "<script>alert('Username atau Password Salah, Silahkan Masukkan Ulang Password!');</script>";
        }   
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Psikes</title>
    <link rel="stylesheet" href="style.css">
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
<!-- /////// -->
        <!-- <div class="search-box">
        <input type="text" class="search-input" placeholder="Search">
        <a href="#" class="search-btn">
            <i class="fas fa-search"></i>
        </a>
        </div><br><br><br> -->
<!-- /////// -->
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
                
                <div class="form">
                    <form action="" method="post">
                        <input type="text" name="username" placeholder="Nama Pengguna">
                        <input type="password" name="password" placeholder="Kata Sandi">
                        <!-- <button class="btnn"><a href="#">Masuk</a></button> -->
                        <input type="submit" name="submit" class="btnn" placeholder="Masuk">
                    </form>
                        
                        <p class="link">Tidak punya akun?<br>
                        <a href="#">Buat akun </a> disini</a></p>
                        <p class="liw">masuk dengan</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
<?php 
include '../koneksi.php';
 

session_start();
 

if($_SESSION['status'] !="login"){
	header("location:../login.php");
}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Dashboard</title>
    <style type="text/css">
        body{
            background: #f8f6f5;
        }
        .p{
          text-align: justify;
        }
        nav{
          background: #596C77;
        }
        </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand">Sistem Informasi Perpustakaan</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav><br><br><br>
<div class="container">
<ul class="nav nav-tabs">
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button" aria-expanded="false">Dashboard</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="index.php">Dashboard</a></li>
      <li><a class="dropdown-item" href="pegawai.php">Data Pegawai</a></li>
      <li><a class="dropdown-item" href="laporanexcel.php">Laporan</a></li>
    </ul>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="data_buku.php" role="button" aria-expanded="false">Data Buku</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="sd.php">SD</a></li>
      <li><a class="dropdown-item" href="smp.php">SMP</a></li>
      <li><a class="dropdown-item" href="sma.php">SMA</a></li>
      <li><a class="dropdown-item" href="umum.php">Umum</a></li>
    </ul>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="data_transaksi.php" role="button" aria-expanded="false">Data Transaksi</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="pinjam.php">Transaksi Peminjaman</a></li>
      <li><a class="dropdown-item" href="kembali.php">Transaksi Pengembalian</a></li>
    </ul>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="logout.php" role="button" aria-expanded="false">Logout</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="logout.php">Logout Sekarang</a></li>
      <li><a class="dropdown-item" href="index.php">Tetap di aplikasi</a></li>
    </ul>
</ul>
</div>
<div class="container"><br>
   <h2><?php echo "Selamat Datang"."&nbsp". $_SESSION['username']."!";?></h2><br><br>
   <h4>Menu Utama</h4><br>
  <div class="row">
  <div class="col-sm-6">
    <div class="card" >
      <div class="card-body">
        <h5 class="card-title">Data Buku SD</h5>
        <p class="card-text">Memuat informasi data buku SD kelas 1 sampai 6 dan total koleksi buku.</p>
        <a href="sd.php" class="btn btn-primary">Klik di Sini</a>
      </div>
    </div>
  </div><br>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Buku SMP</h5>
        <p class="card-text">Memuat informasi data buku SMP kelas 7 sampai 9 dan total koleksi buku</p>
        <a href="smp.php" class="btn btn-primary">Klik di Sini</a>
      </div>
    </div>
  </div>
</div><br><br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Buku SMA</h5>
        <p class="card-text">Memuat informasi data buku SMA jurusan MIPA dan IPS serta total koleksi buku</p>
        <a href="sma.php" class="btn btn-primary">Klik di Sini</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Buku Umum</h5>
        <p class="card-text">Memuat informasi data buku umum dengan dua kategori (Ilmiah dan Nonilmiah) serta total koleksi buku</p>
        <a href="umum.php" class="btn btn-primary">Klik di Sini</a>
      </div>
    </div>
  </div>
</div><br><br>
<div class="row">
  <div class="col-sm-6">
    <div class="card" >
      <div class="card-body">
        <h5 class="card-title">Pedoman Tambah Data Buku</h5>
        <p class="card-text">Informasi cara menambah dan memperbarui data buku untuk SD, SMP, SMA, dan Umum</p>
        <a href="https://drive.google.com/file/d/12GUXBXoj3SLN1EmRd9C3jjqXX0hYNVHc/view?usp=sharing" class="btn btn-primary">Klik di Sini</a>
      </div>
    </div>
  </div><br>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pedoman Peminjaman Buku</h5>
        <p class="card-text">Peraturan peminjaman buku dan tata cara penambahan transaksi pengembalian & peminjaman buku</p>
        <a href="https://drive.google.com/file/d/1wNUtD0kGDwNSs7Ta0c9JJjq52mZ79QPb/view?usp=sharing" class="btn btn-primary">Klik di Sini</a>
      </div>
    </div>
  </div>
</div><br><br><br>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
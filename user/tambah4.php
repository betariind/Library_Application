<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Tambah Data Buku SD</title>
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
      <li><a class="dropdown-item" href="tambah4.php">Tetap di aplikasi</a></li>
    </ul>
</ul>
</div><br>
<div class="container">
<h3>Tambah Data Buku SD kelas 4</h3><br>
<a class="btn btn-warning" href="sd.php"><i class="fa fa-plus"></i> Kembali</a>
<br><br>
    <form method="post" action="tambah_act4.php">
        <table>
            <tr>            
                <td>Kode Buku</td>
                <td><input type="text" name="kode_buku"></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun_terbit"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>       
        </table>
    </form>
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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Data Pegawai Perpustakaan</title>
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
        table{
			width: 100%;
		}
        th{
			background-color: #ffffff;
			text-align: center;
			padding: 5px;
		}
		td{
      background-color: #ffffff;
			text-align: center;
			color: black;
		}
		td:hover {
			color: rgb(252, 252, 252);
			background: rgb(16, 172, 24);
		}
        </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand">Sistem Informasi Perpustakaan</a>
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
      <li><a class="dropdown-item" href="pegawai.php">Tetap di aplikasi</a></li>
    </ul>
</ul>
</div><br>
<div class="container">
<h2>Data Pegawai</h2><br>
<h3>Aktif</h3>
  <a class="btn btn-success" href="tambah16.php"><i class="fa fa-plus"></i> +TAMBAH DATA</a>
    <br/>
    <br/>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>No</th>
            <th>No Pegawai</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Status Pegawai</th>
            <th>Aksi</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbpegawaiaktif");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['no_pegawai']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['umur']; ?></td>
                <td><?php echo $d['status_pegawai']; ?></td>
                <td>
                <a class="btn btn-primary btn-xs btn-flat" href="edit14.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">EDIT</a>
                <a class="btn btn-primary btn-xs btn-flat" href="hapus16.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h3>Keluar</h3>
    <a class="btn btn-success" href="tambah17.php"><i class="fa fa-plus"></i> +TAMBAH DATA</a>
    <br/>
    <br/>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>No</th>
            <th>No Pegawai</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Status Pegawai</th>
            <th>Aksi</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbpegawaikeluar");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['no_pegawai']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['umur']; ?></td>
                <td><?php echo $d['status_pegawai']; ?></td>
                <td>
                <a class="btn btn-primary btn-xs btn-flat" href="hapus17.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
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
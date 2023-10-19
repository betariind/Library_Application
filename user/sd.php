<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Data Buku SD</title>
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
			background: #AC312E;
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
      <li><a class="dropdown-item" href="sd.php">Tetap di aplikasi</a></li>
    </ul>
</ul>
</div><br>
<div class="container">
<h2>Data Buku SD</h2><br>
<div class="col-xs-8">
	<div class="input-group">
		<input name="key" class="form-control" placeholder="Cari Buku SD" type="text" value="">
			<div class="input-group-btn">
				<button type="submit" name="q" class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="Cari"><i class="fa fa-search"></i>Cari</button>
			</div>
	</div>
</div><br>
  <h2>Kelas 1</h2><br>
  <a class="btn btn-success" href="tambah1.php"><i class="fa fa-plus"></i> +TAMBAH BUKU</a>
    <br/>
    <br/>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbsd1");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td>
                    <a class="btn btn-primary btn-xs btn-flat" href="edit1.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">EDIT</a>
                    <a class="btn btn-primary btn-xs btn-flat" href="hapus1.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h2>Kelas 2</h2>
    <a class="btn btn-success" href="tambah2.php"><i class="fa fa-plus"></i> +TAMBAH BUKU</a>
    <br/>
    <br/>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbsd2");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td>
                    <a class="btn btn-primary btn-xs btn-flat" href="edit2.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">EDIT</a>
                    <a class="btn btn-primary btn-xs btn-flat" href="hapus2.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h2>Kelas 3</h2>
    <a class="btn btn-success" href="tambah3.php"><i class="fa fa-plus"></i> +TAMBAH BUKU</a>
    <br/>
    <br/>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbsd3");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td>
                    <a class="btn btn-primary btn-xs btn-flat" href="edit3.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">EDIT</a>
                    <a class="btn btn-primary btn-xs btn-flat" href="hapus3.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h2>Kelas 4</h2>
    <a class="btn btn-success" href="tambah4.php"><i class="fa fa-plus"></i> +TAMBAH BUKU</a>
    <br/>
    <br/>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbsd4");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td>
                <a class="btn btn-primary btn-xs btn-flat" href="edit4.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">EDIT</a>
                    <a class="btn btn-primary btn-xs btn-flat" href="hapus4.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h2>Kelas 5</h2>
    <a class="btn btn-success" href="tambah5.php"><i class="fa fa-plus"></i> +TAMBAH BUKU</a>
    <br/>
    <br/>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbsd5");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td>
                    <a class="btn btn-primary btn-xs btn-flat" href="edit5.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">EDIT</a>
                    <a class="btn btn-primary btn-xs btn-flat" href="hapus5.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h2>Kelas 6</h2>
    <a class="btn btn-success" href="tambah6.php"><i class="fa fa-plus"></i> +TAMBAH BUKU</a>
    <br/>
    <br/>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbsd6");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td>
                  <a class="btn btn-primary btn-xs btn-flat" href="edit6.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">EDIT</a>
                    <a class="btn btn-primary btn-xs btn-flat" href="hapus6.php?id=<?php echo $d['id']; ?>" data-type="edit" data-toogle="tooltip">HAPUS</a>
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
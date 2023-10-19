<?php
// Export Data laporan ke Excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan_data.xls");
?>

<h2>Laporan Data Perpustakaan</h2><br>
<h3>Data Buku SD</h3><br>
  <h4>Kelas 1</h4><br>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
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
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h4>Kelas 2</h4>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
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
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h4>Kelas 3</h4>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
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
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h4>Kelas 4</h4>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
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
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h4>Kelas 5</h4>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
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
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h4>Kelas 6</h4>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
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
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    
    <h3>Data Buku SMP</h3><br>
<h4>Kelas 7</h4><br>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbsmp");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h4>Kelas 8</h4><br>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbsmp2");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h4>Kelas 9</h4><br>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbsmp3");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>

    <h3>Data Buku SMA</h3><br>
<h4>Kelas MIPA</h4><br>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbsmaipa");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br>
    <h4>Kelas IPS</h4><br>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbsmaips");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>

    <h3>Data Buku Umum</h3><br>
<h4>Ilmiah</h4><br>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbilmiah");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h4>Non Ilmiah</h4><br>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>NO</th>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Jumlah</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbnonilmiah");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                <td><?php echo $d['tahun_terbit']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>

    <h3>Data Transaksi</h3><br>
    <h4>Data Pinjam Buku</h4><br>
        <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>No</th>
            <th>No Pinjam</th>
            <th>Nama</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Harus Kembali</th>
            <th>Status</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbpeminjaman");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['no_pinjam']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['judulbuku']; ?></td>
                <td><?php echo $d['tgl_pinjam']; ?></td>
                <td><?php echo $d['tgl_hrs_kembali']; ?></td>
                <td><?php echo $d['status']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>

    <h4>Data Pengembalian Buku</h4><br>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>No</th>
            <th>No Pinjam</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Denda</th>
        </tr>
        <?php 
        
        include 'koneksi.php';
        $no = 1;
        
        $data = mysqli_query($koneksi,"select * from tbpengembalian");

        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['no_pinjam']; ?></td>
                <td><?php echo $d['tgl_pinjam']; ?></td>
                <td><?php echo $d['tgl_kembali']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['status']; ?></td>
                <td><?php echo $d['denda'];?></td>
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>

    <h3>Data Pegawai</h3><br>
<h4>Aktif</h4>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>No</th>
            <th>No Pegawai</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Status Pegawai</th>
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
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
    <h4>Keluar</h4>
    <table class="table table-bordered table-striped dataTable" border="1">
        <tr>
            <th>No</th>
            <th>No Pegawai</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Status Pegawai</th>
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
            </tr>
            <?php 
        }
        ?>
    </table><br><br><br>
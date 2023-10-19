<?php
include 'koneksi.php';

$no_pinjam = $_POST['no_pinjam'];
$nama = $_POST['nama'];
$judulbuku = $_POST['judulbuku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_hrs_kembali = $_POST['tgl_hrs_kembali'];
$status = $_POST["status"];

mysqli_query($koneksi,"insert into tbpeminjaman values('','$no_pinjam','$nama','$judulbuku','$tgl_pinjam','$tgl_hrs_kembali','$status')");
header("location:pinjam.php");

?>
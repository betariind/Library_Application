<?php
include 'koneksi.php';

$no_pinjam = $_POST['no_pinjam'];
$nama = $_POST['nama'];
$judulbuku = $_POST['judulbuku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$status = $_POST["status"];
$denda = $_POST["denda"];

mysqli_query($koneksi,"insert into tbpengembalian values('','$no_pinjam','$nama','$judulbuku','$tgl_pinjam','$tgl_kembali','$status','$denda')");
header("location:kembali.php");

?>
<?php
include 'koneksi.php';

$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi,"insert into tbsd1 values('','$kode_buku','$judul_buku','$penulis','$tahun_terbit','$jumlah')");
header("location:sd.php");

?>
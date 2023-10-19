<?php
include 'koneksi.php';

$id = $_POST['id'];
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi,"update tbsmp2 set kode_buku='$kode_buku', judul_buku='$judul_buku', penulis='$penulis', tahun_terbit='$tahun_terbit', jumlah='$jumlah' where id='$id'");

header("location:smp.php");
?>
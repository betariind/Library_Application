<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from tbpegawaiaktif where id='$id'");

header("location:pegawai.php");
?>
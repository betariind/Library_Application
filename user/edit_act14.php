<?php
include 'koneksi.php';

$id = $_POST['id'];
$no_pegawai = $_POST['no_pegawai'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$status_pegawai = $_POST['status_pegawai'];

mysqli_query($koneksi,"update tbpegawaiaktif set no_pegawai='$no_pegawai', nama='$nama', jenis_kelamin='$jenis_kelamin', umur='$umur', status_pegawai='$status_pegawai' where id='$id'");

header("location:pegawai.php");
?>
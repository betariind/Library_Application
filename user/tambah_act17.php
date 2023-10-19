<?php
include 'koneksi.php';

$no_pegawai = $_POST['no_pegawai'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$status_pegawai = $_POST['status_pegawai'];

mysqli_query($koneksi,"insert into tbpegawaikeluar values('','$no_pegawai','$nama','$jenis_kelamin','$umur','$status_pegawai')");
header("location:pegawai.php");
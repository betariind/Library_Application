<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from tbsmp where id='$id'");

header("location:smp.php");
?>
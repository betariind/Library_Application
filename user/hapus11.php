<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from tbsmaips where id='$id'");

header("location:sma.php");
?>
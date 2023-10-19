<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from tbsd2 where id='$id'");

header("location:sd.php");
?>
<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from tbsd3 where id='$id'");

header("location:sd.php");
?>
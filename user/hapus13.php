<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from tbnonilmiah where id='$id'");

header("location:umum.php");
?>
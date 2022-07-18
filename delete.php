<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from datamhs where id='$id'");
echo "<script>alert('Data telah di Hapus');</script>";
header ("location:data.php");
?>
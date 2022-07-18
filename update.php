<?php
include 'koneksi.php';
$id = $_POST ['id'];
$nama = $_POST ['nama'];
$tl = $_POST ['tl'];
$alamat = $_POST ['alamat'];
mysqli_query($koneksi, "update datamhs set id='$id', nama='$nama', tl='$tl', alamat='$alamat'where id=$id");
echo "<script>alert('Data telah di Update');</script>";
header("location:data.php");
?>
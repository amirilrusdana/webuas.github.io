<?php
include "koneksi.php";

$nama = $_POST ['nama'];
$tl = $_POST ['tl'];
$alamat = $_POST ['alamat'];
mysqli_query ($koneksi, "INSERT INTO datamhs (nama,tl, alamat) VALUES ('$nama', '$tl', '$alamat') ");
header ("location:data.php");
?>

<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_telepon = $_POST['telp'];
$alamat = $_POST['alamat'];

mysqli_query(mysql:$koneksi, query:"INSERT INTO praktek (nama, umur, jenis_kelamin, telp, alamat) values('$nama', '$umur', '$jenis_kelamin', '$nomor_telepon', '$alamat')");

header(header: "location:index.php");
?>
<?php

include 'koneksi.php';


$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$telp = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$data = mysqli_query($koneksi, "UPDATE user SET nama = '$nama', umur = '$umur', jenis_kelamin = '$jenis_kelamin',   telp ='$telp', alamat = '$alamat' where id = '$id'");

header(header: "location: index.php");
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpbimbel";

$koneksi = new mysqli($servername, $username, $password, $database);

if($koneksi->connect_error){
    die("Gagal Terkoneksi" . $koneksi->connect_error);
}

//  echo " Kiw Kiw, Berhasil Terhubung ke Database";

?>
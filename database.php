<?php

include 'koneksi.php';

$database = 'phpbimbel';

// Query = syntak database
if($koneksi->query($create) === true){
    echo "Database $database berhasil dibuat";
}else{
    echo "Gagal membuat Database";
}

$koneksi->close();
?>
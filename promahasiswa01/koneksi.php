<?php
    include("konfigurasi.php");

    $hasil = mysqli_connect(DBHOST, DBUSER, DBPASS);

    if($hasil){
        echo "Koneksi ke MySQL Sukses";
    }else{
        echo "Koneksi ke MySQL Gagal";
    }
   
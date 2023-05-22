<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){

        $tbel = "tbMHS";
        $sql = "CREATE TABLE $tbel(
            id INT UNSIGNED AUTO_INCREMENT Primary Key,
            nama VARCHAR(35),
            NIM VARCHAR(10),
            prodi VARCHAR(25),
            email VARCHAR(225),
        )";
        $hasil = mysqli_query($cnn, $sql);
        if($hasil){
            echo "Pembuatan Tabel " . $tbel . "SUKSES";
         }else{
            echo "Pembuatan Tabel " . $tbel . "GAGAL";
         }
    }else{
        echo "Koneksi ke MySQL Gagal";
    }
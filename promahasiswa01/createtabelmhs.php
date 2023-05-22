<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){

        $tbel = "tbMHS";
        $sql = "CREATE TABLE $tbel(
            id INT UNSIGNED AUTO_INCREMENT Primary Key,
            nama VARCHAR(35),
            NIM VARCHAR(10),
            alamat VARCHAR(255),
            prodi VARCHAR(25),
            jeniskelamin VARCHAR(1)
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
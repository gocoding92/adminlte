<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $nama_toko  = $_POST['nama_toko'];
    $deskripsi  = $_POST['deskripsi'];
    $alamat     = $_POST['alamat'];

    $sql    = "INSERT INTO tbl_toko  (nama_toko, deskripsi, alamat) VALUES ('$nama_toko', '$deskripsi', '$alamat')";
                                
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

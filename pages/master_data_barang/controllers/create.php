<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)){
    $nama_barang       = $_POST['nama_barang'];
    $harga             = $_POST['harga'];
    $qty               = $_POST['qty'];
    $deskripsi         = $_POST['deskripsi'];
    $id_jenis_barang   = $_POST['id_jenis_barang'];

    $sql = "INSERT INTO tbl_barang (nama_barang, harga, qty, deskripsi, id_jenis_barang) 
    VALUES ('$nama_barang', '$harga', '$qty', '$deskripsi', '$id_jenis_barang')";
    
 $query   = mysqli_query($db, $sql);

if ($query) {
header('location: ../index.php');
}


}else{
header('location: ../index.php');
}


?>
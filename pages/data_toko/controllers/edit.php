<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id         = $_POST['id'];
    $nama_toko  = $_POST['nama_toko'];
    $deskripsi  = $_POST['deskripsi'];
    $alamat     = $_POST['alamat'];

    $sql    = "UPDATE tbl_toko  
                                SET nama_toko      = '$nama_toko',
                                    deskripsi      = '$deskripsi',
                                    alamat         = '$alamat'
                                    
                                    WHERE id_toko='$id' ";
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

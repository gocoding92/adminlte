<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_GET['id_rekomendasi_karyawan'])) {
    $id_rekomendasi_karyawan = $_GET['id_rekomendasi_karyawan'];

    $sql    = "UPDATE tbl_hasil_rekomendasi SET delete_at=1 WHERE id_rekomendasi_karyawan='$id_rekomendasi_karyawan' ";
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

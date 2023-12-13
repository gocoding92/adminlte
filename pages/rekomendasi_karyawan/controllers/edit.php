<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id                     = $_POST['id'];
    $id_karyawan            = $_POST['id_karyawan'];
    $periode_bulan          = $_POST['periode_bulan'];
    $periode_tahun          = $_POST['periode_tahun'];

$sql    = "UPDATE tbl_rekomendasi_karyawan
                                            SET id_keryawan         = '$id_karyawan',
                                            periode_bulan           = '$periode_bulan',
                                            periode_tahun           = '$periode_tahun'
                                    
                                            WHERE id_rekomendasi_karyawan='$id' ";
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

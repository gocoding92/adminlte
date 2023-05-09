<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id_kriteria     = $_POST['id_kriteria'];
    $nama_bobot      = $_POST['nama_bobot'];
    $keterangan      = $_POST['keterangan']
    $nilai_bobot     = $_POST['nilai_bobot'];


    $sql    = "INSERT INTO tbl_sub_kriteria (id_kriteria, nama_bobot, keterangan, nilai_bobot) VALUES ('$id_kriteria', '$nama_bobot', '$keterangan', '$nilai_bobot')";
                               
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}
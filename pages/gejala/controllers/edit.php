<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id               = $_POST['id'];
    $id_jenis_tanaman = $_POST['id_jenis_tanaman'];
    $gejala           = $_POST['gejala'];

    $sql    = "UPDATE tbl_gejala 
                                SET id_jenis_tanaman = '$id_jenis_tanaman',
                                    gejala           = '$gejala'
                                    WHERE id_gejala='$id' ";
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

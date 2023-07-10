<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id         = $_POST['id'];
    $id_jenis_tanaman      = $_POST['id_jenis_tanaman'];
    $id_jenis_penyakit     = $_POST['id_jenis_penyakit'];
    $id_gejala             = $_POST['id_gejala'];
    $kultur_teknis         = $_POST['kultur_teknis'];
    $fisik_mekanis         = $_POST['fisik_mekanis'];
    $kimiawi               = $_POST ['kimiawi'];
    $hayati                = $_POST['hayati'];


    $sql    = "UPDATE tbl_diagnosa 
                                SET id_jenis_tanaman          = '$id_jenis_tanaman',
                                    id_jenis_penyakit         = '$id_jenis_penyakit',
                                    id_gejala                 = '$id_gejala',
                                    kultur_teknis             = '$kultur_teknis',
                                    fisik_mekanis             = '$fisik_mekanis',
                                    kimiawi                   = '$kimiawi',
                                    hayati                    = '$hayati'
                                    
                                    WHERE id_diagnosa='$id'";
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

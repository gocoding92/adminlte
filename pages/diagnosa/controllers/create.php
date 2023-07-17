<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id_jenis_tanaman            = $_POST['id_jenis_tanaman'];
    $id_jenis_penyakit           = $_POST['id_jenis_penyakit'];
    $id_gejala                   = $_POST['id_gejala'];
    $kultur_teknis               = $_POST['kultur_teknis'];
    $fisik_mekanis               = $_POST['fisik_mekanis'];
    $kimiawi                     = $_POST['kimiawi'];
    $hayati                      = $_POST['hayati'];


    $sql    = "INSERT INTO tbl_diagnosa (id_jenis_tanaman, id_jenis_penyakit, id_gejala, kultur_teknis, fisik_mekanis, kimiawi, hayati) VALUES ('$id_jenis_tanaman', '$id_jenis_penyakit', '$id_gejala', '$kultur_teknis', '$fisik_mekanis', '$kimiawi', '$hayati')";

    $query  = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    }
} else {
    header('Location: ../index.php');
}

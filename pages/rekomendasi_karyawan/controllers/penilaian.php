<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {

    $id_rekomendasi_karyawan  = (!empty($_GET['rekomendasi_karyawan'])) ? $_GET['rekomendasi_karyawan'] : '';

    include "perhitungan/saw.php";
    // include "perhitungan/wp.php";

    // include "perhitung

    

    exit;

}else{
    header('Location: ../index.php');
}

<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {

    $id_rekomendasi_karyawan  = (!empty($_GET['rekomendasi_karyawan'])) ? $_GET['rekomendasi_karyawan'] : '';

    include "perhitungan/wp.php";
    include "perhitungan/saw.php";

    exit;

}else{
    header('Location: ../index.php');
}

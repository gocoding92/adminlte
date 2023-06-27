<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {

    $id_rekomendasi_karyawan  = (!empty($_GET['rekomendasi_karyawan'])) ? $_GET['rekomendasi_karyawan'] : '';

    include "perhitungan/saw.php";
    
    include "perhitungan/wp.php";

    $periode_bulan = date('m');
    $periode_tahun = date('Y');

    $sql = "INSERT INTO tbl_hasil_rekomendasi (
                                                id_rekomendasi_karyawan,
                                                nama_karyawan_saw, 
                                                nama_karyawan_wp, 
                                                nilai_karyawan_saw, 
                                                nilai_karyawan_wp, 
                                                periode_bulan,
                                                periode_tahun
    ) VALUES ( 
                '$id_rekomendasi_karyawan',
                '$nama_alternatif_saw',
                '$nama_alternatif_wp',
                $nilai_max_saw,
                $nilai_max_wp,
                $periode_bulan,
                $periode_tahun
    )";

    $query  = mysqli_query($db, $sql);

    header('location: ../hasil.php?rekomendasi_karyawan='.$id_rekomendasi_karyawan.' ');

}else{
    header('Location: ../index.php');
}

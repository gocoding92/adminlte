<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    
    $id_rekomendasi_karyawan  = (!empty($_GET['rekomendasi_karyawan'])) ? $_GET['rekomendasi_karyawan'] : '';
    $periode_bulan  = date('m');
    $periode_tahun  = date('Y');
    $alternatif  = $_POST['karyawan'];

    $data_push= array();
    for ($i=0; $i < count($alternatif); $i++) { 
        $sql    = "INSERT INTO tbl_alternatif 
                                        (
                                            id_rekomendasi_karyawan, 
                                            id_karyawan, 
                                            periode_bulan,
                                            periode_tahun
                                        ) 
                                VALUES (
                                        '$id_rekomendasi_karyawan', 
                                        '$alternatif[$i]', 
                                        '$periode_bulan',
                                        '$periode_tahun'
            )";
                                
        $query  = mysqli_query($db, $sql);

        array_push($data_push, $alternatif[$i]);
    }

    if (count($data_push) == count($alternatif)) {
        header('Location: ../penilaian.php?rekomendasi_karyawan='.$id_rekomendasi_karyawan.'');
    }
    
}else{
    header('Location: ../index.php');
}

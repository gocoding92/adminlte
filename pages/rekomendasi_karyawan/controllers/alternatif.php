<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    
    $id_rekomendasi_karyawan  = (!empty($_GET['rekomendasi_karyawan'])) ? $_GET['rekomendasi_karyawan'] : '';
    $periode_bulan  = date('m');
    $periode_tahun  = date('Y');
    $alternatif  = $_POST['karyawan'];

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
    }

    // exit;

    // echo "<pre>";
    // var_dump($alternatif);
    // var_dump($id_rekomendasi_karyawan);
    // exit;

    
    
    // if ($query){
    //     header('Location: ../index.php');
    // }
}else{
    header('Location: ../index.php');
}

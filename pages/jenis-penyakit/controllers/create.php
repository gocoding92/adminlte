<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $code_penyakit       = $_POST['code_penyakit'];
    $jenis_penyakit       = $_POST['jenis_penyakit'];



    $sql    = "INSERT INTO tbl_jenis_penyakit (code_penyakit, Jenis_penyakit) VALUES ('$code_penyakit',Jenis_penyakit')";
                               
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}
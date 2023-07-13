<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $jenis_tanaman = $_POST['jenis_tanaman'];
   


    $sql    = "INSERT INTO tbl_jenis_tanaman (jenis_tanaman) VALUES ('$jenis_tanaman')";
                               
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}
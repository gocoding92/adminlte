<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id_jenis_tanaman = $_POST['id_jenis_tanaman'];
    $gejala           = $_POST['gejala'];


    $sql    = "INSERT INTO tbl_gejala (id_jenis_tanaman, gejala) VALUES ('$id_jenis_tanaman', '$gejala')";
                               
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}
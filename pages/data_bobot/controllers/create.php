<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $nama_bobot = $_POST['nama_bobot'];
    $nilai      = $_POST['nilai'];

    $sql    = "INSERT INTO tbl_bobot (nama_bobot, nilai) VALUES ('$nama_bobot', '$nilai')";

    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

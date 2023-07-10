<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $username       = $_POST['username'];
    $level       = $_POST['level'];
    $nama_lengkap     = $_POST['nama_lengkap'];


    $sql    = "INSERT INTO tbl_users (username, level, nama_lengkap) VALUES ('$username', '$level', '$nama_lengkap')";
                               
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}
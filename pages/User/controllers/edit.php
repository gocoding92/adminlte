<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id         = $_POST['id'];
    $username       = $_POST['username'];
    $level       = $_POST['level'];
    $nama_lengkap     = $_POST['nama_lengkap'];

    $sql    = "UPDATE tbl_users 
                                SET username        = '$username',
                                    level        = '$level',
                                    nama_lengkap      = '$nama_lengkap'

                                    
                                    WHERE id_users='$id' ";
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

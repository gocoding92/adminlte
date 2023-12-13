<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id         = $_POST['id'];
    $nama_bobot = $_POST['nama_bobot'];
    $nilai      = $_POST['nilai'];

    $sql    = "UPDATE tbl_bobot 
                                SET nama_bobot  = '$nama_bobot',
                                    nilai       = '$nilai'
                                    
                                    WHERE id_bobot='$id' ";
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

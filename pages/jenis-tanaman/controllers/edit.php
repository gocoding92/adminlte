<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id            = $_POST['id'];
    $jenis_tanaman = $_POST['jenis_tanaman'];

    

    $sql    = "UPDATE tbl_jenis_tanaman 
                                SET jenis_tanaman = '$jenis_tanaman'
                                    WHERE id_jenis_tanaman='$id'";
    $query  = mysqli_query($db, $sql);

    var_dump($query);
    exit;
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

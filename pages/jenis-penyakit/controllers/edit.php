<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id         = $_POST['id'];
    $code_penyakit       = $_POST['code_penyakit'];
    $jenis_penyakit       = $_POST['jenis_penyakit'];

    $sql    = "UPDATE tbl_jenis_penyakit 
                                SET code_penyakit        = '$code_penyakit',
                                    jenis_penyakit        = '$jenis_penyakit'
                                    
                                    
                                    WHERE id_jenis_penyakit='$id' ";
    $query  = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    }
} else {
    header('Location: ../index.php');
}

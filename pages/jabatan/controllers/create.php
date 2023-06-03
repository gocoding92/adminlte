<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $jabatan    = $_POST["jabatan"];

    $sql    ="INSERT INTO tbl_jabatan (nama_jabatan) VALUES ('$jabatan')";

    $query  = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
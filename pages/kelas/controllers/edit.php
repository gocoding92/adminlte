<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $kelas  = $_POST["kelas"];

    $sql    = "INSERT INTO tbl_kelas (nama_kelas) VALUES ('$kelas')";

    $query  = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
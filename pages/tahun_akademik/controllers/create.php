<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $nama_akademik  = $_POST["tahun_akademik"];

    $sql    = "INSERT INTO tbl_tahun_akademik (nama_akademik) VALUES ('$nama_akademik')";

    $query  = mysqli_query($db, $sql);

    if($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
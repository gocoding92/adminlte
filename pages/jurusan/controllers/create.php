<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $jurusan  = $_POST["jurusan"];

    $sql    = "INSERT INTO tbl_jurusan (nama_jurusan) VALUES ('$jurusan')";

    $query  = mysqli_query($db, $sql);

    if($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
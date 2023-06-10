<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $jurusan  = $_POST["jurusan"];
    $id_jurusan=$_POST["id_jurusan"];

    $sql    = "UPDATE tbl_jurusan SET nama_jurusan='$jurusan' WHERE id_jurusan='$id_jurusan'";

    $query  = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $kelas  = $_POST["kelas"];
    $id_kelas=$_POST["id_kelas"];

    $sql    = "UPDATE tbl_kelas SET nama_kelas='$kelas' WHERE id_kelas='$id_kelas'";

    $query  = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
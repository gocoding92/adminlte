<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $nama_akademik  = $_POST["nama_akademik"];
    $id_tahun_akademik=$_POST["id_tahun_akademik"];

    $sql    = "UPDATE tbl_tahun_akademik SET nama_akademik='$nama_akademik' WHERE id_tahun_akademik='$id_tahun_akademik'";

    $query  = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
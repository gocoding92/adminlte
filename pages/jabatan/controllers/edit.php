<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $nama_jabatan  = $_POST["nama_jabatan"];
    $id_jabatan=$_POST["id_jabatan"];

    $sql    = "UPDATE tbl_jabatan SET nama_jabatan='$nama_jabatan' WHERE id_jabatan='$id_jabatan'";

    $query  = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
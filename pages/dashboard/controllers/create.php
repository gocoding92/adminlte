<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_POST)) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $status = $_POST['status'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO tbl_users (nama, umur, status, tgl_lahir, alamat)
                            VALUES ('$nama', '$umur', '$status', '$tgl_lahir', '$alamat')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
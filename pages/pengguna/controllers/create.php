<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_POST)) {
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $level = $_POST['level'];

    $sql = "INSERT INTO tbl_pengguna (username, nama_lengkap, level)
                    VALUES ('$username', '$nama_lengkap', '$level')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
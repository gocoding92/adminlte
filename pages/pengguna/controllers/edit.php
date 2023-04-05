<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_POST)) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $level = $_POST['level'];

    $sql = "UPDATE tbl_pengguna 
                            SET username = '$username',
                                nama_lengkap = '$nama_lengkap',
                                level = '$level'

                            WHERE id_pengguna = '$id'";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_POST)) {
    $nama_unit = $_POST['nama_unit'];

    $sql = "INSERT INTO tbl_unit (nama_unit)
                    VALUES ('$nama_unit')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
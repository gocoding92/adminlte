<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_POST)) {
    $id = $_POST['id'];
    $nama_unit = $_POST['nama_unit'];

    $sql = "UPDATE tbl_unit 
                            SET nama_unit = '$nama_unit'

                            WHERE id_unit = '$id'";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
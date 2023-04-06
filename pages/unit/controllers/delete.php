<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "UPDATE tbl_unit SET delete_at=1 WHERE id_unit=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
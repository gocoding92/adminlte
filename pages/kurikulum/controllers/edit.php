<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $kurikulum  = $_POST["kurikulum"];
    $id_kurikulum=$_POST["id_kurikulum"];

    $sql    = "UPDATE tbl_kurikulum SET nama_kurikulum='$kurikulum' WHERE id_kurikulum='$id_kurikulum'";

    $query  = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
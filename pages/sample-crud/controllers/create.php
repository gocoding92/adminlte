<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $kurikulum  = $_POST["kurikulum"];

    $sql    = "INSERT INTO tbl_kurikulum (nama_kurikulum) VALUES ('$kurikulum')";

    $query  = mysqli_query($db, $sql);

    if($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
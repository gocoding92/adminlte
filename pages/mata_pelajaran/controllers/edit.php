<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $mata_pelajaran  = $_POST["mata_pelajaran"];
    $id_mata_pelajaran=$_POST["id_mata_pelajaran"];

    $sql    = "UPDATE tbl_mata_pelajaran SET nama_mata_pelajaran='$mata_pelajaran' WHERE id_mata_pelajaran='$id_mata_pelajaran'";

    $query  = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
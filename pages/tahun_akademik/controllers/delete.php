<?php
include '../../../config/koneksi/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql    ="UPDATE tbl_tahun_akademik SET deleted_at=1 WHERE id_tahun_akademik=$id ";
    $query  = mysqli_query($db, $sql);

    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}
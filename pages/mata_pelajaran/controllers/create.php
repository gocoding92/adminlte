<?php

include '../../../config/koneksi/koneksi.php';

if(isset($_POST)) {
    $mata_pelajaran =$_POST["mata_pelajaran"];

    $sql    ="INSERT INTO tbl_mata_pelajaran (nama_mata_pelajaran) VALUES ('$mata_pelajaran')";

    $query  = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}
<?php
include '../../../config/koneksi/koneksi.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql    ="UPDATE tbl_jurusan SET deleted_at=1 WHERE id_jurusan=$id ";
    $query  = mysqli_query($db, $sql);

    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}
<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_POST)) {
    $code_diagnosa = $_POST['code_diagnosa'];
    $nama_diagnosa = $_POST['nama_diagnosa'];
    
    $sql = "INSERT INTO tbl_diagnosa (code_diagnosa, nama_diagnosa)
                            VALUES ('$code_diagnosa', '$nama_diagnosa')";
                                
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
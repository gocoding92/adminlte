<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_POST)) {
    $id = $_POST['id'];
    $code_diagnosa = $_POST['code_diagnosa'];
    $nama_diagnosa = $_POST['nama_diagnosa'];
    
    $sql = "UPDATE tbl_diagnosa 
                            SET code_diagnosa = '$code_diagnosa',
                                nama_diagnosa = '$nama_diagnosa'
                                
                            WHERE id_diagnosa = '$id'";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)){
    $id                 = $_POST['id'];
    $nama_jenis         = $_POST['nama_jenis'];

    $sql = "UPDATE tbl_jenis_barang 
                            SET nama_jenis          = '$nama_jenis'
                            
                            WHERE id_jenis_barang  = '$id' ";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }
    

}else{
    header('location: ../index.php');
}


?>
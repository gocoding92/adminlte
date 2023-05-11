<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)){
    $id                = $_POST['id'];
    $nama_barang       = $_POST['nama_barang'];
    $harga             = $_POST['harga'];
    $qty               = $_POST['qty'];
    $id_jenis_barang   = $_POST['id_jenis_barang'];

    $sql = "UPDATE tbl_barang 
                            SET nama_barang     = '$nama_barang',
                                harga           = '$harga',
                                qty             = '$qty',
                                id_jenis_barang = '$id_jenis_barang'

                            WHERE id_barang   = '$id' ";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }
    

}else{
    header('location: ../index.php');
}


?>
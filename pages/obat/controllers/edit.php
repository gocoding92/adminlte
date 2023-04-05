<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_POST)) {
    $id = $_POST['id'];
    $nama_obat = $_POST['nama_obat'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $sql = "UPDATE tbl_obat 
                            SET nama_obat = '$nama_obat',
                                qty = '$qty',
                                harga = '$harga'

                            WHERE id_obat = '$id'";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
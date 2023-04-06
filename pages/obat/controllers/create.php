<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_POST)) {
    $nama_obat = $_POST['nama_obat'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO tbl_obat (nama_obat, qty, harga)
                    VALUES ('$nama_obat', '$qty', '$harga')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
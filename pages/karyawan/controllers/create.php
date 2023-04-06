<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_POST)) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $umur = $_POST['umur'];
    $jabatan = $_POST['jabatan'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO tbl_karyawan (nama_lengkap, umur, jabatan, tempat_tanggal_lahir, alamat)
                            VALUES ('$nama_lengkap', '$umur', '$jabatan', '$tempat_tanggal_lahir', '$alamat')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
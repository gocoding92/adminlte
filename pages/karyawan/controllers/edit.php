<?php

include "../../../config/koneksi/koneksi.php";

if (isset($_POST)) {
    $id = $_POST['id'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $umur = $_POST['umur'];
    $jabatan = $_POST['jabatan'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE tbl_karyawan 
                            SET nama_lengkap = '$nama_lengkap',
                                umur = '$umur',
                                jabatan = '$jabatan',
                                tempat_tanggal_lahir = '$tempat_tanggal_lahir',
                                alamat = '$alamat'

                            WHERE id_karyawan = '$id'";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }

} else {
    header('location: ../index.php');
}
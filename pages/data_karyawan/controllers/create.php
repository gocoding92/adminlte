<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $nama_lengkap           = $_POST['nama_lengkap'];
    $tempat_tanggal_lahir   = $_POST['tempat_tanggal_lahir'];
    $umur                   = $_POST['umur'];
    $jenis_kelamin          = $_POST['jenis_kelamin'];
    $awal_kerja             = $_POST['awal_kerja'];
    $nomor_hp               = $_POST['nomor_hp'];
    $status                 = $_POST['status'];
    $alamat_asal            = $_POST['alamat_asal'];
    $alamat_sekarang        = $_POST['alamat_sekarang'];

$sql    = "INSERT INTO tbl_karyawan (nama_lengkap, tempat_tanggal_lahir, umur, jenis_kelamin, awal_kerja, nomor_hp, status, alamat_asal, alamat)
            VALUES ('$nama_lengkap', '$tempat_tanggal_lahir', '$umur', '$jenis_kelamin', '$awal_kerja', '$nomor_hp', '$status', '$alamat_asal', '$alamat_sekarang')";

// var_dump($sql);
// exit;
   
   $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

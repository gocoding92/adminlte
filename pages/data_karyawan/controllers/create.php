<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $username               = $_POST['username'];
    $nama_lengkap           = $_POST['nama_lengkap'];
    $tempat_tanggal_lahir   = $_POST['tempat_tanggal_lahir'];
    $level                  = $_POST['level'];
    $umur                   = $_POST['umur'];
    $awal_kerja             = $_POST['awal_kerja'];
    $alamat                 = $_POST['alamat'];

$sql    = "INSERT INTO tbl_karyawan (username, nama_lengkap, tempat_tanggal_lahir, level, umur, awal_kerja, alamat)
            VALUES ('$username', '$nama_lengkap', '$tempat_tanggal_lahir', '$level', '$umur', '$awal_kerja', '$alamat')";
   
   $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

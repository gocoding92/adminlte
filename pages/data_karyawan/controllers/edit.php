<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id                     = $_POST['id'];
    $username               = $_POST['username'];
    $nama_lengkap           = $_POST['nama_lengkap'];
    $tempat_tanggal_lahir   = $_POST['tempat_tanggal_lahir'];
    $level                  = $_POST['level'];
    $umur                   = $_POST['umur'];
    $awal_kerja             = $_POST['awal_kerja'];
    $alamat                 = $_POST['alamat'];

$sql    = "UPDATE tbl_karyawan
                                SET username                = '$username',
                                    nama_lengkap            = '$nama_lengkap',
                                    level                   = '$level',
                                    umur                    = '$umur',
                                    awal_kerja              = '$awal_kerja',
                                    alamat                  = '$alamat'              

                                    
                                    WHERE id_karyawan='$id' ";
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

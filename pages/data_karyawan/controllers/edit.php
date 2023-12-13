<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id_karyawan            = $_POST['id_karyawan'];
    $nama_lengkap           = $_POST['nama_lengkap'];
    $tempat_tanggal_lahir   = $_POST['tempat_tanggal_lahir'];
    $umur                   = $_POST['umur'];
    $jenis_kelamin          = $_POST['jenis_kelamin'];
    $awal_kerja             = $_POST['awal_kerja'];
    $nomor_hp               = $_POST['nomor_hp'];
    $status                 = $_POST['status'];
    $alamat_asal            = $_POST['alamat_asal'];
    $alamat_sekarang        = $_POST['alamat_sekarang'];

$sql    = "UPDATE tbl_karyawan
                                SET nama_lengkap            = '$nama_lengkap',
                                    tempat_tanggal_lahir    = '$tempat_tanggal_lahir',
                                    umur                    = '$umur',
                                    jenis_kelamin           = '$jenis_kelamin',
                                    awal_kerja              = '$awal_kerja',
                                    nomor_hp                = '$nomor_hp',
                                    status                  = '$status',
                                    alamat_asal             = '$alamat_asal',
                                    alamat                  = '$alamat_sekarang'              

                                    
                                    WHERE id_karyawan='$id_karyawan' ";

    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

<?php 

include '../../../config/koneksi/koneksi.php';

 if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $sql = "UPDATE data_rekrutmen SET
                                nama_lengkap= '$nama_lengkap',
                                jenis_kelamin= '$jenis_kelamin'
                                WHERE 
                                id_rekrutmen = '$id'";
                                
    $query = mysqli_query($db, $sql);
                                

    // if ($query) {
        header("location:../index.php");
    // }
 }else{
    header("Location:../index.php");
 }
 
 
 ?>
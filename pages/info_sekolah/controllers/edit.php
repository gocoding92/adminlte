<?php 

include '../../../config/koneksi/koneksi.php';

 if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $umur = $_POST['umur'];
    $status = $_POST['status'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE tbl_user SET
                                nama= '$nama',
                                tgl_lahir= '$tgl_lahir',
                                umur= '$umur',
                                status= '$status',
                                alamat= '$alamat'
                            
                                WHERE 
                                id_user = '$id'";
                                
    $query = mysqli_query($db, $sql);
                                

    // if ($query) {
        header("location:../index.php");
    // }
 }else{
    header("Location:../index.php");
 }
 
 
 ?>
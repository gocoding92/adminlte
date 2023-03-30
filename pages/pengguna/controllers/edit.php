<?php 

include '../../../config/koneksi/koneksi.php';

 if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_lengkap = $_POST['umur'];
    $level = $_POST['level'];

    $sql = "UPDATE tbl_user SET
                                username= '$username',
                                password= '$password',
                                nama_lengkap= '$nama_lengkap',
                                level= '$level'
                            
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
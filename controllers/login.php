<?php

include '../config/koneksi/koneksi.php';

if (isset($_POST)){
    $username       = $_POST['username'];
    $password       = $_POST['password'];


   $sql = "SELECT * FROM tbl_pengguna
            WHERE username='$username' AND password='$password' ";
            
         $query   = mysqli_query($db, $sql);
         $nums_row = mysqli_num_rows($query);

         if ($nums_row == 1) {
            header('location: ../pages/dashboard/index.php');
         }else {
            header('location: ../index.php');
    }
    

}else{
    header('location: ../index.php');
}


?>
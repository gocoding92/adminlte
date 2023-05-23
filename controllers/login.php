<?php

include '../config/koneksi/koneksi.php';

session_start();

if (isset($_POST)){
    $username       = $_POST['username'];
    $password       = $_POST['password'];

   $sql = "SELECT * FROM tbl_pengguna
            WHERE username='$username' AND password='$password' ";
            
         $query   = mysqli_query($db, $sql);
         $nums_row = mysqli_num_rows($query);

         if ($nums_row == 1) {
            
            $sql = "SELECT 
                    
                    a.id_pengguna, a.username, a.nama_lengkap, a.no_handpone, 
                    a.level, a.supplier, b.supplier_description, c.cabang

                    FROM tbl_pengguna AS a
                    LEFT JOIN tbl_supplier AS b ON a.supplier = b.code_supplier
                    LEFT JOIN tbl_cabang AS c ON a.id_cabang = c.id_cabang

                    WHERE a.username='$username' AND a.password='$password' 
                ";

            $query  = mysqli_query($db, $sql);
            $data   = mysqli_fetch_object($query);

            $_SESSION["_data"] = $data;

            header('location: ../pages/dashboard/index.php');
         }else {
            header('location: ../index.php');
    }
    

}else{
    header('location: ../index.php');
}


?>
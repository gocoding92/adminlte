<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)){
    $code_supplier            = $_POST['code_supplier'];
    $contract                 = $_POST['contract'];
    $supplier_description     = $_POST['supplier_description'];
   
    $sql = "INSERT INTO tbl_supplier (code_supplier, contract, supplier_description) 
            VALUES ('$code_supplier', '$contract', '$supplier_description')";
            
         $query   = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }
    

}else{
    header('location: ../index.php');
}


?>
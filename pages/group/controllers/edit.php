<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)){
    $id                 = $_POST['id'];
    $nama_jenis         = $_POST['code_category'];

    $sql = "UPDATE tbl_category 
                            SET code_category          = '$code_category'
                            
                            WHERE id_category  = '$id' ";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }
    

}else{
    header('location: ../index.php');
}


?>
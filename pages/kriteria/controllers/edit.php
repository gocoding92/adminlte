<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id_kriteria     = $_POST['id_kriteria'];
    $kriteria        = $_POST['kriteria'];
    $atribut         = $_POST['atribut'];

    $sql    = "UPDATE tbl_kriteria 
                                SET kriteria = '$kriteria',
                                    atribut  = '$atribut'
                                    WHERE id_kriteria='$id_kriteria' ";
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

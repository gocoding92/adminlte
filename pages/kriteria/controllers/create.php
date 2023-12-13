<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $kriteria       = $_POST['kriteria'];
    $atribut        = $_POST['atribut'];

    $sql    = "INSERT INTO tbl_kriteria (kriteria, atribut) VALUES ('$kriteria', '$atribut')";
                               
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}
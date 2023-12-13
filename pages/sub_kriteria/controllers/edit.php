<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)) {
    $id_bobot       = $_POST['id_bobot'];
    $id_kriteria    = $_POST['id_kriteria'];
    $keterangan     = $_POST['keterangan'];
    $nilai_bobot    = $_POST['nilai_bobot'];

    $sql    = "UPDATE tbl_sub_kriteria 
                                        SET id_kriteria     = '$id_kriteria',
                                        keterangan          = '$keterangan',
                                        nilai_bobot         = 'nilai_bobot'
                                    
                                    WHERE id_bobot='$id' ";
    $query  = mysqli_query($db, $sql);
    
    if ($query){
        header('Location: ../index.php');
    }
}else{
    header('Location: ../index.php');
}

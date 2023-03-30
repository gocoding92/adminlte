 <?php 

include '../../../config/koneksi/koneksi.php';

 if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "UPDATE data_rekrutmen SET delete_at=1 WHERE id_rekrutmen=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header("location:../index.php");
    }
 }else{
    header("Location:../index.php");
 }
 
 
 ?>
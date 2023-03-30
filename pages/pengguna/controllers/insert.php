 <?php 
 
 include '../../../config/koneksi/koneksi.php';

 if (isset($_POST['submit'])) {
    mysqli_query($db, "INSERT INTO pengguna SET
    username = '$_POST[username]',
    password = '$_POST[password]',
    nama_lengkap = '$_POST[nama_lengkap]',
    level = '$_POST[level]'
    
    ");

    header("location: ../index.php");
 }
 
 
 
 ?>
 <?php 
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $nama_database = "rekrutmen_karyawan";

 $db = mysqli_connect($servername, $username, $password, $nama_database);

 if (!$db) {
    die("Gagal Terhubung dengan database" . mysqli_connect_error());
 }
 
 ?>
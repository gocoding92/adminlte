 <?php 
 
include 'config/koneksi/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

 $login = mysqli_query($db, "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");
 $cek = mysqli_num_rows($login);

 if($cek > 0){
    $row = mysqli_fetch_assoc($login);
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    $_SESSION['status'] = "login";
    header("location: pages/sample-link");
 }else{
  echo "data tidak ditemukan";
   header("location: index.php");
 }
 
 
 ?>
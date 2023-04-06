 <?php 

include 'config/koneksi/koneksi.php';

 if(isset($_POST['submit'])){
    mysqli_query($db, "INSERT INTO tbl_user SET
    
    username = '$_POST[username]',
    password = md5($_POST[password]),
    nama_lengkap = '$_POST[nama_lengkap]',
    agama = '$_POST[agama]',
    kewarganegaraan = '$_POST[kewarganegaraan]',
    jenjang_pendidikan = '$_POST[jenjang_pendidikan]',
    jenis_kelamin = '$_POST[jenis_kelamin]',
    umur = '$_POST[umur]',
    status = '$_POST[status]',
    tgl_lahir = '$_POST[tgl_lahir]',
    alamat = '$_POST[alamat]',
    no_hp = '$_POST[no_hp]'
    ");

    echo "Data berhasil di input";

 }
 

 
 ?>
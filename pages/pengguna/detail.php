<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample Modal Detail</title>

    <!-- // link-rel -->
    <?php include '../templates/link-rel.php'; ?>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    
    <!-- // header -->
    <?php include '../templates/header.php'; ?>
    <!-- // side menu -->
    <?php include '../templates/menu.php'; ?>
    
    <?php 
     
     if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = mysqli_query($db, "SELECT * FROM pengguna WHERE id_pengguna=$id");

        $data = mysqli_fetch_assoc($query);

     }else {
      header("location:index.php");
     }
     
     ?>



    <!-- // content tidak ada -->
    <div class="content-wrapper">
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card my-3">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="card-title">Data Pengguna Detail</h3>
                  </div>
                  <div class="col-md-6">
                    <!-- <button class="btn btn-sm btn-primary float-right">
                      <i class="fa fa-plus"></i>&nbsp;
                        Tambah data
                    </button> -->
                    
                   <!-- Button trigger modal -->
                    <a href="index.php" class="btn btn-primary btn-sm float-right">
                      <i class="fa fa-arrow-left"></i>&nbsp;
                     Kembali ke list data
                    </a>

                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Username</label>
                    <p>
                       <?php echo $data['username']; ?>
                    </p>
                    <!-- <input type="text" class="form-control" name="nama" placeholder="Masukkan nama"> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Password</label>
                    <p>
                      <?php echo $data['password']; ?>
                    </p>
                    <!-- <input type="date" class="form-control" name="tanggal_lahir"> -->
                  </div>
                </div>
               </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nama lengkap</label>
                    <p>
                       <?php echo $data['nama_lengkap'] ?>
                    </p>
                    <!-- <input type="number" class="form-control" name="umur" placeholder="Masukkan umur"> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Level</label>
                    <p>
                       <?php echo $data['level'] ?>
                    </p>
                    <!-- <input type="text" class="form-control" name="status" placeholder="Masukkan status"> -->
                  </div>
                </div>
               </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <!-- <div class="form-group"> -->
                    <label for="">Waktu Input</label>
                    <p>
                       <?php echo $data['create_time'] ?>
                    </p>
                    <!-- <textarea class="form-control" name="alamat" placeholder="Masukkan alamat"></textarea> -->
                  </div>
                  <!-- </div> -->
                </div>
               </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    
    <!-- // footer -->
    <?php include '../templates/footer.php'; ?>

    <!-- // script -->
    <?php include '../templates/script.php'; ?>
    
</div>

</body>
</html>
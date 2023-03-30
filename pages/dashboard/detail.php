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

        $query = mysqli_query($db, "SELECT * FROM tbl_user WHERE id_user=$id");

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
                    <h3 class="card-title">Data Sample Detail</h3>
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
                    <label for="">Nama</label>
                    <p>
                       <?php echo $data['nama']; ?>
                    </p>
                    <!-- <input type="text" class="form-control" name="nama" placeholder="Masukkan nama"> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <p>
                      <?php echo $data['tgl_lahir']; ?>
                    </p>
                    <!-- <input type="date" class="form-control" name="tanggal_lahir"> -->
                  </div>
                </div>
               </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Umur</label>
                    <p>
                       <?php echo $data['umur'] ?>
                    </p>
                    <!-- <input type="number" class="form-control" name="umur" placeholder="Masukkan umur"> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Status</label>
                    <p>
                       <?php echo $data['status'] ?>
                    </p>
                    <!-- <input type="text" class="form-control" name="status" placeholder="Masukkan status"> -->
                  </div>
                </div>
               </div>
               <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <!-- <div class="form-group"> -->
                    <label for="">Alamat</label>
                    <p>
                       <?php echo $data['alamat'] ?>
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
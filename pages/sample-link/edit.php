<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample Modal Edit</title>

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
                    <h3 class="card-title">Data Sample Edit</h3>
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
                <form action="controllers/edit.php" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Nama</label>
                        <input type="hidden" name="id" value="<?php echo $data['id_user'];  ?>">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" value="<?php echo $data['nama'];  ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir'];  ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Umur</label>
                        <input type="text" class="form-control" name="umur" placeholder="Masukkan umur" value="<?php echo $data['umur'];  ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" class="form-control" name="status" placeholder="Masukkan status" value="<?php echo $data['status'];  ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <!-- <div class="form-group"> -->
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="alamat" placeholder="Masukkan alamat"><?php echo $data['alamat'];  ?></textarea>
                      </div>
                      <!-- </div> -->
                    </div>
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> -->
                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
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
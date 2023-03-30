<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Master Data Jenis Barang</title>

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

    $sql = "SELECT * FROM tbl_jenis_barang WHERE id_jenis_barang=$id ";
    $query = mysqli_query($db, $sql);
    $user = mysqli_fetch_assoc($query);

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
                    <h3 class="card-title">Master Data Jenis Barang</h3>
                  </div>
                  <div class="col-md-6">
                    <a href="index.php" class="btn btn-sm btn-primary float-right">
                      <i class="fa fa-arrow-left"></i>&nbsp; Kembali ke list data
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
                        <label for="">Jenis Barang</label>
                       <input type="hidden" name="id" value="<?php echo $user['id_jenis_barang']; ?>">
                        <input type="text" name="nama_jenis" class="form-control" value="<?php echo $user['nama_jenis']; ?>">
                    </div>
                  </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Waktu Input</label>
                        <input type="text" name="created_time" class="form-control" value="<?php echo $user['created_time']; ?>">
                    </div>
                </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default">Tutup</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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
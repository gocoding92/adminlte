<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Master Data Barang</title>

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
        $sql ="SELECT * FROM tbl_jenis_barang WHERE delete_at='0'";
        $query_jenis_barang = mysqli_query($db, $sql); 

        if (isset($_GET['id'])) {
          $id = $_GET['id'];

          $sql = "SELECT * FROM tbl_barang WHERE id_barang=$id ";
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
                    <h3 class="card-title">Master Data Barang</h3>
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
                        <label for="">Nama Barang</label>
                       <input type="hidden" name="id" value="<?php echo $user['id_barang']; ?>">
                        <input type="text" name="nama_barang" class="form-control" value="<?php echo $user['nama_barang']; ?>">
                    </div>
                  </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $user['harga']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Qty</label>
                        <input type="text" name="qty" class="form-control" value="<?php echo $user['qty']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control"><?php echo $user['deskripsi']; ?></textarea>
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Jenis Barang</label>
                        <select name="cars" class="form-control">
                          <option value="">--Pilih salah satu--</option>
                          <?php while ($jenis_barang = mysqli_fetch_array($query_jenis_barang)) { ?>
                            <option value="<?php echo $jenis_barang['id_jenis_barang']?>"><?php echo $jenis_barang['nama_jenis'] ?></option>
                          <?php }?>
                      </div>
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
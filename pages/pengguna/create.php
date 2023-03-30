<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample link Create</title>

    <!-- // link-rel -->
    <?php include '../templates/link-rel.php'; ?>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    
    <!-- // header -->
    <?php include '../templates/header.php'; ?>
    <!-- // side menu -->
    <?php include '../templates/menu.php'; ?>
    
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
                    <h3 class="card-title">Data Sample Link Create</h3>
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
               
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" name="nama" class="form-control">
                  </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Umur</label>
                      <input type="text" name="umur" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Status</label>
                      <input type="text" name="status" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Tanggal lahir</label>
                      <input type="date" name="tgl_lahir" id="" class="form-control">
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Alamat</label>
                      <textarea name="alamat" cols="20" rows="6" class="form-control"></textarea>
                    </div>
                  </div>
              </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default">Tutup</button>
                  <button type="button" class="btn btn-primary">Submit</button>
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
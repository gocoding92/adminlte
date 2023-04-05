<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sample Link Create</title>

	<!-- Link-rel -->
	<?php include '../templates/link-rel.php'; ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

	<!-- Header -->
	<?php include '../templates/header.php'; ?>

	<!-- Menu -->
	<?php include '../templates/menu.php'; ?>

	<!-- Content -->
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
                    <h3 class="card-title">Create Data Obat</h3>
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
                      <label for="">Nama Obat</label>
                      <input type="text" name="nama_obat" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Qty</label>
                      <input type="number" name="qty" class="form-control">
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="group">
                      <label for="">Harga</label>
                      <input type="text" name="harga" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary">Simpan</button>
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
      </div>
    </section>

	<!-- Footer -->
	<?php include '../templates/footer.php'; ?>

	<!-- Script -->
	<?php include '../templates/script.php'; ?>

</div>

</body>
</html>
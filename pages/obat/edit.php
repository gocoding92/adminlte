<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data Obat</title>

	<!-- Link-rel -->
	<?php include '../templates/link-rel.php'; ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

	<!-- Header -->
	<?php include '../templates/header.php'; ?>

	<!-- Menu -->
	<?php include '../templates/menu.php'; ?>

  <!-- struktur data detail data -->
  <?php

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tbl_obat WHERE id_obat=$id";
    $query = mysqli_query($db, $sql);
    $users = mysqli_fetch_assoc($query);

    }
  ?>

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
                    <h3 class="card-title">Edit Data Obat</h3>
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
                        <label for="">Nama Obat</label>
                        <!-- hidden id -->
                        <input type="hidden" name="id" value="<?php echo $users['id_obat']; ?>">

                        <input type="text" name="nama_obat" class="form-control" value="<?php echo $users['nama_obat']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Qty</label>
                        <input type="text" name="qty" class="form-control" value="<?php echo $users['qty']; ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="group">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control" value="<?php echo $users['harga']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
      </div>
    </section>

	<!-- Footer -->
	<?php include '../templates/footer.php'; ?>

	<!-- Script -->
	<?php include '../templates/script.php'; ?>

</div>

</body>
</html>
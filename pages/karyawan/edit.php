<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data Karyawan</title>

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

    $sql = "SELECT * FROM tbl_karyawan WHERE id_karyawan=$id";
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
                    <h3 class="card-title">Edit Data Karyawan</h3>
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
                        <label for="">Nama Lengkap</label>
                        <!-- hidden id -->
                        <input type="hidden" name="id" value="<?php echo $users['id_karyawan']; ?>">

                        <input type="text" name="nama" class="form-control" value="<?php echo $users['nama_lengkap']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Tempat, Tanggal Lahir</label>
                        <input type="text" name="tempat_tanggal_lahir" class="form-control" value="<?php echo $users['tempat_tanggal_lahir']; ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="group">
                        <label for="">Umur</label>
                        <input type="text" name="umur" class="form-control" value="<?php echo $users['umur']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="date" name="jabatan" id="" class="form-control" value="<?php echo $users['jabatan']; ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      <label for="">Alamat</label>
                      <textarea name="alamat" id="" cols="10" rows="6" class="form-control"><?php echo $users['alamat']; ?></textarea>
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
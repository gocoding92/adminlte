<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Data Karyawan</title>

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
                    <h3 class="card-title">Detail Data Karyawan</h3>
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
                      <label for="">Username</label>
                      <p> <?php echo $users['username']; ?> </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Nama Lengkap</label>
                      <p> <?php echo $users['nama_lengkap']; ?> </p>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="group">
                      <label for="">Tempat, Tanggal Lahir</label>
                      <p> <?php echo $users['tempat_tanggal_lahir']; ?> </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Umur</label>
                      <p> <?php echo $users['umur']; ?> </p>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="group">
                      <label for="">Awal Kerja</label>
                      <p> <?php echo $users['awal_kerja']; ?> </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Level</label>
                      <p> <?php echo $users['level']; ?> </p>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="group">
                      <label for="">Jabatan</label>
                      <p> <?php echo $users['jabatan']; ?> </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="">Alamat</label>
                    <p> <?php echo $users['alamat']; ?> </p>
                  </div>
                </div>
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
      </div>
    </section>

	<!-- Footer -->
	<?php include '../templates/footer.php'; ?>

	<!-- Script -->
	<?php include '../templates/script.php'; ?>

</div>

</body>
</html>
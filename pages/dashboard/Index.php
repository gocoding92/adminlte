
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sample Link</title>

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
                    <h3 class="card-title">Data Sample Link</h3>
                  </div>
                  <div class="col-md-6">
                    <a href="create.php" class="btn btn-sm btn-primary float-right">
                    <i class="fa fa-plus"></i>&nbsp; Tambah Data
                  </a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                    <th>Status</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                  $no = 1;
                  $sql = "SELECT * FROM tbl_users WHERE delete_at = '0'";
                  $query = mysqli_query($db, $sql);

                  while ($users = mysqli_fetch_array($query)) {
                  ?>

                  <tr>
                    <td> <?php echo $no++; ?> </td>
                    <td> <?php echo $users['nama']; ?> </td>
                    <td> <?php echo $users['alamat']; ?> </td>
                    <td> <?php echo $users['umur']; ?></td>
                    <td> <?php echo $users['status']; ?></td>
                    <td> <?php echo $users['tgl_lahir']; ?></td>
                  <td>

                  <a href="edit.php?id=<?php echo $users['id_users']; ?>" class ="btn btn-sm btn-primary">Edit</a>
                  <a href="detail.php?id=<?php echo $users['id_users']; ?>" class ="btn btn-sm btn-info">Detail</a>
                  <a href="controllers/delete.php?id=<?php echo $users['id_users']; ?>" class ="btn btn-sm btn-danger">Delete</a>
                  </td>
                  </tr>

                  <?php } ?>

                </table>
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
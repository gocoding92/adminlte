
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Obat</title>

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
                    <h3 class="card-title">Data Obat</h3>
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
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Waktu Input</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                  $no = 1;
                  $sql = "SELECT * FROM tbl_obat WHERE delete_at = '0'";
                  $query = mysqli_query($db, $sql);

                  while ($users = mysqli_fetch_array($query)) {
                  ?>

                  <tr>
                    <td> <?php echo $no++; ?> </td>
                    <td> <?php echo $users['nama_obat']; ?> </td>
                    <td> <?php echo $users['qty']; ?> </td>
                    <td> <?php echo $users['harga']; ?></td>
                    <td> <?php echo $users['created_time']; ?></td>
                  <td>

                  <a href="edit.php?id=<?php echo $users['id_obat']; ?>" class ="btn btn-sm btn-primary">Edit</a>
                  <a href="controllers/delete.php?id=<?php echo $users['id_obat']; ?>" class ="btn btn-sm btn-danger">Delete</a>
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

    <!-- modal create data -->
    <div class="modal fade" id="modal-create">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
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
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="">Alamat</label>
                <textarea name="alamat" id="" cols="10" rows="6" class="form-control"></textarea>
              </div>
            </div>
          
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <!-- modal edit data -->
    <div class="modal fade" id="modal-edit">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
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
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="">Alamat</label>
                <textarea name="alamat" id="" cols="10" rows="6" class="form-control"></textarea>
              </div>
            </div>
          
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>


     <!-- modal detail data -->
     <div class="modal fade" id="modal-detail">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Nama</label>
                  <p>Gibran</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Umur</label>
                  <p>22</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="">Status</label>
                    <p>Mahasiswa</p>
                </div>
              </div>
              <div class="col-md-6">
                <label for="">Tanggal Lahir</label>
                <p>-</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="">Alamat</label>
                <p>Depok</p>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

	<!-- Footer -->
	<?php include '../templates/footer.php'; ?>

	<!-- Script -->
	<?php include '../templates/script.php'; ?>

</div>

</body>
</html>
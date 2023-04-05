<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sample Modal</title>

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
                    <h3 class="card-title">Data Sample Modal</h3>
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#modal-create">
                    <i class="fa fa-plus"></i>&nbsp; Tambah Data
                  </button>
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
                  <tr>
                    <td>1</td>
                    <td>Gibran</td>
                    <td>Depok</td>
                    <td>22</td>
                    <td>Mahasiswa</td>
                    <td>-</td>
                  <td>
                  <botton class ="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-edit">Edit</botton>
                  <botton class ="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail">Detail</botton>
                  <botton class ="btn btn-sm btn-danger">Delete</botton>
                  </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Arman</td>
                    <td>Bintaro</td>
                    <td>25</td>
                    <td>Mahasiswa</td>
                    <td>-</td>
                  <td>
                  <botton class ="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-edit">Edit</botton>
                  <botton class ="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail">Detail</botton>
                  <botton class ="btn btn-sm btn-danger">Delete</botton>
                  </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Boy</td>
                    <td>Nias</td>
                    <td>30</td>
                    <td>Mahasiswa</td>
                    <td>-</td>
                  <td>
                  <botton class ="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-edit">Edit</botton>
                  <botton class ="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail">Detail</botton>
                  <botton class ="btn btn-sm btn-danger">Delete</botton>
                  </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Aman</td>
                    <td>Puncak</td>
                    <td>20</td>
                    <td>Mahasiswa</td>
                    <td>-</td>
                  <td>
                  <botton class ="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-edit">Edit</botton>
                  <botton class ="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail">Detail</botton>
                  <botton class ="btn btn-sm btn-danger">Delete</botton>
                  </td>
                  </tr>
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
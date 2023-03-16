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
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Simpan</button>
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
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Simpan</button>
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
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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
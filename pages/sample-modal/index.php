<html>
    <head>
        <meta charset="TTF-8"> 
        <title>Sampel Modal</title>

        <!--link-rel-->
        <?php include '../templates/link-rel.php'; ?>

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

             <!-- // header -->
            <?php include '../templates/header.php'; ?>
            <!-- // side menu -->
            <?php include '../templates/menu.php'; ?>
       
            <!-- // content -->
            <!-- Content Wrapper. Contains page content -->
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
                                    <h3 class="card-title">Data Sampel Modal</h3>
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
                                <th>Tanggal lahir</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Yamamoni Lase</td>
                                <td>Pengasinan</td>
                                <td>23 Tahun</td>
                                <td>Mahasiswa</td>
                                <td>Hiliganoita, 01 Januari 2000</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#modal-edit">Edit</button>
                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail">Detail</button>
                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete">Delete</button>
                                </td>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>2</td>
                                <td>Lase 3</td>
                                <td>NIAS</td>
                                <td>23 Tahun</td>
                                <td>Mahasiswa</td>
                                <td>Hiliganoita, 05 Februari 2001</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#modal-edit">Edit</button>
                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail">Detail</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>3</td>
                                <td>Boy Lase</td>
                                <td>Pengasinan</td>
                                <td>23 Tahun</td>
                                <td>Mahasiswa</td>
                                <td>Hiliganoita, 02 Desember 2002</td>
                                <td>
                                    <button class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#modal-edit">Edit</button>
                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail">Detail</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
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
                </section>
                <!-- /.content -->
            </div>

            <!-- modal create data / Tambah Data-->
            <div class="modal fade" id="modal-create">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
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
                                            <input type="number" name="umur" class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" name="status" id="" class="form-control">
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
                                    <textarea name="Alamat" id="" cols="30" rows="6" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

           
              <!-- modal edit data / Mengubah Data-->
              <div class="modal fade" id="modal-edit">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Data</h4>
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
                                            <input type="number" name="umur" class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" name="status" id="" class="form-control">
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
                                    <textarea name="Alamat" id="" cols="30" rows="6" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

             <!-- modal detail data / Spesifikasi-->
             <div class="modal fade" id="modal-detail">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <p>Yamamoni Lase</p>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Umur</label>
                                            <p>23 Tahun</p>
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
                                        <p>01 Januari 2000</p>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Alamat</label>
                                    <p>
                                        Desa : Hiliganoita, Kec. Bawolato, Kab. NIAS
                                    </p>
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

      
            <!--footer-->
            <?php include '../templates/footer.php' ?>
            <!-- // script-->
            <?php include '../templates/script.php'; ?>

        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mata Pelajaran</title>

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
                    <h3 class="card-title">Data Daftar karyawan</h3>
                  </div>
                  <div class="col-md-6">
                    <!-- <button class="btn btn-sm btn-primary float-right">
                      <i class="fa fa-plus"></i>&nbsp;
                        Tambah data
                    </button> -->
                    
                   <!-- Button trigger modal -->
                    <a href="create.php" class="btn btn-primary btn-sm float-right">
                      <i class="fa fa-plus"></i>&nbsp;
                     Tambah Data
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
                    <th>Umur</th>
                    <th>Status</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php                      
                     $query = mysqli_query($db, "SELECT * FROM tbl_user WHERE delete_at = '0'");
                     $no = 1;
                     while ($data = mysqli_fetch_assoc($query)) {?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['umur']; ?></td>
                    <td><?php echo $data['status'];  ?></td>
                    <td><?php echo $data['tgl_lahir'];  ?></td>
                    <td><?php echo $data['alamat'];  ?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $data['id_user'];  ?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="detail.php?id=<?php echo $data['id_user'];  ?>" class="btn btn-sm btn-primary">Detail</a>
                      <a href="controllers/delete.php?id=<?php echo $data['id_user'];  ?>" class="btn btn-sm btn-danger">Delete</a>
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
    </section>
    <!-- /.content -->
    </div>
    
    <!-- Modal Tambah Data Create -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Umur</label>
                  <input type="number" class="form-control" name="umur">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Status</label>
                  <input type="status" class="form-control" name="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Penutup Modal Tambah Data Create -->

    <!-- Modal Tambah Data Edit -->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="">Umur</label>
                    <input type="number" class="form-control" name="umur">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="status" class="form-control" name="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Penutup Modal Tambah Data Edit -->

    <!-- Modal Tambah Data Detail -->
    <div class="modal fade" id="exampleDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Nama</label>
                  <p>Abdul Rahman</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Umur</label>
                  <p>19</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Alamat</label>
                  <p>Komplek Inkopad</p>
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Status</label>
                  <p>Bujang</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Tanggal Lahir</label>
                  <p>29/10/2023</p>
                </div>
              </div>
            </div> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Penutup Modal Tambah Data Detail -->

    <!-- // footer -->
    <?php include '../templates/footer.php'; ?>

    <!-- // script -->
    <?php include '../templates/script.php'; ?>
    
</div>

</body>
</html>
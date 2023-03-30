<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample Modal Edit</title>

    <!-- // link-rel -->
    <?php include '../templates/link-rel.php'; ?>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    
    <!-- // header -->
    <?php include '../templates/header.php'; ?>
    <!-- // side menu -->
    <?php include '../templates/menu.php'; ?>
    
     <?php 
     
     if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = mysqli_query($db, "SELECT * FROM pengguna WHERE id_pengguna=$id");

        $data = mysqli_fetch_assoc($query);

     }else {
      header("location:index.php");
     }
     
     ?>


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
                    <h3 class="card-title">Data Pengguna Edit</h3>
                  </div>
                  <div class="col-md-6">
                    <!-- <button class="btn btn-sm btn-primary float-right">
                      <i class="fa fa-plus"></i>&nbsp;
                        Tambah data
                    </button> -->
                    
                   <!-- Button trigger modal -->
                    <a href="index.php" class="btn btn-primary btn-sm float-right">
                      <i class="fa fa-arrow-left"></i>&nbsp;
                     Kembali ke list data
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
                        <label for="">Username</label>
                        <input type="hidden" name="id" value="<?php echo $data['id_pengguna'];  ?>">
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?php echo $data['username'];  ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" value="<?php echo $data['password'];  ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="<?php echo $data['nama_lengkap'];  ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Level</label>
                        <input type="text" class="form-control" name="level" placeholder="Masukkan status" value="<?php echo $data['level'];  ?>">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> -->
                    <button type="submit" value="submit" name="submit" class="btn btn-primary">Simpan</button>
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
    </section>
    <!-- /.content -->
    </div>
    
    <!-- // footer -->
    <?php include '../templates/footer.php'; ?>

    <!-- // script -->
    <?php include '../templates/script.php'; ?>
    
</div>

</body>
</html>
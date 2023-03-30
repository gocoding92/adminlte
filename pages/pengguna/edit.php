<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pengguna</title>

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

    $sql = "SELECT * FROM tbl_pengguna WHERE id_pengguna=$id ";
    $query = mysqli_query($db, $sql);
    $user = mysqli_fetch_assoc($query);

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
                    <h3 class="card-title">Pengguna</h3>
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
                        <label for="">Username</label>
                       <input type="text" name="id" value="<?php echo $user['id_pengguna']; ?>">
                        <input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>">
                    </div>
                  </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control" value="<?php echo $user['password']; ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $user['nama_lengkap']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Level</label>
                        <input type="text" name="level" class="form-control" value="<?php echo $user['level']; ?>">
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Waktu Input</label>
                        <input type="text" name="created_time" class="form-control" value="<?php echo $user['created_time']; ?>">
                      </div>
                    </div>
                </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default">Tutup</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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
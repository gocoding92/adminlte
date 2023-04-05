<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabel Log History Keluar Barang</title>

    <!-- // link-rel -->
    <?php include '../templates/link-rel.php'; ?>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    
    <!-- // header -->
    <?php include '../templates/header.php'; ?>
    <!-- // side menu -->
    <?php include '../templates/menu.php'; ?>
    
  <!--struktur data detail data-->


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
                    <h3 class="card-title">Tabel Log History Keluar Barang</h3>
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
                    <th>Barang</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Deskripsi</th>
                    <th>Jenis Barang</th>
                    <th>Waktu Input</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    $no = 1;
                    $sql = "SELECT * FROM tbl_log_history_barang AS a 
                            INNER JOIN tbl_barang AS b ON a.id_barang = b.id_barang 
                            INNER JOIN tbl_jenis_barang AS c ON a.id_barang = b.id_barang 
                            WHERE a.delete_at='0' AND a.type_barang='Keluar'  
                          ";
                    $query = mysqli_query($db, $sql);

                    while ($user = mysqli_fetch_array($query)) {
                  ?>


                  <tr>      
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $user['nama_barang']; ?></td>
                    <td><?php echo $user['harga']; ?></td>
                    <td><?php echo $user['qty']; ?></td>
                    <td><?php echo $user['deskripsi']; ?></td>
                    <td><?php echo $user['nama_jenis']; ?></td>
                    <td><?php echo $user['created_time']; ?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $user['id_barang']; ?>" class="btn btn-sm btn-primary">Edit</a>
                      <!-- <a href="detail.php?id=<?php echo $user['id_barang']; ?>" class="btn btn-sm btn-info">Detail</a> -->
                      <!-- <a href="controllers/delete.php?id=<?php //echo $user['id_barang']; ?>" class="btn btn-sm btn-danger">Delete</a> -->
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
    
    <!-- // footer -->
    <?php include '../templates/footer.php'; ?>

    <!-- // script -->
    <?php include '../templates/script.php'; ?>
    
</div>

</body>
</html>
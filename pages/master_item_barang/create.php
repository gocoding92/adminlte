<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample link Create</title>

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
        $sql ="SELECT * FROM tbl_barang WHERE delete_at='0'";
        $query_jenis_barang = mysqli_query($db, $sql); 
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
                    <h3 class="card-title">Master Item Barang</h3>
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
               <form action="controllers/create.php" method="post">
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Short SKU</label>
                      <input type="text" name="nama_barang" class="form-control">
                  </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Description</label>
                      <input type="text" name="harga" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">PLU Description</label>
                      <input type="text" name="qty" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Line</label>
                      <input type="text" name="deskripsi" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Division</label>
                      <input type="text" name="qty" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Group</label>
                      <input type="text" name="deskripsi" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Departemen</label>
                      <input type="text" name="qty" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Category</label>
                      <input type="text" name="deskripsi" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">First Create Supplier</label>
                      <input type="text" name="qty" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Contract</label>
                      <input type="text" name="deskripsi" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Supplier Name</label>
                      <input type="text" name="qty" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Primary Barcode</label>
                      <input type="text" name="deskripsi" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Retail GST Rate</label>
                      <input type="text" name="qty" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Retail W GST</label>
                      <input type="text" name="deskripsi" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Retail UOM</label>
                    <select name="id_jenis_barang" class="form-control">
                      <option value="">--Pilih salah satu--</option>
                      <?php while ($jenis_barang = mysqli_fetch_array($query_jenis_barang)) { ?>
                        <option value="<?php echo $jenis_barang['id_jenis_barang']?>"><?php echo $jenis_barang['id_jenis_barang'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
                <div class="modal-footer justify-content-between">
                  <button type="reset" class="btn btn-default">Tutup</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
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
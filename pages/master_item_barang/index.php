<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Master Item Barang</title>

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
                    <h3 class="card-title">Master Item Barang</h3>
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
                    <th>Short SKU</th>
                    <th>Description</th>
                    <th>PLU Description</th>
                    <th>Line</th>
                    <th>Divison</th>
                    <th>Group</th>
                    <th>Departemen</th>
                    <th>Category</th>
                    <th>First Create Supplier</th>
                    <th>Contract</th>
                    <th>Supplier Name</th>
                    <th>Primary Barcode</th>
                    <th>Retail GST Rate</th>
                    <th>Retail W GST</th>
                    <th>Retail UOM</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    $no = 1;
                    // $sql = "SELECT * FROM tbl_barang AS a 
                    //         INNER JOIN tbl_jenis_barang AS b ON a.id_jenis_barang = b.id_jenis_barang 
                    //         WHERE a.delete_at='0'
                    //       ";
                    $sql = "SELECT * FROM tbl_item_barang LIMIT 100 ";
                    $query = mysqli_query($db, $sql);

                    while ($user = mysqli_fetch_array($query)) {
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $user['short_sku']; ?></td>
                    <td><?php echo $user['description']; ?></td>
                    <td><?php echo $user['plu_description']; ?></td>
                    <td><?php echo $user['line']; ?></td>
                    <td><?php echo $user['division']; ?></td>
                    <td><?php echo $user['group']; ?></td>
                    <td><?php echo $user['departemen']; ?></td>
                    <td><?php echo $user['category']; ?></td>
                    <td><?php echo $user['first_create_supplier']; ?></td>
                    <td><?php echo $user['contract']; ?></td>
                    <td><?php echo $user['supplier_name']; ?></td>
                    <td><?php echo $user['primary_barcode']; ?></td>
                    <td><?php echo $user['retail_gst_rate']; ?></td>
                    <td><?php echo $user['retail_w_gst']; ?></td>
                    <td><?php echo $user['retail_uom']; ?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                      <!-- <a href="detail.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-info">Detail</a> -->
                      <a href="controllers/delete.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
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
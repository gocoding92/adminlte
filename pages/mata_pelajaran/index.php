<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- include css -->
  <?php include '../templates/link-rel.php'; ?>
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    
    <!-- include header -->
    <?php include '../templates/header.php'; ?>

    <!-- include menu -->
    <?php include '../templates/menu.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mata Pelajaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

                <div class="row mb-2">
                  <div class="col-lg-12">
                    <a href="create.php" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Master Mata Pelajaran</a>
                  </div>
                </div>

                <hr />

                <table id="list-data-table" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td>No</td>
                      <td>Action</td>
                      <td>Mata Pelajaran</td>
                      <td>Waktu Input</td>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                    $no =1;
                    $sql ="SELECT * FROM tbl_mata_pelajaran WHERE deleted_at='0'";
                    $query = mysqli_query($db, $sql);

                    while ($data = mysqli_fetch_array($query)) {
                  ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td>
                      <a href="edit.php?id=<?php echo $data['id_mata_pelajaran']; ?>">
                          <span class="right badge badge-info"><i class="fa fa-edit"></i>&nbsp; Edit</span>
                        </a>
                        <span class="right badge badge-primary"><i class="fa fa-eye"></i>&nbsp; Detail</span>
                        <a href="controllers/delete.php?id=<?php echo $data['id_mata_pelajaran']; ?>">
                          <span class="right badge badge-danger"><i class="fa fa-trash"></i>&nbsp; Delete</span>
                        </a>
                      </td>
                      <td><?php echo $data['nama_mata_pelajaran']; ?></td>
                      <td><?php echo $data['created_time']; ?></td>
                    </tr>


                    <?php } ?>


                  </tbody>
                </table>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
   </div>
  </div>
  <!-- /.content-wrapper -->
    
    <!-- include menu -->
    <?php include '../templates/footer.php'; ?>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- include menu -->
<?php include '../templates/script.php'; ?>

<script>
  $(function () {
    $('#list-data-table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

</body>
</html>

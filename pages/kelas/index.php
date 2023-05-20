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
            <h1 class="m-0">Data Kelas</h1>
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
                <table id="list-data-table" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td>No</td>
                      <td>Action</td>
                      <td>Kelas</td>
                      <td>Waktu Input</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>
                        <span class="right badge badge-info"><i class="fa fa-edit"></i>&nbsp; Edit</span>
                        <span class="right badge badge-primary"><i class="fa fa-eye"></i>&nbsp; Detail</span>
                        <span class="right badge badge-danger"><i class="fa fa-trash"></i>&nbsp; Delete</span>
                      </td>
                      <td>10 A</td>
                      <td>17-10-2023</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>
                        <span class="right badge badge-info"><i class="fa fa-edit"></i>&nbsp; Edit</span>
                        <span class="right badge badge-primary"><i class="fa fa-eye"></i>&nbsp; Detail</span>
                        <span class="right badge badge-danger"><i class="fa fa-trash"></i>&nbsp; Delete</span>
                      </td>
                      <td>10 C</td>
                      <td>17-10-2023</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>
                        <span class="right badge badge-info"><i class="fa fa-edit"></i>&nbsp; Edit</span>
                        <span class="right badge badge-primary"><i class="fa fa-eye"></i>&nbsp; Detail</span>
                        <span class="right badge badge-danger"><i class="fa fa-trash"></i>&nbsp; Delete</span>
                      </td>
                      <td>10 X</td>
                      <td>17-10-2023</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>
                        <span class="right badge badge-info"><i class="fa fa-edit"></i>&nbsp; Edit</span>
                        <span class="right badge badge-primary"><i class="fa fa-eye"></i>&nbsp; Detail</span>
                        <span class="right badge badge-danger"><i class="fa fa-trash"></i>&nbsp; Delete</span>
                      </td>
                      <td>10 C</td>
                      <td>17-10-2023</td>
                    </tr>
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

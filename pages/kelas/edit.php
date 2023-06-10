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

    <!-- struktur data detail data -->

    <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql  ="SELECT * FROM tbl_kelas WHERE id_kelas=$id ";
        $query = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($query);
      }
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Master Kelas</h1>
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
              <form action="controllers/edit.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Kelas</label>
                      <!-- hidden id -->
                      <input type="hidden" name="kelas" value="<?php echo $data['id_kelas']; ?>">

                      <input type="text" class="form-control" value="<?php echo $data['nama_kelas']; ?>" name="kelas" placeholder="Masukan Kelas">
                    </div>
                  </div>
                </div>

                <hr />

                <div class="row">
                  <div class="col-md-6">
                    <button class="btn btn-info btn-block">Submit</button>
                  </div>
                </div>

              </form>
                
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

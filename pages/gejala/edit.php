<html>
    <head>
        <meta charset="TTF-8"> 
        <title>Edit Link create</title>

        <!--link-rel-->
        <?php include '../templates/link-rel.php'; ?>

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

             <!-- // header -->
            <?php include '../templates/header.php'; ?>
            <!-- // side menu -->
            <?php include '../templates/menu.php'; ?>

            <!-- struktur data detail data -->
            <?php
                if (isset($_GET['id'])){

                    $id = $_GET['id'];

                    $sql = "SELECT * FROM tbl_gejala WHERE id_gejala=$id ";
                    $query = mysqli_query($db, $sql);
                    $data = mysqli_fetch_assoc($query);

                    $sql_jenis_tanaman = "SELECT * FROM tbl_jenis_tanaman";
                    $query_jenis_tanaman = mysqli_query($db, $sql_jenis_tanaman);

                    
                }
            ?>

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
                                    <h3 class="card-title">Data Edit </h3>
                                </div>
                                <div class="col-md-6">
                                    <a href="index.php" class="btn btn-sm btn-primary float-right">
                                        <i class="fa fa-arrow-left"></i>&nbsp; Kembali Ke List Data
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
                                            <label for="">Jenis Tanaman</label>
                                            <!-- hidden id -->
                                            <input type="hidden" name="id" value="<?php echo $data['id_jenis_tanaman']; ?>">
                                            <select name="jenis_tanaman" id="" class="form-control">
                                                <option value="0">[Silahkan Pilih]</option>
                                                <?php while ($data = mysqli_fetch_array($query_jenis_tanaman)) { ?>
                                                    <option <?php echo $data['id_jenis_tanaman'] == $data['id_jenis_tanaman'] ? 'selected' : null  ?> value="<?php echo $data['id_jenis_tanaman']; ?>"><?php echo $data['jenis_tanaman']; ?></option>
                                                <?php } ?>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <label for="">Gejala</label>
                                                <input type="text" name="gejala" class="form-control" value="<?php echo $data['gejala']; ?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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

            <!--footer-->
            <?php include '../templates/footer.php' ?>
            <!-- // script-->
            <?php include '../templates/script.php'; ?>

        </div>
    </body>
</html>
<html>
    <head>
        <meta charset="TTF-8"> 
        <title>Sampel Link create</title>

        <!--link-rel-->
        <?php include '../templates/link-rel.php'; ?>

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

             <!-- // header -->
            <?php include '../templates/header.php'; ?>
            <!-- // side menu -->
            <?php include '../templates/menu.php'; ?>
       
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
                                    <h3 class="card-title">Diagnosa Tanaman Cabai</h3>
                                </div>
                                <div class="col-md-6">
                                    <a href="index.php" class="btn btn-sm btn-primary float-right">
                                        <i class="fa fa-arrow-left"></i>&nbsp; Kembali
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?php 
                        
                        $no = 1;
                        // query Jenis Tanaman
                        $sql_jenis_tanaman = "SELECT * FROM tbl_jenis_tanaman WHERE delete_at='0'";
                        $query_jenis_tanaman = mysqli_query($db, $sql_jenis_tanaman);
                        
                        // query Jenis Penyakit
                        $sql_jenis_penyakit = "SELECT * FROM tbl_jenis_penyakit WHERE delete_at='0'";
                        $query_jenis_penyakit = mysqli_query($db, $sql_jenis_penyakit);

                         // query gejala
                         $sql_gejala = "SELECT * FROM tbl_gejala WHERE delete_at='0'";
                         $query_gejala = mysqli_query($db, $sql_gejala);
                        
                        ?>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="controllers/create.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Jenis Tanaman</label>

                                            <select name="jenis_tanaman" id="" class="form-control">
                                                <option value="0">[Silahkan Pilih]</option>
                                                <?php while ($data_jenis_tanaman = mysqli_fetch_array($query_jenis_tanaman)) { ?>
                                                    <option value="<?php echo $data_jenis_tanaman['id_jenis_tanaman'];  ?>"><?php echo $data_jenis_tanaman['jenis_tanaman']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <!-- <input type="text" class="form-control" name="id_jenis_tanaman" placeholder="masukkan Jenis Tanaman"> -->
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="">Jenis Penyakit</label>
                                            <select name="" id="" class="form-control">
                                                    <option value="0">[Silahkan Pilih]</option>
                                                    <?php while ($data_jenis_penyakit = mysqli_fetch_array($query_jenis_penyakit)) {?>
                                                        <option value="<?php echo $data_jenis_penyakit['id_jenis_penyakit'] ?>"><?php echo $data_jenis_penyakit['jenis_penyakit']; ?></option>
                                                    <?php } ?>
                                            </select>
                                    </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Gejala</label>
                                            <select name="" id="" class="form-control">
                                                    <option value="0">[Silahkan Pilih]</option>
                                                    <?php while ($data_gejala = mysqli_fetch_array($query_gejala)) {?>
                                                        <option value="<?php echo $data_gejala['id_gejala'] ?>"><?php echo $data_gejala['gejala']; ?></option>
                                                    <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Kultur Teknis</label>
                                            <input type="text" class="form-control" name="kultur_teknis" placeholder="Masukkan Kultur Teknis">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Fisik Mekanis</label>
                                            <input type="text" class="form-control" name="fisik_mekanis" placeholder="Masukkan Fisik Mekanis">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Kimiawi</label>
                                            <input type="text" class="form-control" name="kimiawi" placeholder="Masukkan kimiawi">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Hayati</label>
                                            <input type="text" class="form-control" name="hayati" placeholder="Masukkan hayati">
                                        </div>
                                    </div>

                               

                            <div class="modal-footer justify-content-between">
                                <button type="reset" class="btn btn-default" data-dismiss="modal">Tutup</button>
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
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
        if (isset($_GET['id'])) {

            $id = $_GET['id'];

            $sql = "SELECT * FROM tbl_diagnosa WHERE id_diagnosa=$id ";
            $query = mysqli_query($db, $sql);
            $data = mysqli_fetch_assoc($query);
        }
        //query Jenis Tanaman
        $sql_jenis_tanaman = "SELECT * FROM tbl_jenis_tanaman WHERE delete_at='0'";
        $query_jenis_tanaman = mysqli_query($db, $sql_jenis_tanaman);

        // query Jenis Penyakit
        $sql_jenis_penyakit = "SELECT * FROM tbl_jenis_penyakit WHERE delete_at='0'";
        $query_jenis_penyakit = mysqli_query($db, $sql_jenis_penyakit);

        // query gejala
        $sql_gejala = "SELECT * FROM tbl_gejala WHERE delete_at='0'";
        $query_gejala = mysqli_query($db, $sql_gejala);

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
                                                <i class="fa fa-arrow-left"></i>&nbsp; Kembali
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
                                                    <input type="hidden" name="id" value="<?php echo $data['id_diagnosa']; ?>">

                                                    <select name="id_jenis_tanaman" id="" class="form-control">
                                                        <option value="0">[Silahkan Pilih]</option>
                                                        <?php while ($data_jenis_tanaman = mysqli_fetch_array($query_jenis_tanaman)) { ?>
                                                            <option <?php echo $data_jenis_tanaman['id_jenis_tanaman'] == $data['id_jenis_tanaman'] ? 'selected' : null  ?> value="<?php echo $data_jenis_tanaman['id_jenis_tanaman'];  ?>"><?php echo $data_jenis_tanaman['jenis_tanaman']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Jenis Penyakit</label>
                                                    <input type="text" class="form-control" name="jenis_penyakit" placeholder="Masukkan Jenis Penyakit" value="<?php echo $data['jenis_penyakit']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Kultur Teknis</label>
                                                    <input type="text" class="form-control" name="kultur_teknis" placeholder="Masukkan kultur teknis" value="<?php echo $data['kultur_teknis']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Fisik Mekanis</label>
                                                    <input type="text" name="fisik_mekanis" placeholder="Masukkan Fisik Mekanis" class="form-control" value="<?php echo $data['fisik_mekanis']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Kimiawi</label>
                                            <input type="text" class="form-control" name="kimiawi" placeholder="Masukkan kimiawi" value="<?php echo $data['kimiawi']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Hayati</label>
                                            <input type="text" class="form-control" name="hayati" placeholder="Masukkan hayati" value="<?php echo $data['hayati']; ?>">
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
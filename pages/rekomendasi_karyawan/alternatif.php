
<html>
    <head>
        <meta charset="TTF-8"> 
        <title>Rekomendasi Karyawan</title>

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
                                        <h3 class="card-title">Data Alternatif</h3>
                                    </div>
                                    <div class="col-md-6">
                                        </a>
                                        <a href="dokumentasi_penilaian.php" class="btn btn-sm btn-primary float-right">
                                            <i class="fa fa-plus"></i>&nbsp; Dokumentasi Penilaian
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-body">
                                
                                <form action="controllers/alternatif.php?rekomendasi_karyawan=<?= (!empty($_GET['rekomendasi_karyawan'])) ? $_GET['rekomendasi_karyawan'] : '' ; ?>" method="post">
                                    <div class="row">
                                        <?php
                                            $no = 1;
                                            $sql ="SELECT * FROM tbl_karyawan where delete_at='0'";
                                            $query = mysqli_query($db, $sql);

                                            while ($users = mysqli_fetch_array($query)){
                                        
                                        ?>
                                        
                                            <div class="col-md-4">
                                                <div class="info-box card-primary card-outline">
                                                    <span class="info-box-icon bg-default"><i class="far fa-user"></i></span>
                                                    <div class="info-box-content">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="icheck-primary">
                                                                    <input type="checkbox" name="karyawan[]" value="<?php echo $users['id_karyawan']; ?>" id="check1-<?php echo $users['id_karyawan']; ?>">
                                                                    <label for="check1-<?php echo $users['id_karyawan']; ?>"></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <span class="info-box-number"><?php echo $users['nama_lengkap']; ?></span>
                                                            </div>
                                                        </div>
                                                        <span class="info-box-text">No. Hp : <?php echo $users['nomor_hp'];?></span>
                                                        <span class="info-box-text">Awal Kerja : <?php echo $users['awal_kerja'];?></span>
                                                        <span class="info-box-text">Cabang : <?php echo $users['alamat'];?></span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>

                                        <?php }?>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-block">  <i class="fa fa-save"></i>&nbsp; SUMBIT ALTERNATIF KARYAWAN</button>
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

            <!--footer-->
            <?php include '../templates/footer.php' ?>
            <!-- // script-->
            <?php include '../templates/script.php'; ?>

        </div>
    </body>
</html>
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

                    $sql = "SELECT * FROM tbl_karyawan WHERE id_karyawan=$id ";
                    $query = mysqli_query($db, $sql);
                    $users = mysqli_fetch_assoc($query);
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
                                    <h3 class="card-title">Edit Data Karyawan</h3>
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
                                 <!-- hidden id -->
                                 <input type="hidden" name="id_karyawan" value="<?php echo $users['id_karyawan']; ?>">

                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="<?php echo $users['nama_lengkap']; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="">Tanggal Lahir</label>
                                            <input type="text" class="form-control" name="tempat_tanggal_lahir" placeholder="Masukkan TTL" value="<?php echo $users['tempat_tanggal_lahir']; ?>">
                                    </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Umur</label>
                                            <input type="text" class="form-control" name="umur" placeholder="Masukkan umur" value="<?php echo $users['umur']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" id="" class="form-control"> 
                                                <option value="0">Silahkan Pilih</option>
                                                <option <?php echo $users['jenis_kelamin'] == 'Laki-Laki' ? 'selected' : null ?> value="Laki-Laki">Laki - Laki</option>
                                                <option <?php echo $users['jenis_kelamin'] == 'Perempuan' ? 'selected' : null ?> value="Perempuan">Perempuan</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Awal Kerja</label>
                                            <input type="date" class="form-control" name="awal_kerja" value="<?php echo $users['awal_kerja']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <label for="">Nomor HP</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nomor_hp" placeholder="Masukkan No.Hp" value="<?php echo $users['nomor_hp']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <input type="text" class="form-control" name="status" value="<?php echo $users['status']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Alamat Asal</label>
                                            <textarea name="alamat_asal" rows="1" class="form-control" placeholder="Masukkan Alamat" ><?php echo $users['alamat_asal']; ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Alamat Sekarang</label>
                                            <textarea name="alamat_sekarang" rows="1" class="form-control" placeholder="Masukkan Alamat"><?php echo $users['alamat']; ?></textarea>
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
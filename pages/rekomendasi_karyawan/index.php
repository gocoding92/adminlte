
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
                                    <h3 class="card-title">Data Rekomendasi Karyawan</h3>
                                </div>
                                <div class="col-md-6">
                                    <a href="penilaian.php?rekomendasi_karyawan=<?php echo md5(date('Ymd his')); ?>" class="btn btn-sm btn-primary float-right">
                                        <i class="fa fa-plus"></i>&nbsp; Tambah Rekomendasi Karyawan
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Karyawan SAW</th>
                                <th>Nama Karyawan WP</th>
                                <th>Nilai Karyawan SAW</th>
                                <th>Nilai Karyawan WP</th>
                                <th>Periode Bulan</th>
                                <th>Periode Tahun</th>
                                <th>Waktu Input</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                                $no = 1;
                                $sql ="SELECT * FROM tbl_hasil_rekomendasi AS a
                                       WHERE a.delete_at='0'" ;
                                $query = mysqli_query($db, $sql);

                                while ($users = mysqli_fetch_array($query)){
                            
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $users['nama_karyawan_saw']; ?></td>
                                <td><?php echo $users['nama_karyawan_wp']; ?></td>
                                <td><?php echo $users['nilai_karyawan_saw']; ?></td>
                                <td><?php echo $users['nilai_karyawan_wp']; ?></td>
                                <td><?php echo $users['periode_bulan']; ?></td>
                                <td><?php echo $users['periode_tahun']; ?></td>
                                <td><?php echo $users['created_time'];?></td>
                                <td>
                                    <a href="hasil.php?rekomendasi_karyawan=<?php echo $users['id_rekomendasi_karyawan']; ?>" class="badge badge-info mb-2">Detail Penilaian</a>
                                    <a href="controllers/delete.php?id_rekomendasi_karyawan=<?php echo $users['id_rekomendasi_karyawan']; ?>" class="badge badge-danger">Delete</a>
                                </td>
                            </tr>
                            <?php }?>
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

            <!--footer-->
            <?php include '../templates/footer.php' ?>
            <!-- // script-->
            <?php include '../templates/script.php'; ?>

        </div>
    </body>
</html>
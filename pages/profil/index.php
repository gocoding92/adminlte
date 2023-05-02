<style>
  .img-circle{
    height:240px;
    padding: 5px 5px 5px 5px;
  }
</style>

  



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample Modal</title>

    <!-- // link-rel -->
    <?php include '../templates/link-rel.php'; ?>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    
    <!-- // header -->
    <?php include '../templates/header.php'; ?>
    <!-- // side menu -->
    <?php include '../templates/menu.php'; ?>
    
    <!-- // content tidak ada -->
    <div class="content-wrapper">
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <d  iv class="card my-3">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="card-title">Profil</h3>
                  </div>
                  <div class="col-md-6">

                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                      <img class="card-img-top img-circle" src="https://feb.umri.ac.id/wp-content/uploads/2021/04/3X4.jpeg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card" style="width: 25rem;">
                      <div class="card-body">
                        <p class="card-text">
                            <?php
                                if (isset($_GET['id'])) {
                                  $id = $_GET['id'];
                          
                                  $query = mysqli_query($db, "SELECT * FROM pengguna WHERE id_pengguna=$id");
                          
                                  $data = mysqli_fetch_assoc($query);
                                
                              
                                  }else {
                                    header("location:index.php");
                                  } 
                            ?>
                            <table>
                              <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td><?php echo $data['username'];  ?></td>
                              </tr>
                              <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td><?php echo $data['nama_lengkap'];  ?></td>
                              </tr>
                              <tr>
                                <td>Level</td>
                                <td>:</td>
                                <td><?php echo $data['level'];  ?></td>
                              </tr>
                            </table>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                
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
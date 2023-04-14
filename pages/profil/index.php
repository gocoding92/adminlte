<style>
  .img-circle{
    height:240px;
    padding: 5px 5px 5px 5px;
  }
</style>

<?php 
 include '../../config/koneksi/koneksi.php';

 $query = mysqli_query($db, "SELECT * FROM tbl_user");

 while ($data = mysqli_fetch_assoc($query)) {
 }
  ?>


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
                    <!-- <button class="btn btn-sm btn-primary float-right">
                      <i class="fa fa-plus"></i>&nbsp;
                        Tambah data
                    </button> -->
                    
                   <!-- Button trigger modal -->
                    <!-- <a href="create.php" class="btn btn-primary btn-sm float-right">
                      <i class="fa fa-plus"></i>&nbsp;
                     Tambah Data
                    </a> -->

                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top img-circle" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAIsAaAMBEQACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAgMEBQYHAQj/xAA9EAABAwIDBAUKBAUFAAAAAAABAAIDBBEFITEGEkFREyJhcaEHFDIzUmKBkcHRI0JysXOy4fDxFSQ0Q3T/xAAbAQEAAgMBAQAAAAAAAAAAAAAAAQIDBAUGB//EAC4RAAICAQMDAgMIAwAAAAAAAAABAgMRBCFBBRIxUWFxwdETIjKBkbHh8AYUof/aAAwDAQACEQMRAD8AxS9scgEAIAQAgBACAEAIAQAgBACAEAIAQAgBAJc5rGlziGtHEmyrKcYLuk8IlJt4QgVMB0njN9OuFiWqobwpr9UW+ymuB1ZygIAQAgBACAEAIAQAgEve1jHPebNaLk8gsdtsaoOcvCLQi5PCMzXVzqyS5JbG3RvD/K8rqtVPUSzLxwjpV1KCwiK51zZunKy1i49S1s1G4GNx3b5xu9E/ZbOn1VtD+69vQpOuM1uaSjqo6uHpIyfeadQV6bT6mF8O6P5+xzrK3B4ZIWwUBACAEAIAQAgPCQ0EnQI2ksseSuw6lqtoq18TJXR0bT17DQcu/JeO1/UJWNvO3COzpdMjV0+x2Fs3d+EyWHok5Lju+b5OkqYehLm2Uwl8Ra2jY24sC3UKFdNckOqD4M5VbAu6Qvgr8vZkj+t1nWr9UYZaRZ2ZQNhqcHxYw1IDbO3XAaFp0K6vT9V2Wxkns9maOop2cWXy9cckEAIAQAgBACAjYk7coJze3UI+eS1ddLt0037GWhZsRb7A03RUDpTmZneAyXg9TL7+D0WnjiGTc08N2E2WBIzj/Q2FrKcEEeqjAF92xVWWMD5QqRpjp6toAeCWOPMLa00t2jV1MdkyFTSdLTRSe00Fe/08/tKYy9Uedsj2zaHVlKAgBACAEAICNiTd+gnHu3+Wa1NfDv0017fyZaHixGhwamqmYfRR0b44mtiDi54vcleCk05ts9LFNQWC/o67EaN27WGmmiPouiyt3qJNIsk2W8uIlkAkEd78+CjuGCmkqMQrHuPnFJBFfJoF3WVsxayQ0yj2spJH4DUecODnQkPY9otfgpq2msFLFmDyZ7D2OjooWv8AStf6/Ve80EJQ00FL+53POXtOx4JC2zECAEAIAQAgJmF0zayeSneQA+Fwz+C4/XHNaZOL5WfhudDpna7mn6P5Gjo8NE+H0zHg3ia3IG2YGhXjW98neisLA5Dg0NJA8MYes8uLi4m1+A7OxJyytyYxSexYSxslpIo/ZHFY8lsEY4BTyVDZ3RASCPcB7M/HM56rMpPGEUcVnI1jOHNOGvowCQ9oaLm51VYvEskSj3LBntoqeKmrY44g1o6IGzRkAvY9EstsolOx53+SOH1OMI2RjFY2+ZVrsnOBACAEAIAQC6eV0FRHM3Vjr/Dj4LFfSrqpVy5Reux1zU1wbrCqqCbe6B+9GT/Wy+f6jT2aefZYsM9RXdC1d0HlE7EPUNDWOe3UgG1zwz5LBjJlyNOe+SGMOpC3g5zXC47RzU4WAmWTX/7dm96Vs0yQUuKVlPTyxvq37sW9a4aTfjw7ls6bS26mbhWtzDbfCld0/BiK+o87rZpwCGvd1QeAGQ8LL3Wko/16I1ei/wC8nm9Rb9rbKfqMLYMQIAQAgBACAEBdbNVYimfATbe6zfr/AH2Lzn+QaZyhG+PGz+X99zq9MuSk63yX1VLVmQOAD4shbetbvyXl0snchhi3zTFjQxsbjya8q7isGRwj6kiCSqjjIqt0Z3aAb2CxmF4MrtPVierbA03bEOt+o/34r1/QdK66XbLzLx8F9X+xweo3KU1BcfuUy7pzgQAgBACAEAIAQC4BI6eJsF+lc8BgGpcTkqWKLg1PxyWg2pLt8m2pZSwgS/HkV83ayz1hOjqqYX3Q0OtqowMjE0plcd3Mc1IwZDHqGShr/wAS5bOwTRuItcO+xuPkvedLuVulhjhY/T6nmtXHtukVy3zWBACAEAIAQHhNr34KSDRYHsdiuLhsnRilp3ZiWYG5Hut1PgO1aN+vppePL9jNCicvY3GC7FYfhc8NQTJPUsddskhsAbHRoy+d1x9Rr7bouPhehtwohF55GscwZ1LM6VovDI67T7J9k/RefvqcJZ4Oxp7VOOH5K1kHVzjb+pYDOWWA4ScRqCMxCw3kfyHIdpWWmp2S9jFdaq4+5fY9s7h+MRRxVkN2xA9EWEtLMuB+AyXb099lDzW8HInBWfiMHi/k5rqfefhcwqGj/rls1/z0PguvT1WL2sWPh4NWWma/CY6rpaiinMFZBJBKNWSNsf6966cJxmu6DyjXaa8jSsQCAEBY4LglfjU5joortaevK/JjO88+wZrBqNTXQszZeFcpvY6Xs9sXh2Ehk0w86qxn0sgyYfdbw79VwNT1C277q2j6fU3a6Iw38s1bI2hoIB3jq660kZwmZdpIHom4UkDoZFLEYqhrXMc3O+hCNJrDIy08oxc1LhctOK+ixBn+nuJdvnMBg1IdoVqS0azszdjrHjdbmzweOiZhlOMLeySmewPje0hweD+YnjdbMIKCwjUnNzlli3s/FtwaR8TxVyBwx9a3MICqxLDKPEoTDX08c8Z0D23t3clMLJ1vug8MiUVLyjA495PNwOmwWY/+eY3v3O+/zXWo6q/Fy/NfQ1Z6XmJg5opIJpIZo3RyxuLXscLFpHArsxkpLK8Go1h4Y/hVBLimJU1DBk+d4bf2RxPwFyqXWKqDm+CYxcpJI7ZheG0+G0UVLSRhkUYsOZ7TzJXk7bJWzc5eWdSMVFYRPa3MX1PBYyw5ENGngpDHS3IoQVmNwyzYFWwXLGmnkbkczkVJDPnoOvE25yAuAeCxlju+wmHT4Xs5QRtvvPj6V7CeLjf6rLjYqahsZAG9qc1BIpzbOaUBFkb1nfqshIjohdRghmF8pOzbaiikxemZaopm3mAHpxjj3t17l1unalwn9lLw/Hx/k1dRXldy4KjyYUANRWYlI3KNvQxntObvC3zWbqtuFGtfErpo7uR0tvqr8CCuJg3Bbc5rqMEjrBc35kqQOKCCo2srmYbs/XVMmjYiGjmTkB8yFIPnsAM3bm7QQT2gLGSfTtEGvp43NFgWC1llZVEjW3YoJPJR1e7NARZ/VvcOHW8UJFgC45AKyKsh1YbNBK17Q5j2lpB4i1kTaeRwZjY+i8y2YpGWIfJB07763ed79rBbGus79RJ+m36GOmOII0ML7MA1aRcLWTMo+0now4a7osjBIaAAAOCgAMxcIDCeVyq6PAIYAfXTtB+Fz9FD8A5A/wBF3cVQk+mMIdeggJ9kfsFlZBPtYntUA8fayAhVJ/Ck/SpQG3SEyEN/KAL9tlYCJ8orDQWUcghU8bQ1zWizGs3GjsGSq3l5YR7EbwOadW5hATI7BkTfdBKuRke3rgqMDINeGtAKYGTm3lkfaLDo/ake75AfdUkSjmbRvG3PJUJPpXCxamaz2cvALOyhPuLDtVCRuRwzCjIyRpxvMIH5laLGRkuvKbc7KxIic9QdpJ8FHII9MLRN5qgGwNyZzeBBUgkUz96NrnHPQqxUkNOZI0QCXDfI3UBy3yxT7+JYdCD6uJ5PeS37KkyyMJTDeqIm83tHiqEn0pRdV0gGgI/ZbEjGPkm6wtgSdVAPHAEWUp7kldE7fc5wWQsKqSL7o0a0pyBDdFREDUnro+26kkKLNnxP7qyIZPtZqECYdSpJOQ+VjPHaf+Cf5ljn5JRkcOzr6X+Oz+YKq8kn0fQG/SntCzyMY/c7ywsHv5lUDbiRC8jXNWj5HJXYb/xmHjZZC57L6T+4qOQf/9k=" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <a href="detail.php" class="btn btn-primary btn-block">DETAIL</a>
                    <a href="#" class="btn btn-primary btn-block">GANTI PASSWORD</a>
                    <a href="#" class="btn btn-success btn-block">VERIFIKASI ULANG</a>
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
    
    <!-- Modal Tambah Data Create -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Umur</label>
                  <input type="number" class="form-control" name="umur">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Status</label>
                  <input type="status" class="form-control" name="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tanggal_lahir">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Penutup Modal Tambah Data Create -->

    <!-- Modal Tambah Data Edit -->
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="">Umur</label>
                    <input type="number" class="form-control" name="umur">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="status" class="form-control" name="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Penutup Modal Tambah Data Edit -->

    <!-- Modal Tambah Data Detail -->
    <div class="modal fade" id="exampleDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Nama</label>
                  <p>Abdul Rahman</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Umur</label>
                  <p>19</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Alamat</label>
                  <p>Komplek Inkopad</p>
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label for="">Status</label>
                  <p>Bujang</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Tanggal Lahir</label>
                  <p>29/10/2023</p>
                </div>
              </div>
            </div> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Penutup Modal Tambah Data Detail -->

    <!-- // footer -->
    <?php include '../templates/footer.php'; ?>

    <!-- // script -->
    <?php include '../templates/script.php'; ?>
    
</div>

</body>
</html>
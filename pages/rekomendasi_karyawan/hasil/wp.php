<!-- /.card-body -->
<style>
    .max{
        background-color: red; 
        color: white;
    }
</style>

<div class="card-body">

    <div class="row">
        <div class="col-md-12">
            <label for="">1. Data Penilaian</label>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C6</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>A1</td>
                    <td><?php echo $data_nilai_alternatif['a1_c1']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a1_c2']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a1_c3']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a1_c4']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a1_c5']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a1_c6']; ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>A2</td>
                    <td><?php echo $data_nilai_alternatif['a2_c1']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a2_c2']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a2_c3']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a2_c4']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a2_c5']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a2_c6']; ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>A3</td>
                    <td><?php echo $data_nilai_alternatif['a3_c1']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a3_c2']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a3_c3']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a3_c4']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a3_c5']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a3_c6']; ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>A4</td>
                    <td><?php echo $data_nilai_alternatif['a4_c1']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a4_c2']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a4_c3']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a4_c4']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a4_c5']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a4_c6']; ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>A5</td>
                    <td><?php echo $data_nilai_alternatif['a5_c1']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a5_c2']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a5_c3']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a5_c4']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a5_c5']; ?></td>
                    <td><?php echo $data_nilai_alternatif['a5_c6']; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <label for="">2. Menentukan Bobot</label>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Criteria</th>
                    <th>Nilai Bobot</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>C1 = Keterlambatan</td>
                    <td><?php echo $data_nilai_bobot['bobot1']; ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>C2 = Jam Kerja</td>
                    <td><?php echo $data_nilai_bobot['bobot2']; ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>C3 = Over Time / Lembur</td>
                    <td><?php echo $data_nilai_bobot['bobot3']; ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>C4 = Teguran</td>
                    <td><?php echo $data_nilai_bobot['bobot4']; ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>C5 = Lama Bekerja</td>
                    <td><?php echo $data_nilai_bobot['bobot4']; ?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>C6 = Absensi</td>
                    <td><?php echo $data_nilai_bobot['bobot5']; ?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Simple Additive Weighting</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Weighting Product</a>
        </li>
    </ul>

    <div class="tab-content" id="custom-content-below-tabContent">
        
        <div class="tab-pane fade active show" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
            
            <div class="row">
                <div class="col-md-12">
                    <label for="">3. Menentukan Normalisasi</label>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Alternatif</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>C5</th>
                                <th>C6</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>A1</td>
                                <td><?php echo $data_nilai_normalisasi['a1_c1']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a1_c2']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a1_c3']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a1_c4']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a1_c5']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a1_c6']; ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>A2</td>
                                <td><?php echo $data_nilai_normalisasi['a2_c1']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a2_c2']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a2_c3']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a2_c4']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a2_c5']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a2_c6']; ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>A3</td>
                                <td><?php echo $data_nilai_normalisasi['a3_c1']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a3_c2']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a3_c3']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a3_c4']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a3_c5']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a3_c6']; ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>A4</td>
                                <td><?php echo $data_nilai_normalisasi['a4_c1']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a4_c2']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a4_c3']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a4_c4']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a4_c5']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a4_c6']; ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>A5</td>
                                <td><?php echo $data_nilai_normalisasi['a5_c1']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a5_c2']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a5_c3']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a5_c4']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a5_c5']; ?></td>
                                <td><?php echo $data_nilai_normalisasi['a5_c6']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="">4. Tahap Perangkingan</label>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Hasil Perangkingan</th>
                                <!-- <th>A2</th>
                                <th>A3</th>
                                <th>A4</th>
                                <th>A5</th> -->
                                <!-- <th>A6</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no= 0; for ($i=0; $i < count($hasil_perangkingan); $i++): ?>
                                <tr class="<?php echo $nilai_max_saw == $data_nilai_perangkingan['a1'] ? 'max' : ''  ?>">
                                    <td><?php echo $no=$no+1; ?>.</td>
                                    <td><?php echo $hasil_perangkingan[$i]['nama_lengkap']; ?></td>
                                    <td><?php echo $hasil_perangkingan[$i]['nilai_vektor_saw']; ?></td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
       
        <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
           
            <div class="row">
                <div class="col-md-6">
                    <label for="">3. Mencari Nilai W (Normalisasi Bobot)</label>
                    <table class="table table-bordered table-hover">
                        <head>

                        </head>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>W1</td>
                                <td><?php echo $data_normalisasi_bobot['w1']; ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>W2</td>
                                <td><?php echo $data_normalisasi_bobot['w2']; ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>W3</td>
                                <td><?php echo $data_normalisasi_bobot['w3']; ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>W4</td>
                                <td><?php echo $data_normalisasi_bobot['w4']; ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>W5</td>
                                <td><?php echo $data_normalisasi_bobot['w5']; ?></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>W6</td>
                                <td><?php echo $data_normalisasi_bobot['w6']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div> 

                <div class="col-md-6">
                    <label for="">4. Menentukan Nilai Vektor S</label>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Vektor S</th>
                                <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>S1</td>
                                <td><?php echo $data_vektor_s['s1']; ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>S2</td>
                                <td><?php echo $data_vektor_s['s2']; ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>S3</td>
                                <td><?php echo $data_vektor_s['s3']; ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>S4</td>
                                <td><?php echo $data_vektor_s['s4']; ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>S5</td>
                                <td><?php echo $data_vektor_s['s5']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="">5. Menentukan Nilai Vektor V dan Hasil Akhirnya</label>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Vektor V</th>
                                <th>Hasil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no= 0; for ($i=0; $i < count($hasil_perangkingan_wp); $i++): ?>
                                <tr>
                                    <td><?php echo $no=$no+1; ?>.</td>
                                    <td><?php echo $hasil_perangkingan[$i]['nama_lengkap']; ?></td>
                                    <td><?php echo $hasil_perangkingan_wp[$i]['nilai_vektor_wp']; ?></td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
  
    <!-- /.card-body -->
</div>
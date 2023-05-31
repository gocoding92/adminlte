<?php

    echo "<pre>";

    $c1 = $_POST['keterlambatan'];
    $c2 = $_POST['jam_kerja'];
    $c3 = $_POST['overtime'];
    $c4 = $_POST['teguran'];
    $c5 = $_POST['lama_bekerja'];
    $c6 = $_POST['absensi'];

    // c1 keterlambatan : cost
    $min_c1 = min($c1[0], $c1[1], $c1[2], $c1[3], $c1[4]);
    // c2 jam kerja : benefit
    $max_c2 = max($c2[0], $c2[1], $c2[2], $c2[3], $c2[4]);
    // c3 over time : benefit
    $max_c3 = max($c3[0], $c3[1], $c3[2], $c3[3], $c3[4]);
    // c4 teguran : cost
    $min_c4 = min($c4[0], $c4[1], $c4[2], $c4[3], $c4[4]);
    // c5 lama bekerja : benfit
    $max_c5 = max($c5[0], $c5[1], $c5[2], $c5[3], $c5[4]);
    // c6 absensi : cost
    $min_c6 = min($c6[0], $c6[1], $c6[2], $c6[3], $c6[4]);

    // tahap normalisasi

    // c1 keterlambatan : cost
    $normalisasi_c1_1 = $c1[0] / $min_c1;
    $normalisasi_c1_2 = $c1[1] / $min_c1;
    $normalisasi_c1_3 = $c1[2] / $min_c1;
    $normalisasi_c1_4 = $c1[3] / $min_c1;
    $normalisasi_c1_5 = $c1[4] / $min_c1;

    // c2 jam kerja : benefit
    $normalisasi_c2_1 = $c2[0] / $max_c2;
    $normalisasi_c2_2 = $c2[1] / $max_c2;
    $normalisasi_c2_3 = $c2[2] / $max_c2;
    $normalisasi_c2_4 = $c2[3] / $max_c2;
    $normalisasi_c2_5 = $c2[4] / $max_c2;

    // c3 over time : benefit
    $normalisasi_c3_1 = $c3[0] / $max_c3;
    $normalisasi_c3_2 = $c3[1] / $max_c3;
    $normalisasi_c3_3 = $c3[2] / $max_c3;
    $normalisasi_c3_4 = $c3[3] / $max_c3;
    $normalisasi_c3_5 = $c3[4] / $max_c3;

    // c4 teguran : cost
    $normalisasi_c4_1 = $c4[0] / $min_c4;
    $normalisasi_c4_2 = $c4[1] / $min_c4;
    $normalisasi_c4_3 = $c4[2] / $min_c4;
    $normalisasi_c4_4 = $c4[3] / $min_c4;
    $normalisasi_c4_5 = $c4[4] / $min_c4;

    // c5 lama bekerja : benfit
    $normalisasi_c5_1 = $c5[0] / $max_c5;
    $normalisasi_c5_2 = $c5[1] / $max_c5;
    $normalisasi_c5_3 = $c5[2] / $max_c5;
    $normalisasi_c5_4 = $c5[3] / $max_c5;
    $normalisasi_c5_5 = $c5[4] / $max_c5;

    // c6 absensi : cost
    $normalisasi_c6_1 = $c6[0] / $min_c6;
    $normalisasi_c6_2 = $c6[1] / $min_c6;
    $normalisasi_c6_3 = $c6[2] / $min_c6;
    $normalisasi_c6_4 = $c6[3] / $min_c6;
    $normalisasi_c6_5 = $c6[4] / $min_c6;

    // static
    $bobot1 = 10;
    $bobot2 = 15;
    $bobot3 = 25;
    $bobot4 = 10;
    $bobot5 = 30;
    $bobot6 = 10;

    // dinamic
    // $bobot1 = $_POST['bobot1'];
    // $bobot2 = $_POST['bobot2'];
    // $bobot3 = $_POST['bobot3'];
    // $bobot4 = $_POST['bobot4'];
    // $bobot5 = $_POST['bobot5'];
    // $bobot6 = $_POST['bobot6'];

    // tahap perangkingan

    // alternatif 1
    $alternatif_1_1 = $normalisasi_c1_1 * $bobot1;
    $alternatif_1_2 = $normalisasi_c2_1 * $bobot2;
    $alternatif_1_3 = $normalisasi_c3_1 * $bobot3;
    $alternatif_1_4 = $normalisasi_c4_1 * $bobot4;
    $alternatif_1_5 = $normalisasi_c5_1 * $bobot5;
    $alternatif_1_6 = $normalisasi_c6_1 * $bobot6;

    // alternatif 2
    $alternatif_2_1 = $normalisasi_c1_2 * $bobot1;
    $alternatif_2_2 = $normalisasi_c2_2 * $bobot2;
    $alternatif_2_3 = $normalisasi_c3_2 * $bobot3;
    $alternatif_2_4 = $normalisasi_c4_2 * $bobot4;
    $alternatif_2_5 = $normalisasi_c5_2 * $bobot5;
    $alternatif_2_6 = $normalisasi_c6_2 * $bobot6;

    // alternatif 3
    $alternatif_3_1 = $normalisasi_c1_3 * $bobot1;
    $alternatif_3_2 = $normalisasi_c2_3 * $bobot2;
    $alternatif_3_3 = $normalisasi_c3_3 * $bobot3;
    $alternatif_3_4 = $normalisasi_c4_3 * $bobot4;
    $alternatif_3_5 = $normalisasi_c5_3 * $bobot5;
    $alternatif_3_6 = $normalisasi_c6_3 * $bobot6;

    // alternatif 4
    $alternatif_4_1 = $normalisasi_c1_4 * $bobot1;
    $alternatif_4_2 = $normalisasi_c2_4 * $bobot2;
    $alternatif_4_3 = $normalisasi_c3_4 * $bobot3;
    $alternatif_4_4 = $normalisasi_c4_4 * $bobot4;
    $alternatif_4_5 = $normalisasi_c5_4 * $bobot5;
    $alternatif_4_6 = $normalisasi_c6_4 * $bobot6;

    // altenatif 5
    $alternatif_5_1 = $normalisasi_c1_5 * $bobot1;
    $alternatif_5_2 = $normalisasi_c2_5 * $bobot2;
    $alternatif_5_3 = $normalisasi_c3_5 * $bobot3;
    $alternatif_5_4 = $normalisasi_c4_5 * $bobot4;
    $alternatif_5_5 = $normalisasi_c5_5 * $bobot5;
    $alternatif_5_6 = $normalisasi_c6_5 * $bobot6;

    // perhitungan perangkingan
    $alternatif_1 = $alternatif_1_1 + $alternatif_1_2 + $alternatif_1_3 + $alternatif_1_4 + $alternatif_1_5 + $alternatif_1_6;
    $alternatif_2 = $alternatif_2_1 + $alternatif_2_2 + $alternatif_2_3 + $alternatif_2_4 + $alternatif_2_5 + $alternatif_2_6;
    $alternatif_3 = $alternatif_3_1 + $alternatif_3_2 + $alternatif_3_3 + $alternatif_3_4 + $alternatif_3_5 + $alternatif_3_6;
    $alternatif_4 = $alternatif_4_1 + $alternatif_4_2 + $alternatif_4_3 + $alternatif_4_4 + $alternatif_4_5 + $alternatif_4_6;
    $alternatif_5 = $alternatif_5_1 + $alternatif_5_2 + $alternatif_5_3 + $alternatif_5_4 + $alternatif_5_5 + $alternatif_5_6;
    
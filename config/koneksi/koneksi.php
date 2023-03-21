<?php 

$server = '191.101.230.121';
$user = 'u500007293_kons_online';
$password = 'Html5123@';
$nama_database = 'u500007293_kons_online';

$db = mysqli_connect($server, $user, $password, $nama_database);

if (! $db) {
    die("Gagal terhubung dengan database". mysqli_connect_error());
}
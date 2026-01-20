<?php
$conn = mysqli_connect("localhost", "root", "", "data_antrian_pasien");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
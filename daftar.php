<?php
require_once 'koneksi.php';

echo "<h2>Daftar Kehadiran Hari Ini (" . date("Y-m-d") . ")</h2>";

$tanggal = date("Y-m-d");
$data = mysqli_query($koneksi, "SELECT * FROM kehadiran WHERE tanggal = '$tanggal'");

while ($d = mysqli_fetch_array($data)) {
    echo "<p>- " . $d['nama'] . "</p>";
}

echo '<br><a href="index.php">Kembali ke Form</a>';

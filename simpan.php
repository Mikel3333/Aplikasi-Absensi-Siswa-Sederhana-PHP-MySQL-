<?php
require_once 'koneksi.php';
require_once 'fungsi.php';

$nama = $_POST['nama'];
$tanggal = date("Y-m-d");

if ($nama != "") {
    mysqli_query($koneksi, "INSERT INTO kehadiran (nama, tanggal) VALUES ('$nama', '$tanggal')");
    setFlash("Terima kasih, $nama sudah absen hari ini!");
} else {
    setFlash("Nama tidak boleh kosong!");
}

header("Location: index.php");

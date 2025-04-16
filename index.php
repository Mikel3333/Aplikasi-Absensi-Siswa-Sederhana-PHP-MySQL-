<?php
require_once 'fungsi.php';
getFlash();
?>

<h2>Form Absensi Siswa</h2>
<form action="simpan.php" method="POST">
    Nama Siswa: <input type="text" name="nama" required><br>
    <button type="submit">Absen</button>
</form>

<br>
<a href="daftar.php">Lihat Daftar Kehadiran</a>

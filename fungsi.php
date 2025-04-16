<?php
session_start();

function setFlash($pesan) {
    $_SESSION['flash'] = $pesan;
}

function getFlash() {
    if (isset($_SESSION['flash'])) {
        echo "<p style='color: green'>" . $_SESSION['flash'] . "</p>";
        unset($_SESSION['flash']);
    }
}
?>

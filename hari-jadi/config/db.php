<?php
$conn = mysqli_connect("localhost", "root", "", "hari-jadi");
if (!$conn) {
die("Koneksi gagal: " . mysqli_connect_error());
}
?>
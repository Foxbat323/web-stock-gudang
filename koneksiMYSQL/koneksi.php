<?php
$koneksi = mysqli_connect("localhost", "root",  "", "akademikweb");

if (mysqli_connect_errno()) {
    echo "koneksi DB gagal : " . mysqli_connect_error();
}
    
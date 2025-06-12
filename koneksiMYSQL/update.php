<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$NIM = $_POST['NIM'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "update mahasiswa set nama = '$nama', NIM = '$NIM', alamat = '$alamat' where id = '$id'");

header("location:listMahasiswa.php");
?>
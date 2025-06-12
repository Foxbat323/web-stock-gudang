<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$foto = $_POST['foto'];

mysqli_query($koneksi, "insert into mahasiswa values ('', '$nama', '$nim', '$alamat', '$foto')");


header("location:listMahasiswa.php");

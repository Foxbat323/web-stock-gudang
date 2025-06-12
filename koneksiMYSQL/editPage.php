<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi</title>
</head>

<body>
    <br>
    <h2>CRUD DATA MAHASISWA</h2>
    <br>
    <a href="listMahasiswa.php">KEMBALI</a>
    <br>
    <h3>EDIT DATA MAHASISWA</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from mahasiswa where id= '$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action='update.php'>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>
                        <input type="text" name="NIM" value="<?php echo $d['NIM'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $d['alamat'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>foto</td>
                    <td>
                        <input type="text" name="foto" value="<?php echo $d['foto'] ?>">
                    </td>
                </tr>
                <tr>
                    <td> <input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>

<body>
    <h2>
        CRUD DATA MAHASISWA
    </h2>
    <br>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="tambah_aksi.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>foto</td>
                <td><input type="text" name="foto"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>
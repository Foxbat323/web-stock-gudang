<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>

<body>
    <?php
    session_start();
    $username = $_SESSION['username'];
    $status = $_SESSION['status'];
    echo "<h2> selamat datang $username, anda berhasil login</h2>
    Menu Utama <br><br>
    <a href = 'listMahasiswa.php' > Data Mahasiswa</a> <br><br>
    <a href = 'listDosen.php'> Data Dosen</a> <br><br>";
    ?>
    <form method="post" action="logout.php">
        <input type="submit" name="tbsubmit" value="LOGOUT">
    </form>
</body>

</html>
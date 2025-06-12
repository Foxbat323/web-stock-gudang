<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat login dengan php dan mysqli</title>
</head>

<body>
    <h2>Login User dengan Session</h2>
    <br>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "login gagal! username dan password salah";
        } else if ($_GET['pesan'] == "login") {
            echo "anda berhasil login";
            header("location: menu_akademik.php");
        }
        exit();
    }
    ?>
    <br>
    <br>
    <form action="cek_login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="masukkan username "></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="masukkan password "></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>

</html>
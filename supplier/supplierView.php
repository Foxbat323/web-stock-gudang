<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../output.css">
</head>

<body class="flex">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="flex-1 bg-white p-6 h-screen overflow-auto">
        <h1 class="text-3xl font-semibold mb-4">Main Content</h1>
        <a href="addSupplier.php">Tambah Supplier</a>
        <table class="border-1">
            <tr>
                <td class="border-1 px-3">id_supplier</th>
                <td class="border-1 px-3">Nama</td>
                <td class="border-1 px-3">alamat</td>
                <td class="border-1 px-3">telepon</td>
                <td class="border-1 px-3">email</td>
                <td class="border-1 px-3">kontak person</td>
            </tr>
            <?php
            include 'db_connection.php';
            $no = 1;
            $data = mysqli_query($connection, "select * from supplier");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td class="border-1 px-3"><?php echo $d['id_supplier'] ?></td>
                    <td class="border-1 px-3"><?php echo $d['nama_supplier'] ?></td>
                    <td class="border-1 px-3"><?php echo $d['alamat'] ?></td>
                    <td class="border-1 px-3"><?php echo $d['telepon'] ?></td>
                    <td class="border-1 px-3"><?php echo $d['email'] ?></td>
                    <td class="border-1 px-3"><?php echo $d['kontak_person'] ?></td>
                    <td>
                        <a href="editPage.php?id_supplier=<?php echo $d['id_supplier']; ?>">Edit</a>
                        <a href="delete.php?id_supplier=<?php echo $d['id_supplier']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php
            } ?>
        </table>
    </div>

</body>

</html>
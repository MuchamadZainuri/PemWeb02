<?php
require_once 'dbkoneksi.php';
include_once 'template/header.php';
?>
<?php
$sql = "SELECT * FROM pelanggan";
$rs = $dbh->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        th,
        td {
            text-align: center;
        }

        a {
            text-decoration: none;
        }

        thead>tr>th {
            background-color: #2c3e50;
            color: #f1f2f3;
            padding: 8px 6px;
        }

        tbody>tr>td.beda {
            display: flex;
            justify-content: center;

        }
        tbody>tr>td.beda > a{
            margin:3px 5px;
        }
        div.card{
            width: 15%;
            position: relative;
            left: 77.5%;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <section class="content">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Database Table Pelanggan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Tabel Pelanggan</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <table class="table-striped table-hover" style="width: 100%;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor  = 1;
                    foreach ($rs as $row) {
                    ?>
                        <tr>
                            <th scope="row"><?= $nomor ?></th>
                            <td><?= $row['kode'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['jk'] ?></td>
                            <td><?= $row['tmp_lahir'] ?></td>
                            <td class="beda">
                                <a class="btn btn-primary btn-sm" href="pelanggan/view_pelanggan.php?id=<?= $row['id'] ?>">Detail</a>
                                <a class="btn btn-warning btn-sm" href="pelanggan/edit_pelanggan.php?idedit=<?= $row['id'] ?>">Ubah</a>
                                <a class="btn btn-danger btn-sm" href="pelanggan/delete_pelanggan.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?= $row['nama'] ?>?')) {return false}">Hapus</a>
                            </td>
                        </tr>
                    <?php
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
            <div class="card">
                <a class="btn btn-success btn-sm" href="pelanggan/from_pelanggan.php" role="button">Create Pelanggan</a>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>

<?php
include_once 'template/footer.php'
?>
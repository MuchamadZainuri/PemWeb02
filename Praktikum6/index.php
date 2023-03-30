<?php
require "dbkoneksi.php";

$sql = " SELECT * FROM pelanggan ";
$stmt = $conn->prepare($sql);
$stmt->execute();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        td,
        th {
            text-align: center;
            font-size: 13px;
        }

        .btn {
            padding: 5;
            font-size: 13px;
            margin-left: 10px;
        }

        .main {
            min-height: 83vh;
        }

        .row>.card {
            padding: 10.5px 0;
            border-radius: 0;
            background-color: #f1f2f3;
        }

        .head {
            margin-bottom: 11px;
        }

        body {
            background-color: #f1f2f3;
            background-image: url(dist/img/wickedbackground.svg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row head">
            <div class="col-md-12 text-center card">
                <div>Welcome to DB Admin</div>
            </div>
        </div>
        <div class="row main">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <a href="form.php" class="btn btn-success btn-sm mb-2">Tambah pelanggan</a>
                <table class="table table-striped table-hover " style="width:100%;background-color:#f1f2f3;border-radius: 20px;">
                    <thead>
                        <tr class="table-warning">
                            <th scope="col">NO</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tempat,Tanggal Lahir</th>
                            <th scope="col">Email</th>
                            <th scope="col">ID Kartu</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $number = 1;
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
                        ?>
                            <tr>
                                <td><?= $number ?></td>
                                <td><?= $row['kode'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['jk'] ?></td>
                                <td><?= $row['tmp_lahir'] ?> , <?= $row['tgl_lahir'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['kartu_id'] ?></td>
                                <td style="display: flex;">
                                    <a class="btn btn-warning btn-sm" href=" edit.php?id=<?= $row['id'] ?>">EDIT</a>
                                    <a class="btn btn-danger btn-sm" href="delete.php?id=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?= $row['nama'] ?>?')) {return false}">DELETE</a>
                                </td>
                            </tr>
                        <?php
                            $number++;
                        endwhile;
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="row foot">
            <div class="col-md-12 text-center card">
                <div>Footer</div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
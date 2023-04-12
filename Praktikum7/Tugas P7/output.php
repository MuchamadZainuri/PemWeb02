<?php
include_once('class_bmipasien.php');
if (isset($_POST['submit'])) {
    $bmi->nama = $_POST['nama'] ?? null;
    $bmi->umur = (int)$_POST['umur'] ?? null;
    $bmi->jeniskelamin = $_POST['jk'] ?? null;
    $bmi->berat = (float)$_POST['bb'] ?? null;
    $bmi->tinggi = (float)$_POST['tb'] ?? null;
    $bmi->hasilBMI();
    $_SESSION['result'][] = [
        'nama' => $bmi->nama,
        'umur' => $bmi->umur,
        'jeniskelamin' => $bmi->jeniskelamin,
        'berat' => $bmi->berat,
        'tinggi' => $bmi->tinggi,
        'bmi' => $bmi->hasilBMI()[0],
        'hasil' => $bmi->hasilBMI()[1],
    ];
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>From BMI Pasien</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f1f2f3;
        }

        .main {
            margin-top: 15vh;
        }

        .card-header {
            background-color:palegreen;
            text-align: center;
            color: #000;
            font-weight: 500;
        }

        .card-footer {
            background-color:palegreen;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row main">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Hasil Evaluasi BMI
                    </div>
                    <div class="card-body">
                        <div style="display: flex;">
                            <p class="card-text col-5">Nama</p>
                            <div class="col-7">: <?= $bmi->nama ?></div>
                        </div>
                        <div style="display: flex;">
                            <p class="card-text col-5">Umur</p>
                            <div class="col-7">: <?= $bmi->umur ?></div>
                        </div>
                        <div style="display: flex;">
                            <p class="card-text col-5">Jenis Kelamin</p>
                            <div class="col-7">: <?= $bmi->jeniskelamin ?></div>
                        </div>
                        <div style="display: flex;">
                            <p class="card-text col-5">Berat Badan</p>
                            <div class="col-7">: <?= $bmi->berat ?></div>
                        </div>
                        <div style="display: flex;">
                            <p class="card-text col-5">Tinggi Badan</p>
                            <div class="col-7">: <?= $bmi->tinggi ?></div>
                        </div>
                        <div style="display: flex;">
                            <p class="card-text col-5">BMI</p>
                            <div class="col-7">: <?= number_format($bmi->hasilBMI()[0] ?? '', 2, ',') ?></div>
                        </div>
                        <div style="display: flex;">
                            <p class="card-text col-5">Hasil</p>
                            <div class="col-7">: <?= $bmi->hasilBMI()[1] ?></div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <a href="tabel.php" class="btn btn-success btn-sm">Tabel BMI</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</body>

</html>
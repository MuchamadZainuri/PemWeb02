<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>From BMI Pasien</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        .head {
            margin-bottom: 13.5vh;
            text-align: center;
            padding: 10px 0;
            background-color: #f1f2f3;
        }

        .foot {
            padding: 10px 0;
            background-color: #f1f2f3;
            text-align: center;
        }

        .main {
            min-height: 73vh;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row head">
            <div class="col-md-12">
                <header>Form Isian Indeks Massa Tubuh (BMI)</header>
            </div>
        </div>
        <div class="row main">
            <div class="col-md-8">
                <form method="post" action="">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-user-circle-o"></i>
                                    </div>
                                </div>
                                <input id="nama" name="nama" placeholder="Nama" type="text" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="bb" class="col-4 col-form-label">Berat Badan</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-street-view"></i>
                                    </div>
                                </div>
                                <input id="bb" name="bb" placeholder="Berat badan" type="number" class="form-control" required="required">
                                <div class="input-group-append">
                                    <div class="input-group-text">Kg</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tb" class="col-4 col-form-label">Tinggi Badan</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-child"></i>
                                    </div>
                                </div>
                                <input id="tb" name="tb" placeholder="Tinggi Badan" type="number" class="form-control" required="required">
                                <div class="input-group-append">
                                    <div class="input-group-text">cm</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="umur" class="col-4 col-form-label">Umur</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-stethoscope"></i>
                                    </div>
                                </div>
                                <input id="umur" name="umur" placeholder="Umur" type="number" class="form-control">
                                <div class="input-group-append">
                                    <div class="input-group-text">Thn</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jk" id="jk_0" type="radio" required="required" class="custom-control-input" value="Laki-Laki">
                                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jk" id="jk_1" type="radio" required="required" class="custom-control-input" value="Perempuan">
                                <label for="jk_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary" value="hasil">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <?php
                if (isset($_POST["submit"])) {
                    require "class_bmipasien.php";
                    $pasien = new BmiPasien($_POST['nama'], $_POST['umur'], $_POST['jk'], $_POST['bb'], $_POST['tb']);
                ?>
                    <div class="card">
                        <div class="card-header">
                            Hasil Evaluasi BMI
                        </div>
                        <div class="card-body">
                            <div style="display: flex;">
                                <p class="card-text col-5">Nama</p>
                                <div class="col-7">: <?= $pasien->nama ?></div>
                            </div>
                            <div style="display: flex;">
                                <p class="card-text col-5">Umur</p>
                                <div class="col-7">: <?= $pasien->umur ?></div>
                            </div>
                            <div style="display: flex;">
                                <p class="card-text col-5">Jenis Kelamin</p>
                                <div class="col-7">: <?= $pasien->jenis_kelamin ?></div>
                            </div>
                            <div style="display: flex;">
                                <p class="card-text col-5">Berat Badan</p>
                                <div class="col-7">: <?= $pasien->berat ?></div>
                            </div>
                            <div style="display: flex;">
                                <p class="card-text col-5">Tinggi Badan</p>
                                <div class="col-7">: <?= $pasien->tinggi?></div>
                            </div>
                            <div style="display: flex;">
                                <p class="card-text col-5">BMI</p>
                                <div class="col-7">: <?= number_format($pasien->hasilBMI(), 2, ',') ?></div>
                            </div>
                            <div style="display: flex;">
                                <p class="card-text col-5">Hasil</p>
                                <div class="col-7">: <?= $pasien->statusBMI()?></div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="tabel.php" class="btn btn-success btn-sm">Tabel BMI</a>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
        <div class="row foot">
            <div class="col-md-12">
                <footer>Copyright &copy; 2023 <a href="">JayZee </a>. All rights reserved.</footer>
            </div>
        </div>
    </div>
</body>

</html>
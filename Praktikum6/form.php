<?php
require 'dbkoneksi.php';

$sqljenis = "SELECT * FROM kartu";
$rowjenis = $conn->prepare($sqljenis);
$rowjenis->execute();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        .row>.card {
            padding: 10.5px 0;
            border-radius: 0;
            background-color: #f1f2f3;
        }

        .main {
            min-height: 81vh;
        }

        .head {
            margin-bottom: 4.5vh;
        }

        body {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='800' preserveAspectRatio='none' viewBox='0 0 1440 800'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1240%26quot%3b)' fill='none'%3e%3crect width='1440' height='800' x='0' y='0' fill='rgba(163%2c 161%2c 161%2c 0.45)'%3e%3c/rect%3e%3cpath d='M384 258L-313 257' stroke-width='10' stroke='url(%23SvgjsLinearGradient1241)' stroke-linecap='round' class='Left'%3e%3c/path%3e%3cpath d='M1310 584L275 583' stroke-width='8' stroke='url(%23SvgjsLinearGradient1242)' stroke-linecap='round' class='Right'%3e%3c/path%3e%3cpath d='M1237 293L1609 292' stroke-width='8' stroke='url(%23SvgjsLinearGradient1241)' stroke-linecap='round' class='Left'%3e%3c/path%3e%3cpath d='M960 628L157 627' stroke-width='6' stroke='url(%23SvgjsLinearGradient1242)' stroke-linecap='round' class='Right'%3e%3c/path%3e%3cpath d='M838 686L1804 685' stroke-width='8' stroke='url(%23SvgjsLinearGradient1242)' stroke-linecap='round' class='Right'%3e%3c/path%3e%3cpath d='M869 133L478 132' stroke-width='10' stroke='url(%23SvgjsLinearGradient1242)' stroke-linecap='round' class='Right'%3e%3c/path%3e%3cpath d='M1298 473L1690 472' stroke-width='6' stroke='url(%23SvgjsLinearGradient1241)' stroke-linecap='round' class='Left'%3e%3c/path%3e%3cpath d='M340 309L-714 308' stroke-width='8' stroke='url(%23SvgjsLinearGradient1241)' stroke-linecap='round' class='Left'%3e%3c/path%3e%3cpath d='M663 40L1584 39' stroke-width='10' stroke='url(%23SvgjsLinearGradient1242)' stroke-linecap='round' class='Right'%3e%3c/path%3e%3cpath d='M516 177L91 176' stroke-width='10' stroke='url(%23SvgjsLinearGradient1241)' stroke-linecap='round' class='Left'%3e%3c/path%3e%3cpath d='M706 136L1638 135' stroke-width='10' stroke='url(%23SvgjsLinearGradient1242)' stroke-linecap='round' class='Right'%3e%3c/path%3e%3cpath d='M977 461L528 460' stroke-width='10' stroke='url(%23SvgjsLinearGradient1242)' stroke-linecap='round' class='Right'%3e%3c/path%3e%3cpath d='M870 44L1504 43' stroke-width='10' stroke='url(%23SvgjsLinearGradient1242)' stroke-linecap='round' class='Right'%3e%3c/path%3e%3cpath d='M872 100L1447 99' stroke-width='6' stroke='url(%23SvgjsLinearGradient1241)' stroke-linecap='round' class='Left'%3e%3c/path%3e%3cpath d='M222 620L-568 619' stroke-width='10' stroke='url(%23SvgjsLinearGradient1241)' stroke-linecap='round' class='Left'%3e%3c/path%3e%3cpath d='M249 298L954 297' stroke-width='6' stroke='url(%23SvgjsLinearGradient1241)' stroke-linecap='round' class='Left'%3e%3c/path%3e%3cpath d='M366 651L-696 650' stroke-width='10' stroke='url(%23SvgjsLinearGradient1242)' stroke-linecap='round' class='Right'%3e%3c/path%3e%3cpath d='M1307 241L517 240' stroke-width='8' stroke='url(%23SvgjsLinearGradient1241)' stroke-linecap='round' class='Left'%3e%3c/path%3e%3cpath d='M57 466L-836 465' stroke-width='8' stroke='url(%23SvgjsLinearGradient1242)' stroke-linecap='round' class='Right'%3e%3c/path%3e%3cpath d='M1158 781L462 780' stroke-width='8' stroke='url(%23SvgjsLinearGradient1241)' stroke-linecap='round' class='Left'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1240'%3e%3crect width='1440' height='800' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='100%25' y1='0%25' x2='0%25' y2='0%25' id='SvgjsLinearGradient1241'%3e%3cstop stop-color='rgba(255%2c 255%2c 255%2c 0)' offset='0'%3e%3c/stop%3e%3cstop stop-color='rgba(255%2c 255%2c 255%2c 1)' offset='1'%3e%3c/stop%3e%3c/linearGradient%3e%3clinearGradient x1='0%25' y1='0%25' x2='100%25' y2='0%25' id='SvgjsLinearGradient1242'%3e%3cstop stop-color='rgba(255%2c 255%2c 255%2c 0)' offset='0'%3e%3c/stop%3e%3cstop stop-color='rgba(255%2c 255%2c 255%2c 1)' offset='1'%3e%3c/stop%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e");
            background-size: 100%;
        }

        form {
            background-color: rgba(255, 255, 255, 0.474);
            padding: 20px;
            border-radius: 20px;
        }

        select {
            height: 35px;
            border-radius: 5px;
            border-style: none;
        }

        select:hover {
            border: 1px solid black;
        }

        a {
            color: #000;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row head">
            <div class="col-md-12 text-center card">
                <div><a href="index.php">Form Pelanggan</a> </div>
            </div>
        </div>
        <div class="row main">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <form method="POST" action="proses.php">
                    <div class="form-group row">
                        <label for="kode" class="col-4 col-form-label">Kode</label>
                        <div class="col-8">
                            <input id="kode" name="kode" placeholder="Kode Pelanggan" type="text" class="form-control" required="required" value="">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Pelanggan" type="text" class="form-control" required="required" value="">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jk" id="jk1" type="radio" require class="custom-control-input" value="L">
                                <label for="jk1" class="custom-control-label">Laki-Laki</label>
                                <input name="jk" id="jk0" type="radio" require class="custom-control-input" value="P">
                                <label for="jk0" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                        <div class="col-8">
                            <input id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir" type="text" class="form-control" required="required" value="">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-8">
                            <input id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" type="date" class="form-control" required="required" value="">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="email" name="email" type="email" required="required" class="form-control" value="" placeholder="Email Aktif">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="kartu_id" class="col-4 col-form-label"> Kartu</label>
                        <div class="col-8">
                            <?php
                            $sqljenis = "SELECT * FROM kartu";
                            $rowjenis = $conn->prepare($sqljenis);
                            $rowjenis->execute();
                            ?>
                            <select id="kartu_id" name="kartu_id" class="custom-select">
                                <?php
                                while ($jenis = $rowjenis->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <option value="<?= $jenis['id'] ?>"> <?= $jenis['nama']  ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="offset-5">
                            <button name="submit" type="submit" class="btn btn-secondary" value="Simpan">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
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
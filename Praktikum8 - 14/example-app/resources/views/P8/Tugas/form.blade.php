<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Form Pemeriksaan</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="height: 10vh; background-color: #f1f2f3;">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                Header
            </div>
        </div>
        <div class="row my-5" style="min-height: 65vh;">
            <div class="col-md-5 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Form</h5>
                    </div>
                    <div class="card-body">
                        <label for="nama">Nama</label>
                        <br>
                        <div class="input-group">
                            <input type="text" id="nama" class="form-control" placeholder="Nama Pasien">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                            </div>
                        </div>
                        <br>
                        <label for="tgl_check">Tanggal Pemeriksaan</label>
                        <br>
                        <input type="date" id="tgl_check" class="form-control" placeholder="Tanggal Checkup">
                        <br>
                        <label for="tgl_lahir">Tanggal lahir/usia</label>
                        <br>
                        <input type="date" id="tgl_lahir" class="form-control" placeholder="Tanggal Tahir/usia">
                        <br>
                        <label for="jk">Jenis Kelamin</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="laki-laki" value="laki-laki">
                            <label class="form-check-label" for="laki-laki">laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="Perempuan" value="Perempuan">
                            <label class="form-check-label" for="Perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Hasil</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="table-active">
                                    <th>No</th>
                                    <th>Jenis Tes</th>
                                    <th>Hasil Pemeriksaan</th>
                                    <th>Normal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tekanan darah</td>
                                    <td></td>
                                    <td>120/80 mmhg</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Asam urat</td>
                                    <td></td>
                                    <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Kolestrol total</td>
                                    <td></td>
                                    <td>
                                        < 200 mg/dl</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Gula darah</td>
                                    <td></td>
                                    <td>
                                        Puasa: 70-110 mg/d<br>
                                        2 jam setelah makan: 100-150 mg/dl<br>
                                        Sewaktu/acak : 70-125 mg/dl
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="height: 10vh; background-color: #f1f2f3;">
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                Footer
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
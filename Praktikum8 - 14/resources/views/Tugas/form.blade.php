<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="{{ asset('favicon.ico') }}" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Form Pemeriksaan</title>
    <style>
        th,
        .no {
            font-weight: normal;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top py-2 bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light fs-4 fw-bold" href="/form">Sehat-IN</a>
        </div>
    </nav>
    <main class="py-5 bg-dark-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-sm-12">
                    <div class="card border-warning">
                        <div class="card-header fs-5 fw-bold bg-warning-subtle">
                            Form Kesehatan
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('form/proses') }}">
                                @csrf
                                <label for="nama">Nama :</label>
                                <br>
                                <div class="input-group">
                                    <input required name="nama" type="text" id="nama"
                                        class="form-control mt-2" placeholder="Nama Pasien">
                                    <div class="input-group-append mt-2">
                                        <div class="input-group-text">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <label for="tgl_check">Tanggal Pemeriksaan :</label>
                                <br>
                                <input required name="tgl_cek" type="date" id="tgl_check" class="form-control mt-2"
                                    placeholder="Tanggal Checkup">
                                <br>
                                <label for="tgl_lahir">Tanggal lahir/usia :</label>
                                <br>
                                <input type="date" id="tgl_lahir" class="form-control mt-2"
                                    placeholder="Tanggal Tahir/usia" required name="tgl_lahir">
                                <br>
                                <div class="form-group row">
                                    <label class="col-md-3 col-sm-12" for="">Jenis Kelamin :</label>
                                    <div class="col-md-9 col-sm-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk"
                                                id="laki-laki" value="laki-laki">
                                            <label class="form-check-label" for="laki-laki">laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jk"
                                                id="Perempuan" value="Perempuan">
                                            <label class="form-check-label" for="Perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="sampul text-center pt-4">
                                    <button type="submit" class="btn btn-warning">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md"></div>
                <div class="col-md-7 col-sm-12">
                    <div class="card border-success">
                        <div class="card-header text-center fs-5 fw-bold bg-success-subtle">
                            Hasil
                        </div>
                        <div class="card-body">
                            @if (isset($nama) && isset($cek) && isset($tgl) && isset($jk))
                            <div class="text-end">
                                <a href="/form" class="btn btn-success rounded-3"><i class="bi bi-arrow-clockwise"></i></a>
                            </div>
                                <table class="border-0">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <td>&nbsp; &nbsp;:</td>
                                            <td><?= $nama ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Pemeriksaan</td>
                                            <td>&nbsp; &nbsp;:</td>
                                            <td><?= $cek ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir/Usia</td>
                                            <td>&nbsp; &nbsp;:</td>
                                            <td><?= $tgl ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>&nbsp; &nbsp;:</td>
                                            <td><?= $jk ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                            @endif
                            <table class="table table-bordered table-hover border-dark">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Tes</th>
                                        <th>Hasil Pemeriksaan</th>
                                        <th>Normal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="no">1</td>
                                        <td>Tekanan darah</td>
                                        <td></td>
                                        <td>120/80 mmhg</td>
                                    </tr>
                                    <tr>
                                        <td class="no">2</td>
                                        <td>Asam urat</td>
                                        <td></td>
                                        <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
                                    </tr>
                                    <tr>
                                        <td class="no">3</td>
                                        <td>Kolestrol total</td>
                                        <td></td>
                                        <td>
                                            < 200 mg/dl</td>
                                    </tr>
                                    <tr>
                                        <td class="no">4</td>
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
                <div class="col-md"></div>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-center py-3 text-white fs-6 fw-bold">
        CopyRight &copy; <a href="https://github.com/MuchamadZainuri" target="_blank" rel="noopener noreferrer"
            class="text-decoration-none text-danger">JayZee</a> 2023
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

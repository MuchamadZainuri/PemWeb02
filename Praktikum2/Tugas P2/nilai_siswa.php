    <?php
    // Membuat Variable
    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_uts = $_POST['uts'];
    $_uas = $_POST['uas'];
    $_tugas = $_POST['tugas'];
    
    // untuk mengecek apakah nilai yang diinputkan benar atau tidak
    if ($_uts >= 0 && $_uas >= 0 && $_tugas >= 0) {
        if ($_uts > 100 || $_uas > 100 || $_tugas > 100) {
            echo "<script>alert('Nilai yang anda masukkan salah!');window.location='form_nilai.php';</script>";
        }
    } else {
        echo "<script>alert('Nilai yang anda masukkan salah!');window.location='form_nilai.php';</script>";
    }
    
    // Mencari Nilai Rata-rata dan Menetukan Nilai Total
    $_nTotal =($_uts + $_uas + $_tugas) / 3;
    
    // Mencari Nilai Grade dan Predikat
    if ($_nTotal <= 35) {
        $_range = 'E';
        $_predikat = 'Sangat Kurang';

    } elseif ($_nTotal <= 55) {
        $_range = 'D';
        $_predikat = 'Kurang';

    } elseif ($_nTotal <= 69) {
        $_range = 'C';
        $_predikat = 'Cukup';

    } elseif ($_nTotal <= 84) {
        $_range = 'B';
        $_predikat = 'Baik';

    } elseif ($_nTotal <= 100) {
        $_range = 'A';
        $_predikat = 'Sangat Baik';

    } else{
        $_range = 'I';
        $_predikat = 'Tidak Ada';
    }

    // Menetukan Keterangan
    if ($_nTotal > 55 && $_nTotal <= 100) {
        $_ketsis = 'Lulus';
    } else {
        $_ketsis = 'Tidak Lulus';
    }

    
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nilai Siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            body {
                background-image: linear-gradient( 109.6deg,  rgba(221,221,221,1) 11.2%, rgba(221,221,221,1) 34%, rgba(187,187,187,1) 79.8% );
                background-size: cover;
            }

            td,
            th {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Nilai UTS</th>
                    <th scope="col">Nilai UAS</th>
                    <th scope="col">Nilai Tugas</th>
                    <th scope="col">Nilai Rata-Rata</th>
                    <th scope="col">Grande</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Predikat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $_nama ?></td>
                    <td><?= $_matkul ?></td>
                    <td><?= $_uts ?></td>
                    <td><?= $_uas ?></td>
                    <td><?= $_tugas ?></td>
                    <td><?= number_format ($_nTotal, 1, ',') ?></td>
                    <td><?= $_range ?></td>
                    <td><?= $_ketsis ?></td>
                    <td><?= $_predikat ?></td>
                </tr>
        </table>
        <div class="text-center mt-5">
            <a class="btn btn-warning px-4 py-2 text-light" href="form_nilai.php" role="button">Back</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>

    </html>
    <?php
    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_uts = $_POST['uts'];
    $_uas = $_POST['uas'];
    $_tugas = $_POST['tugas'];

    $_nTotal = (0.30 * $_POST['uts']) + (0.35 * $_POST['uas']) + (0.35 * $_POST['tugas']);
    if ($_nTotal >= 0 && $_nTotal <= 35) {
        $_range = 'E';
    } elseif ($_nTotal >= 36 && $_nTotal <= 55) {
        $_range = 'D';
    } elseif ($_nTotal >= 56 && $_nTotal <= 69) {
        $_range = 'C';
    } elseif ($_nTotal >= 70 && $_nTotal <= 84) {
        $_range = 'B';
    } elseif ($_nTotal >= 85 && $_nTotal <= 100) {
        $_range = 'A';
    } else {
        $_range = 'I';
    }

    if ($_nTotal > 55) {
        $_ketsis = 'Lulus';
    } else {
        $_ketsis = 'Tidak Lulus';
    }

    switch ($_range) {
        case $_range == 'A':
            $_predikat = "Sangat Memuaskan";
            break;
        case $_range == 'B':
            $_predikat = "Memuaskan";
            break;
        case $_range == 'C':
            $_predikat = "Cukup";
            break;
        case $_range == 'D':
            $_predikat = "Kurang";
            break;
        case $_range == 'E':
            $_predikat = "Sangat Kurang";
            break;
        case $_range == 'I':
            $_predikat = "Tidak Ada";
            break;
        default:
            echo ' ' ;
            break;
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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
                    <th scope="col">Total Nilai</th>
                    <th scope="col">Grande</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Predikart</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $_nama ?></td>
                    <td><?= $_matkul ?></td>
                    <td><?= $_uts ?></td>
                    <td><?= $_uas ?></td>
                    <td><?= $_tugas ?></td>
                    <td><?= ((int)$_nTotal) ?></td>
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
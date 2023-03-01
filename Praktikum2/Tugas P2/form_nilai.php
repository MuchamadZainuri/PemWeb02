<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2-Pertemuan2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: linear-gradient( 109.6deg,  rgba(221,221,221,1) 11.2%, rgba(221,221,221,1) 34%, rgba(187,187,187,1) 79.8% );">
    <header style="background-color: #f1f2f3; padding: 10px;">
        Sistem Penilaian
    </header>
    <div class="pt-4 px-3" style="border-bottom: 5px solid white;">
        <h2>Form Nilai Siswa</h2>
    </div>
    <form method="POST" action="nilai_siswa.php" style="margin: 14.5vh 0;">
        <div class="form-group row" style="margin-left: 8em;">
            <label for="nama" class="col-4 col-form-label" style="text-align:end;">Nama Lengkap</label>
            <div class="col-4">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row" style="margin-left: 8em;">
            <label for="matkul" class="col-4 col-form-label" style="text-align:end;">Mata Kuliah</label>
            <div class=" col-4">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="ddp">Dasar Dasar Pemrograman</option>
                    <option value="jarkom">Jaringan Komputer</option>
                    <option value="basdat">Basis Data</option>
                </select>
            </div>
        </div>
        <div class="form-group row" style="margin-left: 8em;">
            <label for="uts" class="col-4 col-form-label" style="text-align:end;">Nilai UTS</label>
            <div class="col-2">
                <input id="uts" name="uts" placeholder="Nilai UTS" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row" style="margin-left: 8em;">
            <label for="uas" class="col-4 col-form-label" style="text-align:end;">Nilai UAS</label>
            <div class="col-2">
                <input id="uas" name="uas" placeholder="Nilai UAS" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row" style="margin-left: 8em;">
            <label for="tugas" class="col-4 col-form-label" style="text-align:end;">Nilai Tugas/Praktikum</label>
            <div class="col-2">
                <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row" style="margin-left: 8em;">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
    <footer style="background-color: #f1f2f3; padding: 10px;">
        Develop By @Jayman &#169;2023
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum-ke2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form class ="m-3" method="POST" action="index2.php">
    <div class="form-group row">
        <label for="namalengkap" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
        <input id="namalengkap" name="namalengkap" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
            <option value="Dasar Dasar Pemrograman">DDP</option>
            <option value="Dasar My SQL/ Maria DB">Basis data</option>
            <option value="Pemrograman Web">PemWeb02</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
        <input id="uts" name="uts" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
        <input id="uas" name="uas" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
        <div class="col-8">
        <input id="tugas" name="tugas" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
</body>
</html>
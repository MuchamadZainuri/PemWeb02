<?php
include_once "template/header.php";
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Silahkan Isi Form Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tabel Siswa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form>
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div>
                        <input id="text" name="text" placeholder="Nama Siswa" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Kelas</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="kelas" id="kelas_0" type="radio" required="required" class="custom-control-input" value="I">
                        <label for="kelas_0" class="custom-control-label">I</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="kelas" id="kelas_1" type="radio" required="required" class="custom-control-input" value="II">
                        <label for="kelas_1" class="custom-control-label">II</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="kelas" id="kelas_2" type="radio" required="required" class="custom-control-input" value="III">
                        <label for="kelas_2" class="custom-control-label">III</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="kelas" id="kelas_3" type="radio" required="required" class="custom-control-input" value="IV">
                        <label for="kelas_3" class="custom-control-label">IV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="kelas" id="kelas_4" type="radio" required="required" class="custom-control-input" value="V">
                        <label for="kelas_4" class="custom-control-label">V</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="kelas" id="kelas_5" type="radio" required="required" class="custom-control-input" value="VI">
                        <label for="kelas_5" class="custom-control-label">VI</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Mata Pelajaran</label>
                <div class="col-8">
                    <select id="select" name="select" class="custom-select">
                        <option value="Bahasa Sunda">Bahasa Sunda</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="SIUUUUU">Bahasa China</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label>
                <div class="col-8">
                    <input id="nilai" name="nilai" placeholder="Nilai Siswa" type="number" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="catatan" class="col-4 col-form-label">Catatan</label>
                <div class="col-8">
                    <textarea id="catatan" name="catatan" cols="40" rows="4" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>


        <?php
        include_once "template/footer.php";
        ?>
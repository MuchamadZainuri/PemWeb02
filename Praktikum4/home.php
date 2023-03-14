<?php
include_once "template/header.php";
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Selamat Datang Di halaman Admin</h1>
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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Catatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td class="tengah">Sigit Rendang</td>
                    <td class="tengah">II</td>
                    <td class="tengah">Matematika</td>
                    <td class="tengah">90</td>
                    <td>Kurang Kurangin Menghitung.</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td class="tengah">Ujang Baso</td>
                    <td class="tengah">III</td>
                    <td class="tengah">Bahasa Sunda</td>
                    <td class="tengah">80</td>
                    <td>Belajar Bahasa Sunda itu mudah kalo kamu orang sunda.</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td class="tengah">Aan Kecap</td>
                    <td class="tengah">IV</td>
                    <td class="tengah">Olahraga</td>
                    <td class="tengah">75</td>
                    <td>Kamu terlalu banyak nonton anime mending nonton one piece.</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td class="tengah">Rijat Acumalaka</td>
                    <td class="tengah">VII</td>
                    <td class="tengah">Fisika</td>
                    <td class="tengah">50</td>
                    <td>Kamu Tidak Niat Belajar, Kamu selalu main summertime saga di kelas.</td>
                </tr>
            </tbody>
        </table>

        <?php
        include_once "template/footer.php";
        ?>
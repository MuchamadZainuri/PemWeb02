<?php
require "class_bmipasien.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data BMI Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
        th,td{
            text-align: center;
        }
    </style>
</head>
<div class="container-fluid">
    <div class="row head">
        <div class="col-md-12">
            <header>Data BMI Pasien</header>
        </div>
    </div>
    <div class="row main">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <a href="index.php" class="btn btn-success mb-3">Tambah pelanggan</a>
            <table class="table table-striped">
                <thead>
                    <tr class="table-danger">
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Berat (Kg)</th>
                        <th scope="col">Tinggi (cm)</th>
                        <th scope="col">BMI</th>
                        <th scope="col">Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Muchamad Zainuri</td>
                        <td>Laki-Laki</td>
                        <td>19</td>
                        <td>60</td>
                        <td>170</td>
                        <td>20,76</td>
                        <td>Normal (ideal)</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Dimas Dwi Nugroho</td>
                        <td>Laki-Laki</td>
                        <td>21</td>
                        <td>65</td>
                        <td>165</td>
                        <td>23,88</td>
                        <td>Normal (ideal)</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Aufar Kharina Nadhira</td>
                        <td>Perempuan</td>
                        <td>18</td>
                        <td>62</td>
                        <td>168</td>
                        <td>21,97</td>
                        <td>Normal (ideal)</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <div class="row foot">
        <div class="col-md-12">
            <footer>Copyright &copy; 2023 <a href="">JayZee </a>. All rights reserved.</footer>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
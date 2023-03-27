<?php
require_once '../dbkoneksi.php';
if (!isset($_GET['idcret'])) {
  header('location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Produk</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .header,
    .footer {
      background-image: linear-gradient(94.3deg, rgba(26, 33, 64, 1) 10.9%, rgba(81, 84, 115, 1) 87.1%);
      color: #f1f2f3;
      padding: 10px 0;
      text-align: center;
    }

    .main {
      padding-top: 9%;
      min-height: 593px;
    }

    body {
      background-color: #f1f2f3;
    }

    svg.one {
      position: absolute;
      top: -15%;
      left: -10%;
      width: 32%;
      z-index: -1;
      opacity: 0.5;
    }

    svg.two {
      position: fixed;
      width: 35%;
      right: -10%;
      bottom: -15%;
      z-index: -2;
      opacity: 0.3;
    }

    div.footer>strong>a {
      color: #000;
    }

    a {
      text-decoration: none;
      color: #f1f2f3;
    }

    a:hover {
      color: #f1f2f3;
      text-decoration: none;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 header">
        <a href="../index.php"> Form Produk </a>
      </div>
    </div>
    <div class="row main">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
        <form method="POST" action="proses_produk.php">
          <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
              <input id="kode" name="kode" placeholder="Kode Produk" type="text" class="form-control" required="required" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
              <input id="nama" name="nama" placeholder="Nama Produk" type="text" class="form-control" required="required" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
            <div class="col-8">
              <input name="harga_beli" id="harga_beli" type="text" require class="form-control" value="" placeholder="000000" require>
            </div>
          </div>
          <div class="form-group row">
            <label for="stok" class="col-4 col-form-label">Stok</label>
            <div class="col-8">
              <input id="stok" name="stok" placeholder="0" type="text" class="form-control" required="required" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label>
            <div class="col-8">
              <input id="min_stok" name="min_stok" placeholder="0" type="text" class="form-control" required="required" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="jenis" class="col-4 col-form-label"> Jenis Produk</label>
            <div class="col-8">
              <?php
              $sqljenis = "SELECT * FROM jenis_produk";
              $rsjenis = $dbh->query($sqljenis);
              ?>
              <select id="jenis" name="jenis" class="custom-select">
                <?php
                foreach ($rsjenis as $rowjenis) {
                ?>
                  <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="proses" type="submit" class="btn btn-primary" style="background-color:#1A2140;border-color:#1A2140;" value="Simpan">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-3">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 footer">
        <strong>Copyright &copy; 2023 <a href="https://adminlte.io">JayZee </a>.</strong> All rights reserved.
      </div>
    </div>
    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="one">
      <path fill="#283159" d="M68.1,-19.1C76.9,5.1,65,39.1,44.5,51.8C23.9,64.5,-5.3,56,-29.2,38.9C-53.2,21.8,-72,-3.9,-66.2,-23.8C-60.5,-43.8,-30.2,-58.2,-0.3,-58.1C29.6,-58,59.2,-43.4,68.1,-19.1Z" transform="translate(100 100)" />
    </svg>
    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="two">
      <path fill="#4D506F" d="M65.8,-16.6C74.7,6,64,39.7,43.1,53.5C22.1,67.4,-9,61.4,-31.1,44.9C-53.1,28.3,-66.1,1.3,-59.3,-18.2C-52.6,-37.7,-26.3,-49.8,1.1,-50.1C28.5,-50.5,56.9,-39.1,65.8,-16.6Z" transform="translate(100 100)" />
    </svg>
  </div>
</body>

</html>
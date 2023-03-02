<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1-Pertemuan2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-8">
                <div class="border-bottom">
                <h2>Belanja Online</h2>
                </div>
                <!-- Form Start -->
                <form method="post" class="mt-4 mb-4">
                    <div class="form-group row">
                    <label for="custumer" class="col-4 col-form-label"><b>Customer</b></label> 
                    <div class="col-8">
                    <input id="customer" name="customer" type="text" class="form-control" placeholder="Nama Customer">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4"><b>Pilih Produk</b></label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci"> 
                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label"><b>jumlah</b></label> 
                    <div class="col-8">
                    <input id="jumlah" name="jumlah" type="number" class="form-control" placeholder="Jumlah">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
                </form>
                <!-- End Form -->
            </div>
            <div class="col-4">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                    <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
                </ul>
            </div>
        </div>

        <?php if(isset($_POST['submit'])) : ?>
            
            <br>
            <br>
            Nama Customer : <?= $_POST['customer'] ?>
            <br>
            Produk Pilihan : <?= $_POST['produk'] ?>
            <br>
            Jumlah Beli : <?= $_POST['jumlah'] ?>
            <br>

            <?php
                if ($_POST['produk'] == 'tv' && $_POST['jumlah'] >= 1){
                    $harga = 4200000 * $_POST['jumlah'];
                    echo 'TOTAL HARGA :' . ' ' . number_format($harga,0,".",".");
                }
                elseif ($_POST['produk'] == 'kulkas' && $_POST['jumlah'] >=1){
                    $harga = 3100000 * $_POST['jumlah'];
                    echo 'TOTAL HARGA :' . ' ' . number_format($harga,0,".",".");
                }
                elseif ($_POST['produk'] == 'mesincuci' && $_POST['jumlah'] >=1){
                    $harga = 3800000 * $_POST['jumlah'];
                    echo 'TOTAL HARGA :' . ' ' . number_format($harga,0,".",".");
                }
                else {
                    echo 'Eror.. "Jumlah Tidak Sesuai"';
                }

            ?>
        <?php endif ?>
    </div>
</body>
</html>
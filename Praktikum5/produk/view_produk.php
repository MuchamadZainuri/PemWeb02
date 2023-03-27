<?php
require_once '../dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        p.input-group-text {
            background-color: #fff;
            width: 330px;
        }

        div.input-group-text {
            width: 150px;
        }

        .header,
        .footer {
            background-image: linear-gradient(94.3deg, rgba(26, 33, 64, 1) 10.9%, rgba(81, 84, 115, 1) 87.1%);
            color: #f1f2f3;
            padding: 10px 0;
            text-align: center;
        }

        .main {
            padding-top: 7%;
            min-height: 505px;
        }

        body {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='860' preserveAspectRatio='none' viewBox='0 0 1440 860'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1049%26quot%3b)' fill='none'%3e%3crect width='1440' height='860' x='0' y='0' fill='rgba(140%2c 145%2c 166%2c 0.81)'%3e%3c/rect%3e%3cpath d='M0%2c431.996C78.92%2c422.653%2c132.006%2c352.394%2c198.456%2c308.804C264.141%2c265.715%2c356.524%2c249.174%2c388.252%2c177.309C419.962%2c105.485%2c378.323%2c24.299%2c357.486%2c-51.399C339.073%2c-118.292%2c317.787%2c-183.607%2c274.074%2c-237.486C229.344%2c-292.619%2c176.071%2c-349.374%2c106.08%2c-361.275C37.78%2c-372.889%2c-20.089%2c-313.681%2c-87.8%2c-299.02C-163.067%2c-282.723%2c-250.436%2c-316.439%2c-312.37%2c-270.67C-376.341%2c-223.395%2c-399.759%2c-137.83%2c-412.227%2c-59.269C-424.813%2c20.04%2c-414.952%2c101.241%2c-383.09%2c174.951C-350.802%2c249.646%2c-298.714%2c314.323%2c-231.141%2c359.663C-162.716%2c405.575%2c-81.83%2c441.684%2c0%2c431.996' fill='rgba(107%2c 113%2c 138%2c 0.81)'%3e%3c/path%3e%3cpath d='M1440 1242.1109999999999C1511.915 1236.258 1577.436 1207.1970000000001 1639.71 1170.755 1704.33 1132.94 1769.8980000000001 1092.662 1806.753 1027.49 1845.288 959.346 1865.432 877.711 1848.67 801.242 1832.346 726.7719999999999 1773.405 671.35 1717.359 619.667 1666.27 572.5550000000001 1606.962 538.0070000000001 1540.654 517.204 1473.364 496.093 1401.062 477.22 1334.129 499.438 1268.0140000000001 521.385 1224.713 581.3969999999999 1181.847 636.309 1140.897 688.767 1097.703 743.647 1091.751 809.929 1085.92 874.854 1129.984 930.421 1149.859 992.5029999999999 1173.021 1064.852 1160.658 1155.513 1218.246 1205.056 1276.232 1254.942 1363.76 1248.316 1440 1242.1109999999999' fill='rgba(175%2c 178%2c 193%2c 0.81)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1049'%3e%3crect width='1440' height='860' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
            background-size: 100% 100%;
        }

        div.footer>strong>a {
            color: #000;
        }

        div.input-group {
            margin-bottom: 15px;
            display: flex;
            justify-content: center;
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
                <a href="../index.php"> Data Produk </a>
            </div>
        </div>
        <div class="row main">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">ID</div>
                    </div>
                    <p class="input-group-text"><?= $row['id'] ?></p>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Kode</div>
                    </div>
                    <p class="input-group-text"><?= $row['kode'] ?></p>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Nama</div>
                    </div>
                    <p class="input-group-text"><?= $row['nama'] ?></p>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Harga Jual</div>
                    </div>
                    <p class="input-group-text"><?= $row['harga_jual'] ?></p>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Harga Beli</div>
                    </div>
                    <p class="input-group-text"><?= $row['harga_beli'] ?></p>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Stok</div>
                    </div>
                    <p class="input-group-text"><?= $row['stok'] ?></p>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Minimum Stok</div>
                    </div>
                    <p class="input-group-text"><?= $row['min_stok'] ?></p>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Jenis Produk</div>
                    </div>
                    <p class="input-group-text"><?= $row['jenis_produk_id'] ?></p>
                </div>
            </div>
            <div class="row main">
                <div class="col-md-3">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 footer">
                <strong>Copyright &copy; 2023 <a href="https://adminlte.io">JayZee </a>.</strong> All rights reserved.
            </div>
        </div>
    </div>

</body>

</html>
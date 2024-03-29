<?php
require 'dbkoneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM pelanggan WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $email = $_POST['email'];
        $kartu_id = $_POST['kartu_id'];

        $sql = "UPDATE pelanggan SET kode = :kode, nama = :nama, jk = :jk, tmp_lahir = :tmp_lahir,
                        tgl_lahir = :tgl_lahir, email = :email, kartu_id = :kartu_id WHERE id = :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':kode', $kode);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':jk', $jk);
        $stmt->bindParam(':tmp_lahir', $tmp_lahir);
        $stmt->bindParam(':tgl_lahir', $tgl_lahir);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':kartu_id', $kartu_id);

        $stmt->execute();

        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        .row>.card {
            padding: 10.5px 0;
            border-radius: 0;
            background-color: #f1f2f3;
        }

        div.main {
            min-height: 77vh;
        }

        .head {
            margin-bottom: 8.5vh;
        }

        body {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='860' preserveAspectRatio='none' viewBox='0 0 1440 860'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1002%26quot%3b)' fill='none'%3e%3crect width='1440' height='860' x='0' y='0' fill='rgba(208%2c 210%2c 220%2c 0.81)'%3e%3c/rect%3e%3cpath d='M0%2c431.996C78.92%2c422.653%2c132.006%2c352.394%2c198.456%2c308.804C264.141%2c265.715%2c356.524%2c249.174%2c388.252%2c177.309C419.962%2c105.485%2c378.323%2c24.299%2c357.486%2c-51.399C339.073%2c-118.292%2c317.787%2c-183.607%2c274.074%2c-237.486C229.344%2c-292.619%2c176.071%2c-349.374%2c106.08%2c-361.275C37.78%2c-372.889%2c-20.089%2c-313.681%2c-87.8%2c-299.02C-163.067%2c-282.723%2c-250.436%2c-316.439%2c-312.37%2c-270.67C-376.341%2c-223.395%2c-399.759%2c-137.83%2c-412.227%2c-59.269C-424.813%2c20.04%2c-414.952%2c101.241%2c-383.09%2c174.951C-350.802%2c249.646%2c-298.714%2c314.323%2c-231.141%2c359.663C-162.716%2c405.575%2c-81.83%2c441.684%2c0%2c431.996' fill='rgba(159%2c 163%2c 184%2c 0.81)'%3e%3c/path%3e%3cpath d='M1440 1242.1109999999999C1511.915 1236.258 1577.436 1207.1970000000001 1639.71 1170.755 1704.33 1132.94 1769.8980000000001 1092.662 1806.753 1027.49 1845.288 959.346 1865.432 877.711 1848.67 801.242 1832.346 726.7719999999999 1773.405 671.35 1717.359 619.667 1666.27 572.5550000000001 1606.962 538.0070000000001 1540.654 517.204 1473.364 496.093 1401.062 477.22 1334.129 499.438 1268.0140000000001 521.385 1224.713 581.3969999999999 1181.847 636.309 1140.897 688.767 1097.703 743.647 1091.751 809.929 1085.92 874.854 1129.984 930.421 1149.859 992.5029999999999 1173.021 1064.852 1160.658 1155.513 1218.246 1205.056 1276.232 1254.942 1363.76 1248.316 1440 1242.1109999999999' fill='rgba(255%2c 255%2c 255%2c 0.81)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1002'%3e%3crect width='1440' height='860' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
            background-size: cover;
        }

        select {
            border-style: none;
        }
        a{
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row head">
            <div class="col-md-12 text-center card">
                <div><a href="index.php"> Form Edit</a></div>
            </div>
        </div>
        <div class="row main">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <form method="POST">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Kode</div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input id="kode" name="kode" placeholder="Kode Pelanggan" type="text" class="form-control" required="required" value="<?= $row['kode'] ?>">
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Nama</div>
                        </div>
                        <input id="nama" name="nama" placeholder="Nama Pelanggan" type="text" class="form-control" required="required" value="<?= $row['nama'] ?>">
                    </div>
                    <br>
                    <div class="input-group">
                        <label class="col-3 input-group-text">Jenis Kelamin</label>
                        <div class="col-9 input-group-text">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jk" id="jk1" type="radio" require class="custom-control-input" value="L" checked>
                                <label for="jk1" class="custom-control-label">Laki-Laki</label>
                                <input name="jk" id="jk0" type="radio" require class="custom-control-input" value="P">
                                <label for="jk0" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tempat Lahir</div>
                        </div>
                        <input id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir" type="text" class="form-control" required="required" value="<?= $row['tmp_lahir'] ?>">
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tanggal Lahir</div>
                        </div>
                        <input id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" type="date" class="form-control" required="required" value="<?= $row['tgl_lahir'] ?>">
                    </div>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Email</div>
                        </div>
                        <input id="email" name="email" type="email" required="required" class="form-control" value="<?= $row['email'] ?>">
                    </div>
                    <br>
                    <div class="input-group">
                        <label for="kartu_id" class="col-3 input-group-text"> Kartu</label>
                        <div class="col-9 input-group-text">
                            <?php
                            $sqljenis = "SELECT * FROM kartu";
                            $rowjenis = $conn->prepare($sqljenis);
                            $rowjenis->execute();
                            ?>
                            <select id="kartu_id" name="kartu_id" class="custom-select">
                                <?php
                                while ($jenis = $rowjenis->fetch(PDO::FETCH_ASSOC)) {
                                    $sel = ($jenis['id'] == $row['kartu_id']) ? "selected" : "";
                                ?>
                                    <option value="<?= $jenis['id'] ?>" <?= $sel ?>> <?= $jenis['nama']  ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="offset-5 col-6">
                            <button name="submit" type="submit" class="btn btn-secondary" onclick="if(!confirm('Anda Yakin Ingin Mengubah Data Pelanggan <?= $row['nama'] ?>?')) {return false}">Ubah Data</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="row foot">
            <div class="col-md-12 text-center card">
                <div>Footer</div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <div class="container">
        <!-- Image and text -->
        <nav class="navbar navbar-dark" style="background-color:#142266;">
            <a class="navbar-brand" href="#">
                <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                WEB PENJUALAN BLK BANDA ACEH
            </a>
        </nav>
        <br>
        <div class="row">
            <div class="col-md-6">
                <!-- untuk inputan nilai -->

                <form action="" method="POST">
                    <div class="form-group mb-2">
                        <label for="staticEmail2">Jumlah Data Barang : </label> <br>
                        <input type="text" class="form-control" id="staticEmail2" placeholder="Masukkan Jumlah Data" name="jumlah">
                    </div>
                    <div class="form-group mb-2">
                        <input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
                    </div>
                </form>

                <?php
                if (isset($_POST['tambah'])) {
                ?>
                    <form action="" method="POST">
                        <?php
                        $jumlah = $_POST['jumlah'];
                        for ($a = 1; $a <= $jumlah; $a++) {
                        ?>

                            <b>Data Barang Ke – <?php echo $a; ?></b><br>
                            <div class="form-group mb-2">
                                <label for="staticEmail2">Nama Barang : </label>
                                <input type="text" class="form-control" id="staticEmail2" placeholder="Masukkan Nama Barang" name="nama_barang<?php echo !empty($a) ? $a : ''; ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="inputPassword2">Harga Barang : </label>
                                <input type="number" class="form-control" id="inputPassword2" value="0" placeholder="Harga Barang" name="harga<?php echo !empty($a) ? $a : ''; ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="inputPassword2">Jumlah</label>
                                <input type="number" class="form-control" id="inputPassword2" value="0" placeholder="Jumlah Barang" name="jumlah<?php echo $a; ?>">
                            </div>
                        <?php
                        }
                        ?>

                        <button type="submit" class="btn btn-primary mb-2" name="total">Cek Harga</button>
                    </form>

                <?php
                }
                ?>
            </div>
            <!-- prosesnya -->
            <?php

            if (isset($_POST['total'])) {
                $nama_brg1 = !empty($_POST['nama_barang1']) ? $_POST['nama_barang1'] : '';
                $harga1 = !empty($_POST['harga1']) ? $_POST['harga1'] : '';
                $jumlah1 = !empty($_POST['jumlah1']) ? $_POST['jumlah1'] : '';

                $nama_brg2 = !empty($_POST['nama_barang2']) ? $_POST['nama_barang2'] : '';
                $harga2 = !empty($_POST['harga2']) ? $_POST['harga2'] : '';
                $jumlah2 = !empty($_POST['jumlah2']) ? $_POST['jumlah2'] : '';

                $nama_brg3 = !empty($_POST['nama_barang3']) ? $_POST['nama_barang3'] : '';
                $harga3 = !empty($_POST['harga3']) ? $_POST['harga3'] : '';
                $jumlah3 = !empty($_POST['jumlah3']) ? $_POST['jumlah3'] : '';

                $nama_brg4 = !empty($_POST['nama_barang4']) ? $_POST['nama_barang4'] : '';
                $harga4 = !empty($_POST['harga4']) ? $_POST['harga4'] : '';
                $jumlah4 = !empty($_POST['jumlah4']) ? $_POST['jumlah4'] : '';

                $nama_brg5 = !empty($_POST['nama_barang5']) ? $_POST['nama_barang5'] : '';
                $harga5 = !empty($_POST['harga5']) ? $_POST['harga5'] : '';
                $jumlah5 = !empty($_POST['jumlah5']) ? $_POST['jumlah5'] : '';




                $hasil1 = !empty($harga1 * $jumlah1) ? $harga1 * $jumlah1 : '';
                $hasil2 = !empty($harga2 * $jumlah2) ? $harga2 * $jumlah2 : '';
                $hasil3 = !empty($harga3 * $jumlah3) ? $harga3 * $jumlah3 : '';
                $hasil4 = !empty($harga4 * $jumlah4) ? $harga4 * $jumlah4 : '';
                $hasil5 = !empty($harga5 * $jumlah5) ? $harga5 * $jumlah5 : '';

                $total_hasil = !empty($hasil1 + $hasil2 + $hasil3 + $hasil4 + $hasil5) ? $hasil1 + $hasil2 + $hasil3 + $hasil4 + $hasil5 : '';

            ?>

                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                    <?php echo ""  . !empty($total_hasil) ? "Barang Yang Dibeli yaitu berupa : <br> 1.$nama_brg1 x $jumlah1 dengan harga : $harga1 <br> 2.$nama_brg2 x $jumlah2 dengan harga : $harga2 <br> 3.$nama_brg3 x $jumlah3 dengan harga : $harga3 <br> 4.$nama_brg4 x $jumlah4 dengan harga : $harga4 <br> 5.$nama_brg5 x $jumlah5 dengan harga : $harga5 <br> Total Harga yang Harus di Bayar Rp." . $total_hasil : '';
                } ?>
                    </div>

                </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
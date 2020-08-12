<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>PEMBELIAN BARANG</h1>

    <?php
    $nama = "Budi";
    $uang = 60000;
    $aqua = 3000;
    $mie_instan = 2500;
    $saos = 5000;
    $jumlah_aqua = 2;
    $total_aqua = $aqua * $jumlah_aqua;
    $jumlah_mie = 3;
    $jumlah_saos = 1;

    $total_harga = ($aqua * $jumlah_aqua) + ($mie_instan * $jumlah_mie) + ($saos * $jumlah_saos);
    $pengembalian = $uang - $total_harga;

    echo "Nama $nama <br>";
    echo "Uang yang dibawa $uang <br>";
    echo "Jumlah Pembelian Aqua Sebanyak $jumlah_aqua, dengan total $total_aqua <br>";
    echo "Jumlah Pembelian Mie $mie_instan <br>";
    echo "Jumlah Pembelian Saos $saos <br>";

    echo "$nama Harus membayar Sebesar Rp.$total_harga <br> dan Uang Kembalian yang diperoleh Budi adalah sebesar Rp. $pengembalian ";

    ?>

</body>

</html>
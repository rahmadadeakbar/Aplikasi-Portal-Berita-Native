<html>

<head>
    <title></title>
    <meta>
</head>

<body>
    <h1>Menampilkan biodata</h1>
    <?php
    $nim = "140212011";
    $nama = "Rahmad Ade Akbar";
    $umur = 24;
    $nilai = 80;
    $status = FALSE;


    echo "NIM :" . $nim . "<br>";
    echo "Nama:" . $nama . "<br>";
    echo "Umur:" . $umur . "<br>";
    echo "$nilai <br>";
    printf("Nilai :%.2f <br>", $nilai);
    if ($status) {
        echo "Anda Masih Kuliah ";
    } else {
        echo "Anda Sudah Tidak Kuliah ";
    }

    ?>

    <!-- konstant -->

    <hr>
    <h1>Menampilkan data menggunakan variable konstanta</h1>

    <?php
    define('NAMA', 'Rahmad Ade Akbar');
    define('alamat', 'Banda Aceh');
    define('no_hp', '082361001252');

    echo "Nama : " . NAMA . "<br> Alamat : <br>" . alamat;
    ?>
</body>

</html>
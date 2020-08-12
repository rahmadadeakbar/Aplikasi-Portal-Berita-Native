<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // menampilkan html
    $a = 1;
    for ($a = 1; $a <= 5; $a++) {
    ?>

        <form action="">
            <label for="">Nama pendidikan :</label>
            <input type="text"><br>
            <label for="">Jenjang Pendidikan :</label>
            <input type="text"><br>
            <label for="">Tanun Masuk :</label>
            <input type="text"><br>
            <label for="">Tahun Keluar :</label>
            <input type="text">
        </form>
        <br>

    <?php
    }
    ?>

    <?php
    // menampilkan angka
    $a = 1;

    for ($a = 1; $a <= 5; $a++) {

        echo "$a";
    }
    ?>

    <?php
    // menampilkan string
    $nama = 1;

    for ($nama = 1; $nama < 10; $nama++) {
        # code...
        echo "Rahmad Ade Akbar <br>";
    }
    ?>


    <!-- foreach -->

    <?php
    // menampilkan jumlah nilai yang sama sebanyak jumlah array

    $hewan = array(
        "ayam",
        "Kambing",
        "Kucing",
        "Sapi"
    );

    foreach ($hewan as $key => $data) {

        echo "" . $hewan[2];
    }
    ?>

    <?php
    // menampilkan jumlah angka yang dipilih dengan array sebanyak jumlah array
    $angka = array(
        1,
        2,
        3,
        4
    );

    foreach ($hewan as $key => $data) {

        echo "" . $angka[2] * $angka[3];
    }

    ?>

    <?php
    // menampilkan jumlah nilai yang sama sebanyak jumlah array

    $hewan = array(
        "ayam",
        "Kambing",
        "Kucing",
        "Sapi"
    );

    foreach ($hewan as $key => $data) {

        echo "" . $data[1];
    }
    ?>


</body>

</html>
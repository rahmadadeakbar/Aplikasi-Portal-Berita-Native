<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>MENAMPILKAN BIL GENAP 1-20</h1>
    <?php

    // perulangan menampilkan genap 1-20
    for ($genap = 0; $genap <= 20; $genap += 2) {
        # code...
        echo "$genap";
    }

    ?>

    <hr>
    <h1>Menampilkan Bilangan Ganjil 1-20</h1>
    <?php
    // menampilkan bil ganjil 1-20

    for ($ganjil = 1; $ganjil <= 20; $ganjil += 2) {
        # code...
        echo "$ganjil";
    }
    ?>

    <hr>
    <h1>Menampilkan looping kali 2</h1>
    <?php
    for ($i = 2; $i <= 64; $i *= 2) {
        # code...
        echo "" . $i;
    }
    ?>

    <hr>
    <h1>Menampilkan looping kali 2</h1>
    <?php
    for ($i = 2; $i <= 64; $i *= 2) {
        # code...
        echo "" . $i;
    }
    ?>

    <hr>
    <h1>Menampilkan looping kali 2 +1</h1>
    <?php
    $nilai = 1;
    for ($i = 1; $i <= 128; $i *= 2) {
        # code...
        echo "" . $i - $nilai;
    }

    ?>


</body>

</html>
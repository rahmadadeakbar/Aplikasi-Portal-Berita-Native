<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Operator -->
    <h1>Operator Menampilkan Gaji Karyawan</h1>
    <?php
    //komentar
    /* komentar */
    #komentar
    $gaji = 3000000;
    $pajak = 0.3;
    $hasil = $gaji - ($gaji * $pajak);
    echo "Gaji yang dibawa pulang adalah sebesar : $hasil";
    ?>

    <hr>

    <h1>Operator Perbandingan</h1>
    <?php
    $a = 5;
    $b = 4;
    echo "Apakah $a == $b : " . ($a == $b);
    echo "<br> Apakah $a != $b : " . ($a != $b);
    echo "<br> Apakah $a > $b : " . ($a > $b);
    echo "<br> Apakah $a < $b : " . ($a < $b);
    echo "<br> Apakah ($a == $b) && ($a > $b) : " . (($a != $b) && ($a > $b));
    echo "<br> Apakah ($a == $b) || ($a > $b) : " . (($a != $b) || ($a > $b));
    ?>
</body>

</html>
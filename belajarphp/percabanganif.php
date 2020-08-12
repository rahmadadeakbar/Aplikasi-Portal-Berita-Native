<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // input
    $nama = "Andi";
    $quiz = 10;
    $harian1 = 50.73;
    $harian2 = 100;
    $harian3 = 50.73;
    $uts = 60.81;
    $uas = 60;
    $totalharian = ($harian1 + $harian2 + $harian3) / 3;
    $hasil = (($quiz * 0.1) + ($totalharian * 0.2) + ($uts * 0.3) + ($uas * 0.4));

    // output

    echo "Nilai Quiz Anda : $quiz <br>";
    echo "Nilai Harian Anda : $totalharian <br>";
    echo "Nilai Uts Anda : $uts <br>";
    echo "Nilai Uas Anda : $uas <br>";
    printf("Nilai Hasil Keseluruhan : %.2f <br>", $hasil);

    // percabangan

    if ($hasil >= 80) {
        // statement
        echo "Selamat $nama Kamu Mendapat Grade A <br>";
        printf("Nilai Kamu : %.2f <br>", $hasil);
    } else if ($hasil >= 73) {
        echo "Selamat $nama Kamu Mendapat Grade B <br>";
        printf("Nilai Kamu : %.2f <br>", $hasil);
    } else if ($hasil >= 65) {
        echo "Selamat $nama Kamu Mendapat Grade C <br>";
        printf("Nilai Kamu : %.2f <br>", $hasil);
    } else if ($hasil >= 50) {
        echo "$nama Kamu Mendapat Grade D <br> ";
        printf("Nilai Kamu : %.2f <br> Kamu Harus Rajin Belajar", $hasil);
    } else {
        echo " $nama Kamu Mendapat Grade E <br> ";
        printf("Nilai Kamu : %.2f <br> Besok Kamu DO", $hasil);
    }


    ?>

</body>

</html>
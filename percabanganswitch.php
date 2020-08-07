<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>MENENTUKAN NAMA BULAN</h1>
    <?php
    // $bulan="";
    // switch ($bulan) {
    //     case "kamu":
    //         // statement
    //         echo"Anda memilih Bulan Januari";
    //         break;
    //     case "dia":

    //         echo"Anda memilih Bulan Februari";
    //          break;

    //     default:
    //         //
    //         echo"anda belum memilih nama bulan";    
    //         break;
    // }
    ?>
    <?php

    // menggunakan dua switch

    $username = "operator";
    $password = "1111";

    switch ($username == "admin" && $password == "1234") {
        case "admin" && "1234":
            echo "Selamat Datang  $username";
            break;
    }

    switch ($username == "operator" && $password == "1111") {
        case "operator" && "1111":

            echo "Selamat Datang $username ";
            break;
    }
    ?>

    <?php
    // menggunakan metode array
    $username = "operator";
    $password = "1111";

    switch ([$username, $password]) {
        case ["admin", "1234"]:
            // 
            echo "Selamat Datang Admin";
            break;

        case ["operator", "1111"]:
            // 
            echo "Selamat Datang Operator";
            break;

        default:
            # code...
            break;
    }
    ?>

    <?php
    // menggunakan metode TRUE
    $username = "operator";
    $password = "1111";

    switch (TRUE) {
        case ($username == "admin" && $password == "1234"):
            # code...
            echo "Selamat Datang Admin";
            break;

        case ($username == "operator" && $password == "1111"):
            # code...
            echo "Selamat Datang Operator";
            break;

        default:
            # code...
            break;
    }
    ?>



</body>

</html>
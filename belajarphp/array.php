<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    

    <?php 
        $nama="Jonny";
        $hewan=array("kambing","sapi","kerbau","Ayam");
        $tumbuhan=array("Rumput","Mawar","Sawi","Bayam");
        $makanan=array("Ayam goreng","Nasi Goreng","telor puyoh","dedak");

        echo"$nama membeli $hewan[3] dan makanannya yaitu $makanan[3] <br>";

        echo"".$hewan[0][2].$hewan[1][1].$hewan[2][5];

    ?>
</body>
</html>
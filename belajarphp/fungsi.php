<?php
function cetak_ganjil()
{
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2 == 1) {
            echo "$i ";
        }
    }
} //pemanggilan fungsi 
cetak_ganjil();
?>

<hr>



<?php
function cetak_aja($awal, $akhir)
{
    for ($i = $awal; $i < $akhir; $i++) {
        if ($i % 2 == 1) {
            echo "$i ";
        }
    }
} //pemanggilan fungsi 
$a = 10;
$b = 50;
echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
cetak_aja($a, $b);
?>
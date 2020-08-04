<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA WITH METODE POST</title>
</head>
<body>

    <form action="" method="POST">
        <label for=""> Nama :</label>
        <input type="text" name="nama_lengkap">
        <br>
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl">

        <input type="submit" name="input" value="Tampilkan">
    </form>

    <!-- proses dalam satu file -->
    <?php 

        if(isset($_POST["input"])){

            $nama =$_POST["nama_lengkap"];
            $tanggal =$_POST["tgl"];

            echo"$nama <br> $tanggal";
        }


    ?>
    
</body>
</html>
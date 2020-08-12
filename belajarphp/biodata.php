<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA WITH METODE POST</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <center>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for=""> Nama :</label>
            <input type="text" name="nama_lengkap">
            <br>

            <label for="">Tanggal Lahir</label>
            <input type="date" name="tgl">
            <br>

            <label for="">Tempat Lahir</label>
            <input type="text" name="tpt_lahir">
            <br>

            <label for="">Jenis Kelamin :</label>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki - Laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
            <br>

            <label for="">Hobby :</label>
            <input type="checkbox" name="membaca" value="membaca">Membaca
            <input type="checkbox" name="nonton" value="Nonton">Nonton
            <input type="checkbox" name="ngoding" value="Ngoding">Ngoding
            <br>

            <label for="">Alamat :</label>
            <textarea name="alamat" cols="30" rows="10"></textarea>
            <br>

            <label for="">Kabupaten :</label>
            <select name="kabupaten">
                <option>Pilih Kabupaten</option>
                <option value="Banda Aceh">Banda Aceh</option>
                <option value="Aceh Besar">Aceh besar</option>
                <option value="Sigli">Sigli</option>
            </select>
            <br>

            <label for="">Pendidikan :</label>
            <select name="pendidikan">
                <option>Pilih Pendidikan</option>
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma">SMA</option>
                <option value="smk">SMK</option>
                <option value="s1">S1</option>
            </select>
            <br>

            <label for="">Pekerjaan :</label>
            <input type="text" name="pekerjaan">
            <br>

            <label for="">Agama</label>
            <select name="agama">
                <option>Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
            </select>
            <br>

            <label for="">Foto </label>
            <input type="file" name="foto">
            <br>

            <label for="">Password :</label>
            <input type="password" name="pass">
            <br>

            <label for="">Username :</label>
            <input type="text" name="username">
            <br>

            <input type="submit" name="input" value="Tampilkan">
        </form>

    </center>

    <!-- proses dalam satu file -->
    <?php

    if (isset($_POST["input"])) {

        $nama = $_POST["nama_lengkap"];
        $tanggal = $_POST["tgl"];
        $tpt_lahir = $_POST["tpt_lahir"];
        $jk = !empty($_POST["jenis_kelamin"]) ? $_POST["jenis_kelamin"] : 'anda belum memilih jenis kelamin';
        $hobby1 = !empty($_POST["membaca"]) ? $_POST["membaca"] : '';
        $hobby2 = !empty($_POST["nonton"]) ? $_POST["nonton"] : '';
        $hobby3 = !empty($_POST["ngoding"]) ? $_POST["ngoding"] : '';
        $alamat = $_POST["alamat"];
        $kabupaten = $_POST["kabupaten"];
        $pendidikan = $_POST["pendidikan"];
        $pekerjaan = $_POST["pekerjaan"];
        $agama = $_POST["agama"];

        $foto = $_FILES["foto"]["name"];
        if (move_uploaded_file($_FILES['foto']['tmp_name'], "img/" . $_FILES['foto']['name'])) {
            echo "Gambar Berhasil di upload";
        } else {
            echo "Gambar Gagal diupload";
        };

        $password = $_POST["pass"];
        $username = $_POST["username"];




        echo "$nama <br> 
            $tanggal <br>
            $tpt_lahir<br>
            $jk <br>
            $hobby1 <br>
            $hobby2 <br>
            $hobby3 <br>
            <div class='alert alert-primary' role='alert'>$alamat</div> <br>
            $kabupaten <br>
            $pendidikan <br>
            $pekerjaan <br>
            $agama <br>
            <img src='img/$foto'> <br>
            $password <br>
            $username <br>";
    }
    ?>

    <script src="js/bootstrap.js"></script>
</body>

</html>
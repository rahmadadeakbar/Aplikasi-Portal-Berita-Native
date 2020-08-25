<?php
include 'koneksi.php';
if (isset($_POST['update_user'])) {

    $id = $_POST['id_user'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $level = $_POST['level'];
    $password = !empty($_POST['password']) ? $_POST['password'] : '';
    if ($password != null) {
        $pass = md5($password);
    } else {
        $show = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");
        $data = mysqli_fetch_array($show);
        $pass = $data['password'];
    }

    $query_update = mysqli_query($koneksi, "UPDATE user SET username='$username',password='$pass',email='$email',no_hp='$nohp',level='$level' WHERE id_user='$id'");

    if ($query_update) {
        echo '<script>alert("Data Berhasil diupdate..")
            window.location.href="../data_user.php";
        </script>';
    } else {
        echo '<script>alert("Data Gagal diupdate..")
        window.location.href="../edit_user.php";
    </script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}

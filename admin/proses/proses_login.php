<?php
include 'koneksi.php';
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['pass']);

    // query menampilkan username dan password
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

    // logika loginnya
    if ($cek > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header('location:../index.php');
    } else {
        header("location:../login.php");
    }
}

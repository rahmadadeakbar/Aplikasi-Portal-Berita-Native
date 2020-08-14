<?php
include 'koneksi.php';

$id = $_GET['id'];

$query_delete = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");
if ($query_delete) {
    echo "<script>alert('data berhasil dihapus')
            window.location.href='../data_user.php';
        </script>";
} else {
    echo "<script>alert('data gagal dihapus')
        window.location.href='../data_user.php';
    </script>";

    echo '<script>window.history.back()</script>';
}

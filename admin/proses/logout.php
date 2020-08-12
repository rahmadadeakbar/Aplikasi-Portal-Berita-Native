<?php
// memulai session
session_start();

// menghapus session
session_destroy();

//mengembalikan kehalaman login
header('location:../login.php');

<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_middlethings"; //Nama database

//koneksi ke basis data
$db = mysqli_connect($host, $username, $password, $database);

//Cek koneksi basis data
if (mysqli_connect_errno()) {
    echo "Error: Tidak terhubung ke database";
    exit;
}

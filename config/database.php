<?php
require_once "env.php";

// $app_name = $_ENV['APP_NAME'];
$url = $env['BASEURL'];
$host = $env['DB_HOST'];
$username = $env['DB_USER'];
$password = $env['DB_PASS'];
$database = $env['DB_NAME'];

// var_dump($env); // Menampilkan seluruh isi dari $_ENV

try {
    $conn = new mysqli($host, $username, $password, $database);
} catch (\Throwable $e) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
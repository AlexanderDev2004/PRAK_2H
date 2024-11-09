<?php
// database.php
$serverName = "localhost"; // Ganti sesuai nama server
$connectionOptions = [
    "Database" => "toko_kelontong", // Ganti nama database
    "Uid" => "root",
    "PWD" => ""
];
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("Connection failed: " . print_r(sqlsrv_errors(), true));
}
?>

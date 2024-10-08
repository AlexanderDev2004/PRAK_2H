<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $selectedJenisKelamin = $_POST['jk'];
    $fav = $_POST['fav'];
    $membaca = $_POST['mem'];

    echo "<h2>Input Anda:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Jenis Kelamin: " . $selectedJenisKelamin . "<br>";
    echo "Favorit: " . $fav . "<br>";
    echo "Hobi: ";
    foreach ($membaca as $hobi) {
        echo $hobi . ", ";
    }
    echo "<br>";
}
?>
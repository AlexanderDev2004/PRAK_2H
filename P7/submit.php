<?php
    // Validasi name dan email sederhana di server
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi password minimal 8 karakter di server
    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters long.";
        exit; // Hentikan eksekusi jika validasi gagal
    }

    // Simpan atau proses data yang valid
    echo "Data name: $name, email: $email, password: $password";
?>

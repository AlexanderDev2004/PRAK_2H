<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias impedit 
unde ipsum voluptatum, corrupti minus sit excepturi nostrum quisquam? Quos 
impedit eum nulla optio.";

// Menampilkan string aslinya
echo "<p>{$loremIpsum}</p>";

// Menghitung panjang karakter
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";

// Menghitung jumlah kata
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";

// Mengubah string menjadi huruf besar
echo "<p>" . strtoupper($loremIpsum) . "</p>";

// Mengubah string menjadi huruf kecil
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>

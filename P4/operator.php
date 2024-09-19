<?php
 $a = 5;
 $b = 10;

 $tambah = $a + $b;
 $kurang = $a - $b;
 $kali = $a * $b;
 $bagi = $a / $b;
 $sisabagi = $a % $b;
 $pangkat = $a ** $b;
 $hasilsama = $a == $b;
 $hasiltidaksama = $a != $b;
 $hasillebihkecil = $a < $b;
 $hasillebihbesar = $a > $b;
 $hasillebihkecilSama = $a <= $b;
 $hasillebihbesarsama = $a >= $b;
 $hasiland = $a && $b;
 $hasil0r = $a || $b;
 $hasiln0tA = !$a;
 $hasiln0tB = !$b;
 $a += $b;
 $a -= $b;
 $a *= $b;
 $a /= $b;
 $a %= $b;
 $hasilIdentik = $a === $b;
 $samaDengan = $a !== $b;

 echo "Hasil dari $a + $b = $tambah <br>";
 echo "Hasil dari $a - $b = $kurang <br>";
 echo "Hasil dari $a * $b = $kali <br>";
 echo "Hasil dari $a / $b = $bagi <br>";
 echo "Hasil dari $a % $b = $sisabagi <br>";
 echo "Hasil dari $a ** $b = $pangkat <br>";
 echo "Hasil dari $a == $b = $hasilsama <br>";
 echo "Hasil dari $a != $b = $hasiltidaksama <br>";
 echo "Hasil dari $a < $b = $hasillebihkecil <br>";
 echo "Hasil dari $a > $b = $hasillebihbesar <br>";
 echo "Hasil dari $a <= $b = $hasillebihkecilSama <br>";
 echo "Hasil dari $a >= $b = $hasillebihbesarsama <br>";
 echo "Hasil dari $a && $b <br>";
 echo "Hasil dari $a || $b  <br>";
 echo "Hasil dari !$a  <br>";
 echo "Hasil dari !$b  <br>";
 echo "Hasil dari $a += $b  <br>";
 echo "Hasil dari $a -= $b  <br>";
 echo "Hasil dari $a *= $b  <br>";
 echo "Hasil dari $a /= $b  <br>";
 echo "Hasil dari $a %= $b  <br>";
 echo "Hasil dari $a === $b  <br>";
 echo "Hasil dari $a !== $b  <br>";

 
 // Total kursi di restoran
 $total_kursi = 45;
 
 // Kursi yang sudah ditempati
 $kursi_terisi = 28;
 
 // Menghitung kursi yang kosong
 $kursi_kosong = $total_kursi - $kursi_terisi;
 
 // Menghitung persentase kursi yang kosong
 $persentase_kosong = ($kursi_kosong / $total_kursi) * 100;
 
 echo "Persentase kursi yang kosong: " . $persentase_kosong . "%";
 ?>
 
?>
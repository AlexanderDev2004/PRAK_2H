<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d + $c;

echo "Variable a : {$a} <br>";
echo "Variable b : {$b} <br>";
echo "Variable c : {$c} <br>";
echo "Variable d : {$d} <br>";
echo "Variable e : {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiipa = 6.7;
$nilaibahasaindonesia = 9.7;
$rataRata = ($nilaiMatematika + $nilaiipa + $nilaibahasaindonesia) / 3;
echo "MTK : {$nilaiMatematika}";
echo "IPA : {$nilaiipa}";
echo "BHS IND : {$nilaibahasaindonesia}";
echo "Rata-Rata{$rataRata}";

$apakahsiswalulus = true;
$apakahsiswasudahlulus = false;
var_dump($apakahsiswalulus);
echo "<br>";
var_dump($apakahsiswasudahlulus);

$namadepan = "Alex";
$namabelakang = "Raya";
$namalengkap = $namadepan . " " . $namabelakang;
echo "nama depan : {$namadepan}";
echo "nama belakang : {$namabelakang}";
echo $namalengkap;
echo "<br>";
$listmahasiswa = ["Alex", "Raya", "Kurniawan"];
echo $listmahasiswa[0];
?>
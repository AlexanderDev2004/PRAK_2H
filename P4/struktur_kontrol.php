<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 89) {
    echo "Nilai B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 79) {
    echo "Nilai C";
} elseif ($nilaiNumerik >= 60 && $nilaiNumerik <= 69) {
    echo "Nilai D";
} else {
    echo "Nilai E";
}

$jaraksaatini = 0;
$jaraktarget = 500;
$peningkatanharian = 30;
$hari = 0;

while ($jaraksaatini < $jaraktarget) {
    $jaraksaatini += $peningkatanharian;
    $hari++;
}

echo "Jarak yang ditempuh: " . $jaraksaatini . " km";

$jumlahlahan = 10;
$jumlahperlahan = 5;
$jumlahtaman = 10;
$jumlahbuah = 0;
for ($i = 0; $i <= $jumlahlahan; $i++) {
    $jumlahbuah += ($jumlahperlahan * $jumlahtaman);
}

echo "Jumlah buah yang ditanam: " . $jumlahbuah;


$skorujian = [85, 92, 78, 99, 100];
$totalskor = 0;

foreach ($skorujian as $skor) {
    $totalskor += $skor;
}

echo "Total skor ujian: " . $totalskor;

$nilaisiswa = [85, 92, 78, 99, 100,55,70,64];
foreach ($nilaisiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai $nilai (tidak lulus)<br>";
        continue;
    }

    echo "Nilai $nilai (lulus)<br>";
    

    // Daftar nilai siswa
$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai dari yang terkecil ke yang terbesar
sort($nilai_siswa);

// Mengabaikan dua nilai tertinggi dan dua nilai terendah
$nilai_siswa_terpakai = array_slice($nilai_siswa, 2, count($nilai_siswa) - 4);

// Menghitung total nilai setelah mengabaikan dua nilai tertinggi dan terendah
$total_nilai = array_sum($nilai_siswa_terpakai);

// Menghitung rata-rata nilai
$rata_rata = $total_nilai / count($nilai_siswa_terpakai);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai . "\n";
echo "Nilai rata-rata: " . $rata_rata . "\n";


// Harga produk
$harga_produk = 120000;

// Persentase diskon
$diskon_persen = 20;

// Menghitung diskon jika harga lebih dari Rp 100.000
if ($harga_produk > 100000) {
    $diskon_amount = ($diskon_persen / 100) * $harga_produk;
    $harga_setelah_diskon = $harga_produk - $diskon_amount;
} else {
    $harga_setelah_diskon = $harga_produk;
}

echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($harga_setelah_diskon, 0, ',', '.');
echo "<br>";


// Skor yang dikumpulkan pemain
$poin = 550; // Ganti dengan skor aktual

// Menentukan apakah pemain mendapatkan hadiah tambahan
$hadiah_tambahan = ($poin > 500) ? "YA" : "TIDAK";

// Menampilkan hasil
echo "Total skor pemain adalah: " . $poin . "\n";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah_tambahan . "\n";
}

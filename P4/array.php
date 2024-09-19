<?php 
$nilaisiswa = [85,92, 78, 64,90,55,88,79,70,96];
$nilailulus = [];

foreach ($nilaisiswa as $nilai) {
    if($nilai >= 70) {
        $nilailulus[] = $nilai;
    }
}
echo "Nilai yang lulus: " . implode(", ", $nilailulus);

$daftarkarywan = [
    "lele" => 1,
    "bob" => 2,
    "David" => 5,
    "Lola" => 7
];
$karyawanpengalamanlimatahun = [];
foreach ($daftarkarywan as $karyawan => $pengalaman) {
    if($pengalaman > 5) {
        $karyawanpengalamanlimatahun[] = $karyawan;
    }
}
echo "Karyawan yang memiliki pengalaman lebih dari 5 tahun: " . implode(", ", $karyawanpengalamanlimatahun);


$daftarnilai = [
    'matematika' => [
        ['alice',85],
        ['bob',92],
        ['charlie',78],
    ],
    'fisika' => [
        ['david',64],
        ['eve',90],
        ['fred',55],
    ],
    'kimia' => [
        ['george',88],
        ['harry',79],
        ['idiot',70],
    ]
];
$matakuliah = 'fisika';
echo "Nilai $matakuliah: " . implode(", ", array_column($daftarnilai[$matakuliah], 1)) . "<br>";
foreach ($daftarnilai as $matakuliah => $nilaisiswa) {
    echo "Nilai $matakuliah: " . implode(", ", array_column($nilaisiswa, 1)) . "<br>";
}

$siswa_nilai = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90
];

// Menghitung rata-rata nilai
$total_nilai = array_sum($siswa_nilai);
$jumlah_siswa = count($siswa_nilai);
$rata_rata = $total_nilai / $jumlah_siswa;

// Mencetak daftar siswa yang nilai mereka di atas rata-rata
echo "Daftar siswa dengan nilai di atas rata-rata:\n";
foreach ($siswa_nilai as $nama => $nilai) {
    if ($nilai > $rata_rata) {
        echo $nama . ": " . $nilai . "\n";
    }
}


<?php
 function hitungUmur($tgl_lahir, $tgl_sekarang) {
    $umur = $tgl_sekarang- $tgl_lahir;
    return $umur;
}
function perkenalan ($nama,$salam="Halo") {
    echo $salam . ", " ." <br>";
    echo "Saya nama saya ".$nama." <br>";
    echo "Saya sedang belajar PHP <br>";
} 
 echo hitungUmur(2004, 2024);
 perkenalan("Alex","Selamat Datang");
?>

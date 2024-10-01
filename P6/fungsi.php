<?php
    function perkenalan ($nama, $salam = "Halo") {
        echo "Halo"."";
        echo "kenalkan nama saya".$nama. "<br/>";
        echo "Senang bertemu dengan anda";
    }

    perkenalan("Alex","Selamat Datang");
    echo "<br/>";
    $saya = "cocoy";
    $ucapansalam ="Selamat pagi";
    perkenalan($saya);
    
    function hitungUmur($thnLhr, $thnSkrg) {
        $umur = $thnSkrg - $thnLhr;
        return $umur;
    }
    echo "umur saya adalah ".hitungUmur(2004, 2024);

    echo "Saya umur ".hitungUmur(2004, 2024). " tahun";
    perkenalan("Alex");
?>
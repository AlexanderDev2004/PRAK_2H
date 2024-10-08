<?php
    // $umur;
    // if (isset($umur) && $umur > 18) {
    //     echo "Anda sudah berusia 18 tahun";
    // } else {
    //     echo "Anda belum berusia 18 tahun";
    // }

    $data = array("nama" => "Andi", "umur" => 25);
    if (isset($data["nama"])) {
        echo "Nama ".$data["nama"];
    } else {
        echo "Anda belum berusia 18 tahun";
    }
?>
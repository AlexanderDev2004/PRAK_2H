<?php
function Tampilangka(int $jumlah, $index =1) {
    echo "Dulang ke- {$index} <br>";
    if ($index < $jumlah) {
        
        Tampilangka($jumlah, $index + 1);
    }
}
 Tampilangka(20);
?>
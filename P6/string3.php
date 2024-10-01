<?php
$pesan = "Saya anak Banyuwangi";
$pesanperkata = explode(" ", $pesan);
$pesanPerkata = array_map(fn($pesan) => strrev($pesan), $pesanperkata);
$pesan = implode(" ", $pesanPerkata);
echo $pesan. " <br>";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form dengan PHP</title>
</head>
<body>

<form method="POST" action="index.php">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br><br>

    <label>Jenis kelamin:</label><br>
    <input type="radio" id="pria" name="jk" value="Pria">
    <label for="pria">Pria</label><br>
    <input type="radio" id="wanita" name="jk" value="Wanita">
    <label for="wanita">Wanita</label><br><br>

    <label for="fav">Pilih Favorit Anda:</label><br>
    <select name="fav" id="fav">
        <option value="">--Pilih Favorit Anda--</option>
        <option value="apel">Apel</option>
        <option value="pisang">Pisang</option>
        <option value="mangga">Mangga</option>
        <option value="jeruk">Jeruk</option>
    </select><br><br>

    <label>Pilih Warna Favorit:</label><br>
    <input type="checkbox" name="warna[]" value="merah"> Merah<br>
    <input type="checkbox" name="warna[]" value="biru"> Biru<br>
    <input type="checkbox" name="warna[]" value="hijau"> Hijau<br><br>

    <label>Saran:</label><br>
    <textarea name="saran"></textarea><br><br>

    <input type="submit" name="submit" value="Kirim">
</form>


</body>
</html>

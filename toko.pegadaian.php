<!DOCTYPE html>
<html>
<head>
    <title>Sistem Toko Pegadaian</title>
</head>
<body>

<h2>Form Pegadaian</h2>

<form method="POST" action="proses.pegadaian.php">

    Jumlah Pinjaman : <br>
    <input type="number" name="pinjaman" required><br><br>

    Bunga (%) : <br>
    <input type="number" name="bunga" required><br><br>

    Lama Pinjaman (bulan) : <br>
    <input type="number" name="lama" required><br><br>

    Telat (bulan) : <br>
    <input type="number" name="telat" required><br><br>

    <input type="submit" name="hitung" value="Hitung">

</form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <h1>
        <center>Pilih Barang<center>
    </h1>
    <h2>
        <center>Selamat Datang<center>
    </h2>
    <a href='login.php'></a>
    <table>
        <tr>
            <td>Makanan Minuman</td>
        </tr>
        <tr>
            <td>
                <?php
                $makanMinum = ["Gula", "Teh", "Kopi", "Susu", "Biskuit"];

                foreach ($makanMinum as $m) {
                    echo "<input class = 'makanMinum' name = 'makanMinum[]' value = '$m' type = 'checkbox'/>$m";
                    echo "<br>";
                }
                ?></td>
        </tr>
        <tr>
            <td><br>Peralatan Mandi</td>
        </tr>
        <tr>
            <td>
                <?php
                $mandi = ["Sikat Gigi", "Pasta Gigi", "Sabun", "Shampoo", "Sabun Cuci Muka"];

                foreach ($mandi as $m) {
                    echo "<input class = 'mandi' name = 'mandi[]' value = '$m' type = 'checkbox'/>$m";
                    echo "<br>";
                }
                ?></td>
        </tr>
        <tr>
            <td><br>Alat Tulis</td>
        </tr>
        <tr>
            <td>
                <?php
                $tulis = ["Pensil", "Penggaris", "Penghapus", "Bollpoint", "Kertas HVS"];

                foreach ($tulis as $m) {
                    echo "<input class = 'tulis' name = 'tulis[]' value = '$m' type = 'checkbox'/>$m";
                    echo "<br>";
                }
                ?></td>
        </tr>
        <tr>
            <td><br><input type="submit" value="Masuk Keranjang" /></td>
        </tr>
    </table>
</body>

</html>
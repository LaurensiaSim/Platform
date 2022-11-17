<?php
session_start();

if (isset($_SESSION['username'])) { ?>
    <!DOCTYPE html>
    <html>

    <head>
    </head>

    <body>
        <h1>Pilih Barang</h1>
        <h2>Selamat Datang</h2>
        <a href='logout.php'>[Logout]</a>
        <form action="afterPilihBarang.php" method="POST">
            <table>
                <tr>
                    <td>Makanan Minuman</td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $makanMinum = ["Gula", "Teh", "Kopi", "Susu", "Biskuit"];

                        foreach ($makanMinum as $m) {
                            echo "<input class = 'makanMinum' name = 'keranjang[]' value = '$m' type = 'checkbox'/>$m";
                            echo "<br>";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><br>Peralatan Mandi</td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $mandi = ["Sikat Gigi", "Pasta Gigi", "Sabun", "Shampoo", "Sabun Cuci Muka"];

                        foreach ($mandi as $m) {
                            echo "<input class = 'mandi' name = 'keranjang[]' value = '$m' type = 'checkbox'/>$m";
                            echo "<br>";
                        }
                        ?>
                    </td> 
                </tr>
                <tr>
                    <td><br>Alat Tulis</td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $tulis = ["Pensil", "Penggaris", "Penghapus", "Bollpoint", "Kertas HVS"];

                        foreach ($tulis as $m) {
                            echo "<input class = 'tulis' name = 'keranjang[]' value = '$m' type = 'checkbox'/>$m";
                            echo "<br>";
                        }
                        ?>
                    </td>
                </tr>
                <tr>

                    <td><br><input type="submit" value="Masuk Keranjang" name="masuk_keranjang" /></td>
                    <td><a href='isiKeranjang.php'>Lihat Isi Keranjang</a></td>
                </tr>
            </table>
        </form>

    </body>

    </html>
<?php }else{
    header("Location: login.php");
} ?>
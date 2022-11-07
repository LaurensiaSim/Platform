<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>Pesan Makanan dan Minuman</h1>
        <form action="halamanTampil.php" method="POST">
        <table>
            <tr>
                <td>Nama Pemesan</td>
                <td><input type="text" name="nama" value=""/></td>
            </tr>
            <tr>
                <td>Makanan</td>
                <td><input type="checkbox" name="makanan[]" value="NasGor">Nasi Goreng</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="makanan[]" value="MieGor">Mie Goreng</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="makanan[]" value="MieDog">Mie Godog</td>
            </tr>
            <tr>
                <td>Minuman</td>
                <td><input type="checkbox" name="minuman[]" value="EsTeh">Es Teh Manis</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="minuman[]" value="EsJeruk">Es Jeruk</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="minuman[]" value="TehPanas">Teh Panas</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="minuman[]" value="JerukPanas">Jeruk Panas</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"/></td>
            </tr>
        </table>
    </body>
</html>
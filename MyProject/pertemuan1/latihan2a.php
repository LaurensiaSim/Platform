<!DOCTYPE html>
<html>
    <body>
        <h1>FORM BIODATA</h1>
        <form action="latihan2b.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td><input type="text" name="nama" value=""/></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> : </td>
                <td><input type="text" name="alamat" value=""/></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td> : </td>
                <td><input type="text" name="umur" value=""/></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td><input type="radio" name="jenis_kelamin" value="Pria"/>Pria</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="radio" name="jenis_kelamin" value="Wanita">Wanita</td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td> : </td>
                <td><input type="checkbox" name="hobi[]" value="Music">Music</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Programming">Programming</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Game">Game</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Movie">Movie</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Travelling">Travelling</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Sport">Sport</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Organization">Organization</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="hobi[]" value="Automotive">Automotive</td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"/></td>
            </tr>
        </table>
    </body>
</html>
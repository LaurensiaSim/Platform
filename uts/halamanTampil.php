<!DOCTYPE html>
<html>
    <body>
        <h1>Tampilkan Pesanan</h1>
        <table>
            <tr>
                <td><?php echo $_POST["nama"]?> memesan</td>
            </tr>
            <tr>
                <td>Makanan</td>
            </tr>
            <tr>
                <td>
                <?php
                        if (isset($_POST['makanan'])) {
                            $makanan=$_POST['makanan'];
                            echo "<ol>";
                            for ($i=0; $i < count($makanan) ; $i++){
                                echo "<li>$makanan[$i]";
                            }
                            echo "</ol>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Minuman</td>
            </tr>
            <tr>
                <td>
                <?php
                        if (isset($_POST['minuman'])) {
                            $minuman=$_POST['minuman'];
                            echo "<ol>";
                            for ($i=0; $i < count($minuman) ; $i++){
                                echo "<li>$minuman[$i]";
                            }
                            echo "</ol>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo "<a href='./halamanInput.php?'>kembali</a>";?>
                </td>
            </tr>
        </table>
    </body>
</html>
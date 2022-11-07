<!DOCTYPE html>
<html>
    <body>
        <h1>FORM BIODATA - REVIEW</h1>
        <table border="solid">
            <tr>
                <td>Nama</td>
                <td><?php echo $_POST["nama"]?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo $_POST["alamat"]?></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><?php echo $_POST["umur"]?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $_POST["jenis_kelamin"]?></td>
            </tr>

            <tr>
                <td>Hobby</td>
                <td>
                    <?php
                        if (isset($_POST['hobi'])) {

                            $hobi=$_POST['hobi'];
                            echo "<br>";
                            for ($i=0; $i < count($hobi) ; $i++){
                                echo $hobi[$i]." ";
                            }
                        }
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>
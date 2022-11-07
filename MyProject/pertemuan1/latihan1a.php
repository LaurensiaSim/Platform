<!DOCTYPE html>
<html>
    <body>
        <form action="latihan1b.php" method="POST">
            <table>
                <tr>
                    <td>NIM</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="nim" value=""/>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td> 
                    <td> : </td>
                    <td>
                        <input type="text" name="nama" value=""/>
                    </td>           
                </tr>
                <tr>
                    <td>Status Kelulusan</td>
                    <td> : </td>
                    <td>
                        <select name="test">
                            <option value="KURANG MEMUASKAN">KURANG MEMUASKAN</option>
                            <option value="MEMUASKAN">MEMUASKAN</option>
                            <option value="SANGAT MEMUASKAN">SANGAT MEMUASKAN</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 41%">
                        <input type="submit" value="Submit Data"/>
                    </td>
                </tr>
            </table>   
        </form>
    </body>
</html>
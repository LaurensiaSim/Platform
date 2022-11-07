<!DOCTYPE html>
<html>
    <body>
        
            <table>
            <?php
                $suhu = [23, 45, 36, 27, 33, 32, 30, 28, 35, 32];

                $x=1;
                
                echo "<table border=1>";
                foreach($suhu as $s){
                    echo "<tr>
                        <td>Hari ke-$x : </td>
                        <td>$s <br></td>
                    </tr>";
                    $x++;
                    }
                echo "</table>";    
            ?>
        </table>
        
    </body>
</html>

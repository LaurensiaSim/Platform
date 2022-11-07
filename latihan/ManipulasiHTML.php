<!DOCTYPE html>
<html>
    <body>
        <?php
            $counter=1;

            echo "<ul>";
            while($counter <= 5){
                echo "<li> Loop ke-$counter";
                $counter++;
            }
            echo "</ul>"
        ?>
    </body>
</html>
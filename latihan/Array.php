<!DOCTYPE html>
<html>
    <body>
        <ol>
            <?php
                $daftarmenu = ["gudeg", "tongseng", "sate", "bakso"];

                foreach($daftarmenu as $menu){
                    echo "<li>$menu";
                }
            ?>
        </ol>
    </body>
</html>
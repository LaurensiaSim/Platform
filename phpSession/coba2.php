<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>

    <?php
        // Echo session variables that were set on previous page
        if(isset($_SESSION["favcolor"])){
            echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        }
        
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
        
        
    ?>
    </body>
</html>
<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            if(!isset($_SESSION["act"])){
                echo "Mohon kunjungi hal SATU";
            }
        ?>
    </body>
</html>
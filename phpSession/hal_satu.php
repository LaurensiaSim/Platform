<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
        $_SESSION["act"] = "satu";
        echo "<h1>Ini halaman SATU</h1>";
        ?>
    </body>
</html>
<?php
    // Start the session
    session_start();
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?PHP
            if(isset($_SESSION["act"])){
                echo "<h1>Ini halaman EMPAT</h1>";
                session_destroy();
            }else{
                header("Location: error.php");
            }
        ?>
    </body>
</html>
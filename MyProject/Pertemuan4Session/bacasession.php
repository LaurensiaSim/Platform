<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Membaca Nilai Session</title>
    </head>
    <body>
        <?php
            if(isset($_SESSION['pengguna'])){
                echo "<h1>Selamat Datang ".$_SESSION['pengguna']."</h1>";
            }
        ?>
    </body>
</html>
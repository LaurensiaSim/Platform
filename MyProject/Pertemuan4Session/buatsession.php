<?php
    session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Session</title>
    </head>
    <body>
        <?php
            $_SESSION['pengguna'] = "Joko Sembung";
            echo "<h1>Selamat, variabel session sudah terbentuk</h1>";
        ?>
    </body>
</html>
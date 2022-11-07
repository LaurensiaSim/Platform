<?php
    session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Membaca Array dari dalam Session</title>
    </head>
    <body>
        <?php
            if(isset($_SESSION["listBuah"])){
                $daftarBuah = $_SESSION['listBuah'];

                echo "<h1>Daftar Buah</h1>";
                echo "<ol>";
                foreach($daftarBuah as $buah){
                    echo "<li>$buah</li>";
                }
                echo "</ol>";
            }
            ?>
    </body>
</html>
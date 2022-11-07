<?php
    session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Menyimpan Array ke dalam session</title>
    </head>
    <body>
        <?php
            $daftarBuah = array("Apel", "Jeruk", "Semangka", "Jambu", "Mangga", "Durian");
            $_SESSION['listBuah'] = $daftarBuah;
            echo "<h1>Daftar Buah sudah disimpan ke dalam Session</h1>";
        ?>
    </body>
</html>
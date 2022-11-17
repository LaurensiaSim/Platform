<?php
    session_start()
?>
<!DOCTYPE html>
<head>
</head>
<body>
    <h1><center>Isi Keranjang</center></h1>
    <a href='logout.php'><center>[Logout]</center></a>
    
    <?php 
    //memeriksa apakah session keranjang sudah ada atau belum. jika sudah, maka akan mencetak isi keranjang menggunakan list di dalam foreach
        if (isset($_SESSION["keranjang"])) {
            $keranjang = $_SESSION['keranjang'];

            echo "<h2>Barang yang sudah anda pilih</h2>";
                echo "<ol>";
                foreach($keranjang as $k){
                    echo "<li>$k</li>";
                }
                echo "</ol>";
        }
        echo "<a href='afterLogin.php'>Kembali Memilih barang</a>";
    ?>
</body>
</html>
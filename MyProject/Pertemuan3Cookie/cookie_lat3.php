<html>
    <head>
        <title>Hitung Kunjungan</title>
    </head>
    <body>
        <?php
            if(isset($_COOKIE['counter'])){
                $c = $_COOKIE['counter'];
                $c = $c+1;
                setcookie("counter", $c);
                echo "<h1>Anda sudah mengunjungi halaman ini sebanyak " .$c. " kali</h1>";
            }else{
                echo "<h1>Anda sudah mengunjungi halaman ini sebanyak 1 kali</h1>";
                setcookie("counter","0");
            }
        ?>
    </body>
</html>
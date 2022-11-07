<html>
    <head>
        <title>Membuat Cookie</title>
    </head>
    <body>
        <?php
            if(isset($_COOKIE['cookie1'])){
                echo "<h1>Cookie ditemukan. Nilai Cookie adalah " .$_COOKIE['cookie1']. "</h1>";
            }else{
                echo "<h1>Maaf, Cookie tidak ditemukan</h1>";
            }
        ?>
    </body>
</html>
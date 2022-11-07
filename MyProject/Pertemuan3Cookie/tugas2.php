<html>
    <head>
    </head>
    <body>
        <h1>PENDAFTARAN BERHASIL</h1>
        <a href="tugas1.php">Lihat cookie</a>
        <?php 
        $no_induk = $_POST['no_induk'];
        $nama = $_POST['nama'];
        $status = $_POST['status'];
        $minat = implode(", ",$_POST['minat']);
        
        //set cookie
        setcookie("cookie1", $no_induk);
        setcookie("cookie2", $nama);
        setcookie("cookie3", $status);
        setcookie("cookie4", $minat);
        
        ?>
    </body>
</html>

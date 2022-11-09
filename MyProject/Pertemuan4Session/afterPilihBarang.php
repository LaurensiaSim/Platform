<?php
    session_start()
?>
<!DOCTYPE html>
<head>
</head>

<body>
    <h2>Barang sudah dimasukkan ke dalam keranjang</h2>
    <?php
    if (isset($_POST["keranjang"])) {
        if(!isset($_SESSION['keranjang'])){
            $_SESSION['keranjang']=array();
        }
        $keranjang = $_POST['keranjang'];
        foreach($keranjang as $item){
            array_push($_SESSION['keranjang'],$item);
        }
    }
        echo "<a href='isiKeranjang.php'>[Lihat Keranjang]</a>";
    
        echo "<a href='afterLogin.php'>[Pilih Barang]</a>";
    
    ?>

</body>

</html>
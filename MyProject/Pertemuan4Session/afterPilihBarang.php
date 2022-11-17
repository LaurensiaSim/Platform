<?php
    session_start()
?>
<!DOCTYPE html>
<head>
</head>

<body>
    <h2>Barang sudah dimasukkan ke dalam keranjang</h2>
    <?php
    // memeriksa hasil submit pilih barang ada atau tidak. jika ada, memeriksa apakah session keranjang ada atau belum. Jikabelum ada, maka menginisialisasi session keranjang sebagai array. setelah itu, menambahkan setiap item hasil submit barang yang diambil dari post menggunakan foreach dan kemudian melakukan push array session keranjang dengan setiap item di dalam looping
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
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Stok Barang</title>
</head>

<body>
    <h1>DAFTAR STOK BARANG TOKO KELONTONG BAHAGIA</h1>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Kode</td>
            <td>Nama Barang</td>
            <td>Jenis</td>
            <td>Lokasi</td>
            <td>Harga</td>
            <td>Jumlah Stok</td>
        </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "inventaris";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT kode, nama, jenis, lokasi, harga, jumlah FROM stok_barang";
            $result = mysqli_query($conn, $sql);
            ?>
            <?php 
                $counter = 1;
            ?>
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <?php foreach ($result as $value) { 
                        ?>
                        <tr>
                            <td>
                                <?php echo "$counter"; ?> 
                            </td>
                            <td>
                                <?= $value["kode"]; ?>
                            </td>
                            <td>
                                <?= $value["nama"]; ?>
                            </td>
                            <td>
                                <?= $value["jenis"]; ?>
                            </td>
                            <td>
                                <?= $value["lokasi"]; ?>
                            </td>
                            <td>
                                <?= $value["harga"]; ?>
                            </td>
                            <td>
                                <?= $value["jumlah"]; ?>
                            </td>
                        </tr>
                    <?php $counter=$counter+1; } ?>
                <?php } ?>
            <?php mysqli_close($conn); } ?>
        </td>
        </td>
    </table>
    <br><a href='InputStok.php'>Kembali</a>
</body>

</html>
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

    if (isset($_POST['simpan'])) {
        $kode = $_POST['kode'];
        $namaBarang = $_POST['namaBarang'];
        $jenis = $_POST['jenis'];
        $lokasi = $_POST['lokasi'];
        $hargaSatuan = $_POST['hargaSatuan'];
        $jumlahStok = $_POST['jumlahStok'];
        $sql = "INSERT INTO stok_barang (kode, nama, jenis, lokasi, harga, jumlah)
            VALUES ('$kode', '$namaBarang', '$jenis', '$lokasi', '$hargaSatuan', '$jumlahStok')";
        if (mysqli_query($conn, $sql)) {
            echo "<script type='text/javascript'>alert('New record created successfully');</script>";
        } else {
            echo "Error simpan record: " . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    } else if (isset($_POST['update'])) {
        $kode = $_POST['kode'];
        $namaBarang = $_POST['namaBarang'];
        $jenis = $_POST['jenis'];
        $lokasi = $_POST['lokasi'];
        $hargaSatuan = $_POST['hargaSatuan'];
        $jumlahStok = $_POST['jumlahStok'];
        $sql = "UPDATE stok_barang SET nama='$namaBarang', jenis='$jenis', lokasi='$lokasi', harga='$hargaSatuan', jumlah='$jumlahStok' WHERE kode='$kode'";

        if (mysqli_query($conn, $sql)) {
            echo "<script type='text/javascript'>alert('Update successfully');</script>";
        } else {
            echo "Error simpan record: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    } else if (isset($_POST['hapus'])) {
        $kode = $_POST['kode'];
        $sql = "DELETE FROM stok_barang WHERE kode=$kode";

        if (mysqli_query($conn, $sql)) {
            echo "<script type='text/javascript'>alert('Delete successfully');</script>";
        } else {
            echo "Error simpan record: " . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Input Stock Gudang</title>
    <style>
        .button {
            height: 30px;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>INPUT STOK GUDANG</h1>
    <h1>TOKO KELONTONG BAHAGIA</h1>
    <a href="daftar.php">| Lihat Daftar Stok |</a><br><br>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td><input class='kode' name='kode' type='text' value=""></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input class='namaBarang' name='namaBarang' type='text' value=""></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>
                    <?php
                    $jenis = ["Makanan", "Non Makanan"];
                    foreach ($jenis as $j) {
                        echo "<input class = 'jenis' name = 'jenis' value = '$j' type = 'radio'>$j<br>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>
                    <select name="lokasi" id="rak">
                        <option value="rakA">Rak A</option>
                        <option value="rakB">Rak B</option>
                        <option value="rakC">Rak C</option>
                        <option value="rakD">Rak D</option>
                        <option value="rakE">Rak E</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td><input class='hargaSatuan' name='hargaSatuan' type='text' value=""></td>
            </tr>
            <tr>
                <td>Jumlah Stok</td>
                <td><input class='jumlahStok' name='jumlahStok' type='text' value=""></td>
            </tr>
            <tr>

                <td><br><input type="submit" class='button' value="Simpan" name="simpan"></td>
                <td>
                    <br><input type="submit" class='button' value="Update" name="update">
                    <input type="submit" class='button' value="Hapus" name="hapus">
                </td>

            </tr>
        </table>
    </form>
</body>

</html>
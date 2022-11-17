<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jadwal_kuliah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['simpan'])) {
    $kode = $_POST['kode'];
    $matkul = $_POST['matkul'];
    $kelas = $_POST['kelas'];
    $pengampu = $_POST['pengampu'];
    $hari = $_POST['hari'];
    $jam1 = $_POST['jam1'];
    $jam2 = $_POST['jam2'];
    // $gabungan = GetSQLValueString($jam1, $jam2);
    $sql = "INSERT INTO jadwal (kode_matkul, nama_matkul, kelas, pengampu, hari, jam_mulai, jam_berakhir)
        VALUES ('$kode', '$matkul', '$kelas', '$pengampu', '$hari', '$jam1', '$jam2')";
    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('New record created successfully');</script>";
    } else {
        echo "Error simpan record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} 


?>

<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Jadwal</title>
    <style>
        .button {
            height: 30px;
            width: 100px;
        }
        body{
           padding: 60px; 
        }
    </style>
</head>

<body>
    <h1><center>JADWAL KULIAH SEMESTER 5</center></h1>
    <form action="" method="POST">
    <p>Lihat jadwal hari
    <select name="hari" id="hari">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    </select>
                    <input type="submit" class='button' value="Pilih" name="pilih">
    </p>
    </form>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Kode Mata Kuliah</td>
                <td colspan="3"><input class='kode' name='kode' type='text' value=""></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td colspan="3"><input class='matkul' name='matkul' type='text' value=""></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td colspan="3">
                    <select name="kelas" id="kelas">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        <option value="G">G</option>
                        <option value="H">H</option>
                        <option value="I">I</option>
                        <option value="J">J</option>
                        <option value="K">K</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="N">N</option>
                        <option value="O">O</option>
                        <option value="P">P</option>
                        <option value="Q">Q</option>
                        <option value="R">R</option>
                        <option value="S">S</option>
                        <option value="T">T</option>
                        <option value="U">U</option>
                        <option value="V">V</option>
                        <option value="W">W</option>
                        <option value="X">X</option>
                        <option value="Y">Y</option>
                        <option value="Z">Z</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pengampu</td>
                <td><input class='pengampu' name='pengampu' type='text' value=""></td>
            </tr>
            <tr>
                <td>Hari</td>
                <td colspan="3">
                    <select name="hari" id="hari_2">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jam</td>
                <td>
                    <select name="jam1" id="jam1">
                    <option value="07.00">07.00</option>
                    <option value="08.00">08.00</option>
                    <option value="09.00">09.00</option>
                    <option value="10.00">10.00</option>
                    <option value="11.00">11.00</option>
                    <option value="12.00">12.00</option>
                    <option value="13.00">13.00</option>
                    <option value="14.00">14.00</option>
                    <option value="15.00">15.00</option>
                    <option value="16.00">16.00</option>
                    <option value="17.00">17.00</option>
                    <option value="18.00">18.00</option>
                    </select>
                    <span>sampai</span>
                </td>
                <td>
                    <select name="jam2" id="jam2">
                    <option value="07.00">07.00</option>
                    <option value="08.00">08.00</option>
                    <option value="09.00">09.00</option>
                    <option value="10.00">10.00</option>
                    <option value="11.00">11.00</option>
                    <option value="12.00">12.00</option>
                    <option value="13.00">13.00</option>
                    <option value="14.00">14.00</option>
                    <option value="15.00">15.00</option>
                    <option value="16.00">16.00</option>
                    <option value="17.00">17.00</option>
                    <option value="18.00">18.00</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><br><input type="submit" class='button' value="Simpan" name="simpan"></td>
            </tr>
        </table>
    </form>
    <?php 
        if(isset($_POST['pilih'])){
            $hari = $_POST['hari'];
            $sql = "SELECT * FROM jadwal WHERE hari='$hari'";
            $result = mysqli_query($conn, $sql);

            echo "=================================================================================================================================";
            echo "<h3><center>$hari</center></h3>";
            echo "=================================================================================================================================";
            ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Jam Mulai</th>
      <th scope="col">Jam Berakhir</th>
      <th scope="col">Kode Matkul</th>
      <th scope="col">Matkul</th>
      <th scope="col">Kelas</th>
      <th scope="col">Pengampu</th>
    </tr>
  </thead>
  <tbody>
  <?php if (mysqli_num_rows($result) > 0) { ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <?php foreach ($result as $value) { 
                        ?>
                        <tr>
                            <td></td>
                            <td>
                                <?= $value["jam_mulai"]; ?>
                            </td>
                            <td>
                                <?= $value["jam_berakhir"]; ?>
                            </td>
                            <td>
                                <?= $value["kode_matkul"]; ?>
                            </td>
                            <td>
                                <?= $value["nama_matkul"]; ?>
                            </td>
                            <td>
                                <?= $value["kelas"]; ?>
                            </td>
                            <td>
                                <?= $value["pengampu"]; ?>
                            </td>                            
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php mysqli_close($conn); } ?>
  </tbody>
</table>
        <?php } ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


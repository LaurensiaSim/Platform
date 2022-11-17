<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platformdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
echo "<br>";

$sql = "SELECT nim, nama FROM mahasiswa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) { 
    echo "Nim: " . $row["nim"]. " - Nama: " . $row["nama"]. " " . "<br>";
  }
} else {
  echo "0 results";
}

// $sql = "INSERT INTO mahasiswa (nim, nama)
// VALUES ('195314010', 'Jhon');";

// if (mysqli_multi_query($conn, $sql)) {
//     echo "New records created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>NIM</td>
            <td>Nama</td>
        </tr>
        <?php if (mysqli_num_rows($result) > 0) { ?>
        <?php foreach ($result as $value) {?>
            <tr>
                <td>
                    <?= $value["nim"]; ?>
                </td>
                <td>
                    <?= $value["nama"]; ?>
                </td>
            </tr>
        <?php } ?>
        <?php } ?>

    </table>
</body>
</html>
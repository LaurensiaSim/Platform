<html>
<head>
    <title>PENDAFTARAN PESERTA SEMINAR</title></head>
<body>

    <?php if (isset($_COOKIE['cookie1'])) { ?>
        <h1>ANDA SUDAH TERDAFTAR SEBAGAI PESERTA SEMINAR</h1>
        <table border="solid">
        <tr>
            <td>No Induk</td>
            <td><?php echo $_COOKIE['cookie1']; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $_COOKIE['cookie2']; ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><?php echo $_COOKIE['cookie3']; ?></td>
        </tr>
        <tr>
            <td>Minat</td>
            <td><?php echo $_COOKIE['cookie4']; ?></td>
        </tr>
    </table>

    <?php } else { ?>
        <h1>PENDAFTARAN PESERTA SEMINAR</h1>
        <form action="tugas2.php" method="POST">
            <table>
                <tr>
                    <td>No Induk</td>
                    <td><input type="text" name="no_induk" value="" /></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="" /></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                    <?php
                    $DaftarStatus = ["Dosen","Mahasiswa"];
                    foreach ($DaftarStatus as $ds) {
                        echo "<input class = 'status' name = 'status' value = '$ds' type = 'radio'/>$ds";
                    }
                    ?></td>
                </tr>
                <tr>
                    <td>Minat</td>
                    <td>
                    <?php
                    $DaftarMinat = ["Programing", "Database", "Networking", "Multimedia"];

                    foreach ($DaftarMinat as $dm) {
                        echo "<input class = 'minat' name = 'minat[]' value = '$dm' type = 'checkbox'/>$dm";
                        echo "<br>";
                    }
                    ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Daftar" /></td>
                </tr>
            </table>
        <?php } ?>

        </table>
</body>
</html>
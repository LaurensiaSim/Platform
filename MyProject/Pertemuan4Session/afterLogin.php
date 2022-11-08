<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <?php
    if (isset($_POST["masuk"])) {
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        if ($username == "superman" && $password =="123") {
            echo "Login berhasil";
        } else {
            echo "<center>Maaf, username atau password Anda salah<center>";
            echo "<br><center><a href='login.php'>Coba Kembali</a><center>";
        }   
    } ?>
</body>

</html>
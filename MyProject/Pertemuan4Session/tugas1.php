<?php
    session_start()
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>LOGIN</h1>
        <form action="" method="POST">
            <label for="uname">Username</label>
            <input type="text" id="uname" name="uname" value=""><br><br>
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" value=""><br><br>
            <input type="submit" value="Masuk" name="masuk">

            <?php 
            if(isset($_POST["submit"])){
                $username = $_POST['uname'];
                $password = $_POST['pass'];
                if($username="superman" && $password="123"){
                    echo "Login berhasil";
                }else{
                    echo "Maaf, username atau password Anda salah";
                    header("errorLogin.php");
                }
            }
            ?>
        </form>
    </body>
</html>
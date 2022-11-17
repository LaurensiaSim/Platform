<?php
    session_start();
//memeriksa apakah session username ada/tidak. hal ini bertujuan untuk memeriksa apakah sudah login atau belum.
//jika sudah, maka akan langsung diarahkan ke afterlogin yang berisi form pilih
        if (isset($_SESSION['username'])){
            header("Location: afterLogin.php");
        }
//memeriksa apakah username dan pass sesuai atau tidak. jika sesuai, melakukan set session username menuju ke after login, jika tidak menuju ke login failed
        if(isset($_POST['masuk'])){
            $username = $_POST['uname'];
            $password = $_POST['pass'];
            if ($username == "superman" && $password == "123") { 
                $_SESSION['username']=$username;
                header("Location: afterLogin.php");
            }else{
                header("Location: loginFailed.php");
            }
        }
        
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
    </form>
</body>

</html>
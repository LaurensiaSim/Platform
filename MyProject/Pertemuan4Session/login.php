<?php
    session_start()
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>LOGIN</h1>
        <form action="afterLogin.php" method="POST">
            <label for="uname">Username</label>
            <input type="text" id="uname" name="uname" value=""><br><br>
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" value=""><br><br>
            <input type="submit" value="Masuk" name="masuk">
        </form>
    </body>
</html>
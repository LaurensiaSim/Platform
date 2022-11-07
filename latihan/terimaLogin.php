<!DOCTYPE html>
<html>
    <body>
        <?php 
            $username = $_POST["username"];
            $password = $_POST["pass"];

        
            if($username == "admin" && $password==123){
                echo "Selamat Datang, anda sukses login";
            }else{
                echo "Mohon maaf, anda gagal login";
            }
        ?>
    </body>
</html>
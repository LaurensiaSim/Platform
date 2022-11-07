<!DOCTYPE html>
<html>
    <body>
        
        <?php
        echo "IPK Anda : ".+ $_POST["ipk"];

            if($_POST["ipk"] < 2.76){
                echo "<br>Predikat Anda : Tidak Mendapat Predikat";
            }elseif($_POST["ipk"] <= 2.76 && $_POST["ipk"] <= 3.00){
                echo "<br>Predikat Anda : Memuaskan";
            }elseif($_POST["ipk"] > 3.00 && $_POST["ipk"] <= 3.50){
                echo "<br>Predikat Anda : Sangat Memuaskan";
            }else{
                echo "<br>Predikat Anda : Dengan Pujian";
            }
        ?>

        
    </body>
</html>
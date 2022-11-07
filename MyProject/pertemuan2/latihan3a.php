<?php

$hobi = ["Sepakbola" => "Sepakbola",
        "Renang" => "Renang",
        "Nonton Bioskop" => "Nonton Bioskop",
        "Main Game" => "Main Game",
        "Shopping" => "Shopping"];


echo "<h1>DAFTAR HOBI YG KUPILIH</h1>";
echo "<ol>";
foreach($_POST['hobi'] as $item){
    echo "<li>$item <br>";
}
echo "</ol>";

echo "<a href='./latihan3.php?'>kembali</a>";

?>

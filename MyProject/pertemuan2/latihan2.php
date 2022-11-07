<?php

$nim = ["101", "102", "103", "104", "105"];

echo "<h1>Daftar No Induk Mahasiswa</h1>";
echo "<ol>";
foreach($nim as $n){
    echo "<li><a href='./latihan2a.php?nim=$n'>$n</a>";
}
echo "</ol";
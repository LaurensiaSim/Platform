<?php

$nimNama = ["101" => "Budi",
            "102" => "Sari",
            "103" => "Rudi",
            "104" => "Jimmy",
            "105" => "Rachel"];

$terpilih = $_GET["nim"];

echo "<h1>Detil Mahasiswa</h1>";
echo "<table border='1'>";
echo "<tr><td>NIM</td><td>Name</td></tr>";
echo "<tr><td>$terpilih</td><td>$nimNama[$terpilih]</td></tr>";
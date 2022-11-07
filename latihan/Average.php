<?php
// cara 1
    // $numbers = [3, 2, 5, 3, 7];
    // $rataRata = array_sum($numbers)/count($numbers);
    // echo "Rata - rata = ";
    // print($rataRata);

// cara 2 Manual
    $nilai = [3, 2, 5, 3, 7];
    $total = 0;
    foreach($nilai as $x){
        $total = $total+$x;
    }
    $rata2 = $total/count($nilai);
    echo "Rata-rata = $rata2";
?>

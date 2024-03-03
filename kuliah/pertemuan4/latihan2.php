<?php
// Menghitung penjumlahan volume 2 buah kubus
// $sisi_a = 9;
// $sisi_b = 4;
// $volume_a = $sisi_a ** 3;
// $volume_b = $sisi_b ** 3;

// $totalVolume1 = $volume_a + $volume_b;
// echo "Total volume dari kubus A dan B adalah: " . $totalVolume1;

// echo "<br>";

// $sisi_c = 10;
// $sisi_d = 15;
// $volume_c = $sisi_c ** 3;
// $volume_d = $sisi_d ** 3;

// $totalVolume2 = $volume_c + $volume_d;
// echo "Total volume dari kubus C dan D adalah: " . $totalVolume2;


// $a = 9;
// $b = 4;

function total_volume_dua_kubus($a, $b) {
    $volume_a = $a ** 3;
    $volume_b = $b ** 3;
    $total = $volume_a + $volume_b;
    return $total;
    // return $a ** 3 + $b ** 3;
}

echo "Total volume dari kubus A dan B : " . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "Total volume dari kubus C dan D : " . total_volume_dua_kubus(10, 15);
echo "<br>";
echo "Total volume dari kubus E dan F : " . total_volume_dua_kubus(4, 5);
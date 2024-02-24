<?php
    echo "<h2>Menggunakan While</h2>";
    echo "Mulai <br>";
    $nilai_awal = 1;
    while ($nilai_awal  <= 10) {
    echo "hello world $nilai_awal x! <br>";
//      $nilai_awal++; <-- ini cara pertama
    $nilai_awal = $nilai_awal + 1; // <-- ini cara kedua
}
    echo "selesai <br>";

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    echo "<h2>Menggunakan For</h2>";
    echo "Mulai <br>";
    for ($i = 10; $i >= 1; $i--) {
        echo "Hello World $i x! <br>";
    }
    echo "Selesai <br>";






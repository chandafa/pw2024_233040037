<?php

// 6 perangkat komputer
$perangkatKeras = array("Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD");

// Tampilkan isi array 
echo "<b>Macam-macam perangkat keras komputer</b>";
echo "<ol>";
sort($perangkatKeras); // Mengurutkan array
foreach ($perangkatKeras as $perangkat) {
    echo "<li>$perangkat</li>";
}
echo "</ol>";

echo "<b>Macam-macam perangkat keras komputer baru</b>";
// 2 elemen baru pada array menggunakan fungsi array_push
array_push($perangkatKeras, "Card Reader", "Modem");

// Mengurutkan array
sort($perangkatKeras);

// Tampilkan array setelah penambahan elemen baru
echo "<ol>";
foreach ($perangkatKeras as $perangkat) {
    echo "<li>$perangkat</li>";
}
echo "</ol>";

?>
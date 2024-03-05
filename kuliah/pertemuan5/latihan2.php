<?php

$nama = ["🐱 : Kucing", "🐶 : Anjing", "🐟 : Ikan", "🐦 : Burung", "🐴 : Kuda", "🐸 : Kodok", "🐒 : Monyet"];

$makan = ["🥟 : Durian", "🍎 : Apel", "🍊 : Jeruk", "🥭 : Mangga", "🍌 : Pisang"];

$kendara = ["🚂 : Kereta", "🚌 : Bus", "✈ : Pesawat", "🚗 : Mobil", "🏍 : Motor"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Percobaan</title>
</head>

<body>

    <!-- menggunakan cara for -->
    <fieldset>
        <legend align="center"><b>Nama Binatang (For)</b></legend>
        <!-- menggunakan cara pertama -->
        <ol>
            <?php
        for ($i = 0; $i < 5; $i++) {                 //cara pertama
//      for ($i = 0; $i < count($nama); $i++) {      //cara kedua
       echo "<li><p>$nama[$i] </p></li>";}
        ?>
        </ol>
    </fieldset>

    <!-- batas  -->
    <br>
    <hr>
    <br>


    <fieldset>
        <legend align="center"><b>Nama Makanan (For)</b></legend>
        <!-- menggunakan cara kedua -->
        <ul>
            <?php
//    for ($i = 0; $i < 5; $i++) {                    //cara pertama
      for ($i = 0; $i < count($makan); $i++) {        //cara kedua
       echo "<li><p>$makan[$i] </p></li>";}
        ?>
        </ul>
    </fieldset>


    <!-- batas  -->
    <br>
    <hr>
    <br>

    <!-- menggunakan cara foreach -->

    <fieldset>
        <legend align="center"><b>Nama Kendaraan (Foreach)</b></legend>
        <ol>
            <?php
        foreach ($kendara as $k) :
            echo "<li><p>$k</p></li>";
        endforeach;
        ?>
        </ol>
    </fieldset>

    <!-- batas  -->
    <br>
    <hr>
    <br>

    <fieldset>
        <legend align="center"><b>Nama Makanan (Foreach)</b></legend>
        <ul>
            <?php
        foreach ($makan as $m) :
            echo "<li><p>$m</p></li>";
        endforeach;
        ?>
        </ul>
    </fieldset>



</body>

</html>
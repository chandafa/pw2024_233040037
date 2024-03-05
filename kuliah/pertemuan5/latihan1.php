<?php

echo "<hr>";
// Membuat Array cara lama
$hari = array('Senin','Selasa','Rabu');

// Membuat Array cara baru
$bulan = ['Januari','Februari','Maret'];

echo $hari[2];
echo "<br>";
echo $bulan[2];
echo "<br>";

// Percobaan
$mahasiswa = ['Candra',2004,3.9,'L'];
echo $mahasiswa[2];

echo "<hr>";
// Cetak semua isi Array
// var_dump() atau print_r() dan var_export()
var_dump($hari);
echo "<br>";
print_r($mahasiswa);
echo "<br>";
var_export($bulan);
echo "<hr>";

// Cara Manupulasi Array

// Menambahkan isi Array
// di Akhir: [] atau array_push()
// $bulan[] = 'Desember';
array_push($hari, 'Kamis', 'Jumat');
var_dump($hari);
echo "<br>";
echo "<br>";

// di awal: array_unshift()
array_unshift($mahasiswa, "233040037");
var_dump($mahasiswa);
echo "<hr>";

// Menghapus isi Array
// di akhir: array_pop()
array_pop($hari);
print_r($hari);

echo "<br>";

// di awal: array_shift()
array_shift($hari);
print_r($hari);
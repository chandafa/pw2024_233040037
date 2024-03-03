<?php

// tanggal dan tahun hari ini
echo date("l j F Y");
echo "<br>";

// jam hari ini
echo time();
echo "<br>";

// jam besok
echo time() + 86400;
echo "<br>";

// hari besok
echo date("l" , time() + 86400);
echo "<br>";

// hari sebelum hari ini
echo date("l" , time() - 86400);
echo "<br>";

// hari 100 tahun kedepan
echo date("l" , time() + 60 * 60 * 100);
echo "<br>";

// hari tahun ini
echo mktime(0,0,0,2,27,2024);
echo "<br>";

// menghitung tgl dan hari
echo date ("l", mktime(0,0,0,7,19,2004));
echo "<br>";